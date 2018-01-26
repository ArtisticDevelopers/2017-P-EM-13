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

Route::get('/', function () {
    return view('hotel.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/*HOTEL CONTROLLER*/
Route::get('/index', 'HotelController@index');
Route::get('/hotel', 'HotelController@hotel');

Route::get('/hotel/add', 'HotelController@addHotel');
Route::post('/hotel/add', 'HotelController@addHotelPost');

Route::get('/hotel/ajax/{id}/{type}', 'HotelController@ajax_data');

Route::get('/hotel/hotel-details', 'HotelController@hotelDetails');
Route::get('/hotel/hotel-types', 'HotelController@hotelTypes');
Route::get('/hotel/hotel-surroundings', 'HotelController@hotelSurroundings');
Route::get('/hotel/hotel-statusses', 'HotelController@hotelStatusses');
Route::get('/hotel/hotel-reviews', 'HotelController@hotelReviews');
Route::get('/hotel/hotel-locations', 'HotelController@hotelLocations');
Route::get('/hotel/hotel-images', 'HotelController@hotelImages');
Route::get('/hotel/hotel-facilities', 'HotelController@hotelFacilities');




/*BOOKING CONTROLLER*/
Route::get('/bookings/{filter?}', 'BookingController@Bookings');
Route::get('/bookings/action/{action}/{booking_id}/{value}', 'BookingController@booking_action');




Route::get('/room', 'RoomController@room');

Route::get('/room/add', 'RoomController@addRoom');
Route::post('/room/add', 'RoomController@addRoomPost');

Route::get('/room/room-types', 'RoomController@roomTypes');
Route::get('/room/room-reviews', 'RoomController@roomReviews');
Route::get('/room/room-images', 'RoomController@roomImages');
Route::get('/room/room-facilities', 'RoomController@roomFacilities');
