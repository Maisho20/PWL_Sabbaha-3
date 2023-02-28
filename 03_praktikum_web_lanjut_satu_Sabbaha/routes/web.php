<?php

use Illuminate\Support\Facades\Route;
Use Illuminate\Support\Facades\View;
use App\Http\Controllers\ContactUs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return view ('hello', ['name' => 'Sabbaha Naufal Erwanda', 'nim' => '2141720221']);
});

// nomor 1
Route::get('/home', function(){
    return view ('home.home', ['name' => 'Sabbaha Naufal Erwanda', 'nim' => '2141720221', 'kelas' => 'TI-2C']);
});

// nomor 2
Route::get('/produk', function(){
    return view('produk');
});
Route::prefix('/produk')->group(function(){
    route::get('/sabun', function(){
        return view('produk.sabun');
    });
    route::get('/sampo', function(){
        return view('produk.sampo');
    });
});

// nomor 3
Route::get('/news/{news?}', function ($news = null) {
    return view('news.news', ['news' => $news]);
});

// nomor 4
Route::get('/program', function(){
    return view('program');
});
Route::prefix('/program')->group(function(){
    route::get('/spacetoon', function(){
        return view('program.spacetoon');
    });
    route::get('/latv', function(){
        return view('program.latv');
    });
});

// nomor 5
Route::get('/about-us', function () {
    return view('about-us');
});

// nomor 6
Route::resource('/kontak', ContactUs::class)->only([
    'index'
]);
