<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::name('home')->get('/', function(){

       return view ('/pages/home');
});
/*
Route::group(['prefix'=> 'admin', 'middleware'=> ['admin:admin']], function(){
       Route::get('/login', [AdminController::class, 'loginForm']);
       Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::name('about')->get('/about-us', function(){
       return view ('pages/about');
});

Route::get('/help', function(){
       return view('pages.help');
});


Route::get('/register', function(){
       return view('pages.register');
});

Route::get('/login', function(){
       return view('pages.login');
});*/

Route::middleware(['auth:sanctum, web',config('jetstream.auth_session'),
    'verified'])->get('/dashboard', function(){
      return view('dashboard');
})->name('dashboard');

Route::middleware([
    'auth:sanctum, admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


/*
Route::middleware([
    'auth:sanctum,web',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum,admin','verified'])->get('/admin/dashboard', function(){
      return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum,web','verified'])->get('/dashboard', function(){
      return view('dashboard');
})->name('dashboard');*/

Route::resource('tasks',App\Http\Controllers\TaskController::class);
