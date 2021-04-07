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
	Route::group(['middleware' => 'admin.user'], function () {
		Route::get('/pl_report',['uses'=>'PLController@index','as'=>'index']);
		Route::get('/pl_report_download',['uses'=>'PLController@download','as'=>'download']);
	});

});


Route::get('/debug', function () {
	$data = \App\Model\NAV\GL_Account_Nav::get();
	foreach ($data as $key => $d) {
		print($d->No_." => ".number_format($d->glEntryYTD('2020-11-30 23:59:00')->sum('Amount'),'2','.',','));
		print('<br>');
	}
	dd();
});
Route::get('/debug2',function(){
	$data = \App\Model\GL_SubCategory::orderBy('order')->get();
	foreach ($data as $key => $d) {
		print($d->name);
		$sum = 0;
		$sum_prev= 0;

		foreach ($d->gl_accounts as $key => $g) {
			
			$sum+=$g->glnav->glEntryYTD('2020-11-30 23:59:00')->sum('Amount');
			$sum_prev+=$g->glnav->glEntryYTD('2020-10-31 23:59:00')->sum('Amount');
		}
		print(" =>".number_format($sum-$sum_prev,'2','.',','));
		print('<br>');
	}
});
