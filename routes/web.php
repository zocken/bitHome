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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bithome', function () {
    return view('welcome');
})->name('bithome');




/* Footer*/
Route::get('/impressum', function () {
    return view('layouts.impressum');
})->name('impressum');

Route::get('/agb', function () {
    return view('layouts.agb');
})->name('agb');

Route::get('/dsgvo', function () {
    return view('layouts.datenschutz');
})->name('dsgvo');


Route::post('lara-email-send', 'MailController@sendEmail')->name('sendOrderMail');
Route::get('verify/{id}', 'MailController@sendMailAfterVerification')->name('MailController@sendMailAfterVerification');
