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

Route::get('/index','controller2@index');
Route::get('/signUp','controller1@signUp');
Route::get('/roomService','controller1@roomService');
Route::get('/resetPassword','controller1@resetPassword');
Route::get('/Home','controller1@home');
Route::get('/dashboard','controller1@dashboard');
Route::get('/checkOut','controller1@checkOut');
Route::get('/checkOutDetail','controller1@checkOutDetail');
Route::get('/checkIn','controller1@checkIn');
Route::get('/roomReservation','controller1@roomReservation');
Route::get('/{id}/checkInNew','controller1@checkInNew');
Route::post('/checkOutDetail','controller1@checkOutDetail');
Route::get('/{id}/checkOutDetail','controller1@checkOutDetailNew');
Route::post('/roomServiceDetail','controller1@roomServiceDetail');
Route::post('/loginAdmin','controller1@loginAdmin');
Route::get('/login','controller1@login');
Route::get('/checkInDetail','controller2@checkInDetail');
Route::get('/editProfile','controller2@editProfile');
Route::get('/room-reservation-detail',function(){
	return view('room-reservation-detail');
});

Route::get('/room-detail',function(){
	return view('room-detail');
});
Route::get('/room-reservation-detail-check',function(){
	return view('room-reservation-detail-check');
});
Route::get('/paymentMethod','controller2@payment');
Route::get('/roomView','controller2@roomView');
Route::get('/toiletView','controller2@toiletView');