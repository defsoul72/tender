<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TenderController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/loginAdmin', function () {
    return view('admin_login');
});

Route::get('/login1', function () {
    return view('login1');
});

Route::get('/logout', function () {
    Session::forget('user');
    Session::forget('admin');
    return redirect('/login');
});

Route::get('/findTender',[TenderController::class,'findTender'])->name("tender.search");
Route::get('/tenderResult',[TenderController::class,'displayResult'])->name("tender.result");

Route::get('/',[TenderController::class,'index']);
Route::view('/register','register');
Route::view('/add_tender','add_tender');
Route::post("/login",[UserController::class,'login']);
Route::post("/loginAdmin",[AdminController::class,'loginAdmin']);
Route::post("/register",[UserController::class,'register']);

Route::get("/list_tender",[TenderController::class,'list_tender']);
Route::get("delete_tender/{id}",[TenderController::class,'delete_tender']);
Route::post("update_tender",[TenderController::class,'update_tender'])->name("update.tender");
Route::get("update_show/{id}",[TenderController::class,'update_show']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::post("add_tender",[TenderController::class,'add_tender']);



