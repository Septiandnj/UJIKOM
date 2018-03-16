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
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::group(['prefix'=>'infonisiswa','middleware'=>['auth','role:admin|guru|siswa']], function(){
    Route::resource('mapel','MapelController');
    Route::resource('guru', 'GuruController');
    Route::resource('hasil','HasilController');
    Route::resource('siswa', 'SiswaController');
    Route::resource('kelas','KelasController');
    Route::resource('jurusan','JurusanController');
    Route::resource('nilai','NilaiController');

    Route::get('/show', 'GuruController@show');
    Route::get('/show', 'SiswaController@shows');

    });
Route::get('/filter/{mapel}','HomeController@filter')->name('home')->middleware(['role:admin|siswa']);

Route::get('/jurusan', function () {
	return view('logguru/piljurusan');
});

Route::get('/kelas', function () {
	return view('logguru/kelas');
});

Route::get('/mapel', function () {
	return view('nilai/mapel');
});

Route::get('/show', function () {
    return view('guru/show');
});

Route::get('/shows', function () {
    return view('siswa/show');
});
// Route::get('settings/profile', 'SettingsController@profile');
// Route::get('settings/profile/edit', 'SettingsController@editProfile');
// Route::post('settings/profile', 'SettingsController@updateProfile');
// Route::get('settings/password', 'SettingsController@editPassword');
// Route::post('settings/password', 'SettingsController@updatePassword');
