<?php

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

/*Route::get('/', function () {
    return view('hotel/index');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/', 'LaixiamenController@index');   
Route::get('/hotel/{hotel_id}', 'LaixiamenController@show_hotel');
Route::get('/hotel/type/{type_id}', 'LaixiamenController@show_hotels_by_type');



Route::get('/index2', 'hotel@index2');  
Route::get('/about', 'hotel@about'); 
Route::get('/contact', 'hotel@contact'); 

Route::get('/roomlist', 'hotel@roomlist');
Route::get('/roomgrid', 'hotel@roomgrid');
Route::get('/roomdetails', 'hotel@roomdetails');
Route::get('/service', 'hotel@service');
Route::get('/shoppingcart', 'hotel@shoppingcart');
Route::get('/checkout', 'hotel@checkout');
Route::get('/invoice', 'hotel@invoice');

Route::get('/login', 'hotel@login');
Route::get('/signup', 'hotel@signup');
Route::get('/forgotpassword', 'hotel@forgotpassword');
Route::get('/error404', 'hotel@error404');

Route::get('/bloglist-sidebar', 'hotel@bloglist_sidebar');
Route::get('/bloglist', 'hotel@bloglist');
Route::get('/blog-sidebar', 'hotel@blog_sidebar');
Route::get('/blog', 'hotel@blog');


Route::post('/book/hotel/room/', 'BookingController@book');