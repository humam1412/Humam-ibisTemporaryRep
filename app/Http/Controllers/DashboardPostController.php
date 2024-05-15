<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\posting;
use App\Models\Category;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\File;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('dashboard.posts.index', [
             'posts' => posting::where('user_id', auth()->user()->id)->get()
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
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
       // return $request->file('image')->store('post-image');
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'image' => 'image|file'  //satuan max file kb
            
        ]);
 
        $newpost = new posting();
        
        if($request->file('image')){
            $newpost->image = $request->file('image')->store('post-image');
        }
        $newpost->title = $request->title;
        $newpost->body = $request->body;
        $newpost->slug = $request->slug;
        $newpost->category_id = $request->category_id;     
        $newpost->user_id = auth()->user()->id;
        $newpost->excerpt = Str::limit(strip_tags($request->body), 50);
        $newpost->save();
      
        return redirect('/dashboard/posts')
                        ->with('success','artikel has been created successfully.');
        //
         //:dns domain email benar
    //    $validatedData = $request->validate([
    //     // 'title' => 'required',
    //     // 'slug' => 'required|unique:posting',
    //     // 'category_id' => 'required',
    //     // 'body' => 'required'

    // ]);
    //     //otomatis input id
    //     $validatedData['user_id'] = auth()->user()->id;
    //     $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);
    //     posting::create($validatedData);
    
    // return redirect('/dashboard/posts')->with('success', 'post berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(posting $post)
    {
         return view('dashboard.posts.show', [
             'post' => $post
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(posting $post)
    {
        return view('dashboard.posts.edit', [
            //isi post di hal edit
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request, posting $post)
     {
          $validatedData = $request->validate([
                  'title' => 'required',
                    'slug' => 'required',//unique:posting
                    'category_id' => 'required',
                    'body' => 'required',
                  
        
               ]);
                 
               //otomatis input id
                   $validatedData['user_id'] = auth()->user()->id;
                   $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);
                //    if($request->file('image')){
                //       $validatedData['image'] = $request->file('image')->store('post-image');
                //   }
                 
  
    
    
    if($request->hasFile('image'))
    {
        $destination = 'storage/' . $post->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.' . $extension;
        $file->move('storage/', $filename);
        $post->image = $filename;
    }


    posting::where('id', $post->id)->update($validatedData);
        return redirect()->back()->with('status','Student Image Updated Successfully');
             return redirect('/dashboard/posts')->with('success', 'UPDATED');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(posting $post)
    {
        $post->delete();
        return redirect('/dashboard/posts')
                        ->with('success','DELETED');
        
    }
}
