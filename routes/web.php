<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/front',function(){
    return view("front_home");
});
Route::get('/home',function(){
    return view("front_home");
});
Route::get('/',[PostController::class,'home'])-> name (name:'front.home');
Route::get('/about',[PostController::class,'about'])-> name (name:'front.about');
Route::get('/service',[PostController::class,'service'])-> name (name:'front.service');
Route::get('/feature',[PostController::class,'feature'])-> name (name:'front.feature');
Route::get('/team',[PostController::class,'team'])-> name (name:'front.team');
Route::get('/appointment',[PostController::class,'appointment'])-> name (name:'front.appointment');
Route::get('/testimonial',[PostController::class,'testimonial'])-> name (name:'front.testimonial');
Route::get('/page',[PostController::class,'page'])-> name (name:'front.page');
Route::get('/contact',[PostController::class,'contact'])-> name (name:'front.contact');
