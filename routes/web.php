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

Route::get('/bithome/de/welcome', function () {
    return view('webseite-mieten');
})->name('bithome');



/* Die nächsten drei Routen sind nicht länger erforderlich*/
Route::get('/de/impressum', function () {
    return view('layouts.impressum');
})->name('impressum');

Route::get('/agb', function () {
    return view('layouts.agb');
})->name('agb');

Route::get('/dsgvo', function () {
    return view('layouts.datenschutz');
})->name('dsgvo');


Route::post('lara-email-send/{locale}', 'MailController@sendEmail')->name('sendOrderMail');
Route::get('verify/{id}/{locale}', 'MailController@sendMailAfterVerification')->name('MailController@sendMailAfterVerification');
Route::get('/{locale}/{viewname}','LocalizationController@index')->name('bithome');
Route::get('/{locale}/{viewname}','LocalizationController@index')->name('linkroute');

