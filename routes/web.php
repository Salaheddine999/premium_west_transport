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

//Home Page Route
Route::get('/', 'HomeController@index')->name('acceuil');

//Service Page Route
Route::get('/services', 'ServiceController@index')->name('services');

//Flottes Page Route
Route::get('/flottes', 'FlotteController@index')->name('flottes');

//Contact Page Route
Route::get('/contacts', 'ContactController@index')->name('contacts');
Route::post('/contact/store', 'ContactController@store')->name('contact.store');
Route::post('/contact/send', 'ContactController@send')->name('contact.send');

//Reservation Page Route
Route::get('/reservations', 'ReservationController@index')->name('reservations');
Route::post('/confirm', 'ReservationController@store')->name('reservation.store');

//Mention legal Page route
Route::get('/mentions-legales', 'LegalController@index')->name('mentions-legales');
