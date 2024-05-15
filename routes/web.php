<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ProductController;
use App\Models\posting;
use App\Models\product;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//routing 

Route::get('/', function () {
    return view('home', [
        $id = '1',
        "title" => "home",
        'category' => Category::all()->except([1]),
        'post' => posting::latest()->filter(request(['search', 'category']))->take(3)->get()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        $id = '1',
        "title" => "about us",
        // 'category' => Category::all()->except([1]),
        // 'post' => posting::latest()->filter(request(['search', 'category']))->take(3)->get()
    ]);
});


Route::get('/products', function () {
    return view('products', [
        'title' => 'products and services',
        'products1' => product::whereRelation('category', 'name', 'bibit')->get(),
        'products2' => product::whereRelation('category', 'name', 'pelatihan')->get(),
        'products3' => product::whereRelation('category', 'name', 'instalasi')->get(),
        'products4' => product::whereRelation('category', 'name', 'pelatihan')->get(),

    ]);
});

Route::get('/articles', function () {
    //kirim data ke view
    return view(
        'articles',
        [
            "title" => "Artikel Terbaru",
            "nama" => "blablabla",
            "gambar" => "photos/blablabla.jpeg"
        ]
    );
});

Route::get('/articles', [PostController::class, 'index' ]);

//single post page

Route::get('/articles/{post}', [PostController::class, 'show' ]);

// Route::get('/articles', function(posting $category){
//     return view('articles', [
//         'title' => $category->name,
//         'post' => $category->category(),
//         'category' => $category->name
//     ]);
// });

Route::get('/categories/{category:slug}', function(Category $category){
    return view('artikel', [
        'title' => " Post by Category : $category->name",
        'post' => $category->posts,
        'category' => $category->name
    ]);
});


Route::get('/oopenFood', function(){
    return view('oopenFood', [
        'title' => 'Foods',
    
        
    ]);
});

Route::get('/rooms', function(){
    return view('rooms', [
        'title' => 'Rooms',
    
        
    ]);
});
Route::get('/entertaiment', function(){
    return view('entertaiment', [
        'title' => 'Entertaiment',
    
        
    ]);
});
Route::get('/bnf', function(){
    return view('bnf', [
        'title' => 'Banquet and Function',
    
        
    ]);
});

Route::get('/oopenBeverage', function(){
    return view('oopenBeverage', [
        'title' => 'Beverages',
    
        
    ]);
});

Route::get('/author/{user:name}', function(User $author){
    return view('category', [
        'title' => "Post By Author : $author->name",
        //->load : lazt eager load
        'posts' => $author->posts->load('category', 'user')
        
    ]);
});


Route::POST('/register', [RegisterController::class, 'reg' ]);
//login
Route::get('/login', [LoginController::class, 'index' ])->name('login');
//regist
Route::get('/register', [RegisterController::class, 'index' ])->middleware('guest');
//validasi login
Route::post('/login', [LoginController::class, 'authenticate' ]);
//logout
Route::post('/logout', [LoginController::class, 'logout' ]);
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

//php artisan route:list = tampilin list rute
Route::resource('/dashboard/posts', DashboardPostController::class);
// //->middleware('auth') = autentikasi akses saat login
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth');

Route::put('/dashboard/product', [ProductController::class, 'update']);
Route::resource('/dashboard/product', ProductController::class);
