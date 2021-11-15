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
    return redirect('login');
});

'Auth'::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/beranda', 'DashboardController@index')->name('dashboard');
Route::get('/petugas', 'PetugasController@index')->name('petugas');
Route::get('/laporan-pengaduan', 'laporancontroller@index')->name('laporan-pengaduan');
Route::get('/update-pengaduan', 'updatecontroller@index')->name('update-pengaduan');
// Route khusus admin
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('send', 'HomeController@sendNotification');
    Route::get('siswa', 'StudentController@index');
});


// Route khusus Petugas
Route::group(['middleware' => ['role:petugas|siswa|admin']], function () {
    route::get('dashboard', 'DashboardController@index')->name('dashboard');
    route::get('profile', 'ProfileController@index')->name('profile');

});
Route::group(['middleware' => ['role:petugas']], function () {
    // route::get('dashboard', 'DashboardController@index')->name('dashboard');
});


// Route khusus Siswa
Route::group(['middleware' => ['role:siswa']], function () {
    // route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

