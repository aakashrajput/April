<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;


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


Route::get('/', 'Main\MainController@loginPage')->name('mainloginPage');

//login & Logout
Route::post('/login', 'Main\MainController@Mainlogin')->name('mainlogin');
Route::get('/SellerRegister', 'Main\MainController@SellerRegister')->name('sreg');
Route::post('/SRegister', 'Main\MainController@SellerRegisterSubmit')->name('sellerregister');
Route::post('logout', 'Main\MainController@logout')->name('user.logout');



//Admin
Route::get('/admin/home', 'Admin\AdminController@home')->name('AdminHome');
Route::get('/seller-list', 'Admin\AdminController@SellerList');


//Seller
Route::post('/saveSeller', 'Seller\SellerController@SaveSeller');
Route::get('/seller/home', 'Seller\SellerController@home');



