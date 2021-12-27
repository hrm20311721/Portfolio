<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Faker\Extension\ContainerBuilder;
use Illuminate\Support\Facades\Route;

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
//TOP画面
Route::get('/', [HomeController::class,'index'])->name('home');
//問い合わせ送信
Route::post('contacts',[ContactController::class,'create'])->name('contact');

//ログイン後のみアクセス許可
Route::group(['middleware' => 'auth'],function(){

    //管理画面
    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');

});


require __DIR__.'/auth.php';
