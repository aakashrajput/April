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
Route::get('/admin/approved/sellerlist', 'Admin\AdminController@SellerTotalList');
Route::delete('/admin/seller/delete/{email}', 'Admin\AdminController@deleteSeller');
Route::get('/admin/seller/approve/{email}', 'Admin\AdminController@approveSeller');
Route::get('/admin/sellerDetail/{email}', 'Admin\AdminController@SellerDetails');
Route::get('/admin/product/approval', 'Admin\AdminController@ProductApproveList');
Route::get('/admin/product/live', 'Admin\AdminController@ProductLiveList');
Route::get('/admin/product/approve/{productid}', 'Admin\AdminController@ProductApprove');
Route::delete('/admin/product/delete/{productid}', 'Admin\AdminController@ProductDelete');
Route::get('/admin/product/{productid}', 'Admin\AdminController@ProductDetail');





//Seller
Route::post('/saveSeller', 'Seller\SellerController@SaveSeller');
Route::get('/seller/home', 'Seller\SellerController@home');
Route::get('/seller/product/add', 'Seller\SellerController@productadd');
Route::post('/seller/product/submit', 'Seller\SellerController@productsubmit');
Route::get('/seller/product/list', 'Seller\SellerController@productlist');
Route::delete('/seller/product/delete/{productid}', 'Seller\SellerController@deleteProduct');



