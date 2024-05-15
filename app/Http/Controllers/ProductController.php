<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.product.index', [
            'products' => product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.product.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //
        // return $request->file('image')->store('post-image');
        $request->validate([
            'name' => 'required',
            'price' => 'required',//unique:posting
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:1024'  //satuan max file kb
            
        ]);
 
        $newpost = new product();
        
        if($request->file('image')){
            $newpost->image = $request->file('image')->store('post-image');
        }
        $newpost->name = $request->name;
        $newpost->description = $request->description;
        $newpost->price = $request->price;
        $newpost->category_id = $request->category_id;     
     
        $newpost->save();
      
        return redirect('/dashboard/product')
                        ->with('success','new product has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
        return view('dashboard.product.show', [
            'products' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
        
            // do the logic
    
        return view('dashboard.product.edit', [
            //isi post di hal edit
            'products' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
        $request->validate([
            'name' => 'required',
             'price' => 'required',//unique:posting
              'category_id' => 'required',
              'description' => 'required'
   
        ]);
           
            //$id = $request->input('id');
            $name = $request->input('name');
            $price = $request->input('price');
            $category_id = $request->input('category_id');
            $description = $request->input('description');
            //otomatis input id
            // $validatedData['user_id'] = auth()->user()->id;
            // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);
            if($request->file('image')){
               $image = $request->file('image')->store('post-image');
           }
            product::where('id', $product->id)->update([ 
            'name' => $name,
            'price' => $price,//unique:posting
             'category_id' => $category_id,
             'description' => $description ]);

        // $request->validate([
        //     'name' => 'required',
        //      'price' => 'required',//unique:posting
        //      'category_id' => 'required',
        //      'description' => 'required'
   
        // ]); 
           

        //     //otomatis input id
        //     if($request->file('image')){
        //        $product->image = $request->file('image')->store('post-image');
        //    }
          
        //     $product->update($request->all());
        return redirect('/dashboard/product')->with('success', 'UPDATED');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
        $product->delete();
        return redirect('/dashboard/product')
                        ->with('success','DELETED');
        
    }

    // public function authorize($ability, $arguments = [])
    // {
    //     return true;
    // }
   
}
