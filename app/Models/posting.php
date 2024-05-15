<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posting extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body', 'slug', 'category_id', 'image'];
    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', '%'.$filters['search'].'%')
        //          ->orWhere('body', 'like', '%'.$filters['search'].'%');
        // }
        
        //peringkas isset diatas, null coalesing operator
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%'.$search.'%')
            ->orWhere('body', 'like', '%'.$search.'%');
        });
        
        //search dengan join posting-category
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
