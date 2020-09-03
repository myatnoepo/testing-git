<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend

Route::get('/','PageController@home')->name('homepage');

Route::get('detail','PageController@itemdetail')->name('itemdetailpage');

Route::get('promotions','PageController@promotions')->name('promotionspage');

Route::get('itemsbybrand','PageController@itemsbybrand')->name('itemsbybrandpage');

Route::get('filteritems','PageController@filteritems')->name('filteritemspage');

Route::get('shoppingcart','PageController@shoppingcart')->name('shoppingcartpage');

Route::get('loginpage','PageController@loginpage')->name('loginpage');

Route::get('register','PageController@register')->name('registerpage');

// Backend---------------------------
Route::resource('orders','OrderController');
Route::middleware('role:Admin')->group(function(){

Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('items','ItemController');
Route::resource('brands','BrandController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubcategoryController');
Route::resource('orders','OrderController');});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


