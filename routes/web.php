<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Homecontroller;
use App\Http\Controllers\Frontend\Aboutcontroller;
use App\Http\Controllers\Frontend\Contactcontroller;
use App\Http\Controllers\Frontend\Servicecontroller;
use App\Http\Controllers\Frontend\Blogcontroller;
use App\Http\Controllers\Testimonialcontroller;

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
Route::get('/',[Homecontroller::class,'index']);
Route::get('/about',[Aboutcontroller::class,'index']);
Route::get('/blog',[Blogcontroller::class,'index']);
Route::get('/contact',[Contactcontroller::class,'index']);

Route::get('/service',[Servicecontroller::class,'index']);
Route::get('/team',[Teamcontoller::class,'index']);
Route::get('/testimonoial',[Testimonialcontroller::class,'index']);