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

Route::get('/', 'FormController@welcome');


Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cek', 'CekController@indexCek')->name('cek');
Route::get('/result', 'CekController@resultCek')->name('result');
Route::post('/ce', 'CekController@Cek')->name('ce');
Route::get('/peta', 'PetaController@indexPeta')->name('peta');
Route::get('/peta2', 'Peta2Controller@indexPeta2')->name('peta2');
//ajax
Route::get('getKotas/{id}', 'CekController@getKotas');

Route::group(['middleware'=>['auth']], function(){
	Route::get('/form', 'FormController@indexForm');
	Route::post('/indikator', 'FormController@modalIndikator');
	Route::post('/editindikator/{id}', 'FormController@modalEditIndikator');
	Route::delete('/hapusindikator/{id}', 'FormController@HapusIndikator')->name('forms.destroy');

	Route::get('/provinsi', 'ProvController@indexProv');
	Route::post('/prov', 'ProvController@modalProv');
	Route::post('/editprov/{id}', 'ProvController@modalEditProv');
    Route::delete('/hapusprov/{id}', 'ProvController@HapusProv')->name('provinsis.destroy');

    Route::get('/kab_kota', 'KotaController@indexKota');
	Route::post('/kab-kota', 'KotaController@modalKota');
	Route::post('/edit_kab_kota/{id}', 'KotaController@modalEditKota');
	Route::delete('/hapus_kab_kota/{id}', 'KotaController@HapusKota')->name('kotas.destroy');

	Route::get('/data', 'PetaController@indexData');
	Route::delete('/hapusdata/{id}', 'PetaController@HapusData')->name('petas.destroy');
});
