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



Route::group(['prefix' => ''], function () {
    Voyager::routes();
});


Route::get('/debug', function () {
	$data = \App\Model\NAV\GL_Account_Nav::get();
	foreach ($data as $key => $d) {
		print($d->No_." => ".number_format($d->glEntryYTD('2020-11-30 23:59:00')->sum('Amount'),'2','.',','));
		print('<br>');
	}
	dd();
});
