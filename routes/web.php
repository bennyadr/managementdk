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
$this->get('login', 'Auth\LoginController@showLoginForm');
$this->post('login', 'Auth\LoginController@login');

$this->post('logout', 'Auth\LoginController@logout');

Route::group(['middleware'=>'auth'],function(){

$this->get('pengguna/add', 'Auth\RegisterController@showRegistrationForm');
$this->post('register', 'Auth\RegisterController@register');

Route::get('pengguna','UsersController@index');
Route::delete('pengguna/delete/{id}','UsersController@delete')->name('pengguna.destroy');
Route::get('/pengguna/edit/{id}','UsersController@edit');
Route::put('/pengguna/{id}','UsersController@updateUser')->name('pengguna.update');

Route::get('/','DashboardController@index');
Route::get('group','GroupController@index');
Route::get('/group/add','GroupController@create');
Route::get('/group/edit/{id}','GroupController@edit');
Route::put('/group/{id}','GroupController@update')->name('group.update');
Route::post('group','GroupController@store');
Route::delete('/group/{id}','GroupController@destroy')->name('group.destroy');


Route::get('paket','PaketHostingController@index');
Route::get('/paket/add','PaketHostingController@create');
Route::get('/paket/edit/{id}','PaketHostingController@edit');
Route::put('/paket/{id}','PaketHostingController@update')->name('paket.update');
Route::post('paket','PaketHostingController@store');
Route::delete('/paket/{id}','PaketHostingController@destroy')->name('paket.destroy');

Route::get('vendor','VendorController@index');
Route::get('/vendor/add','VendorController@create');
Route::get('/vendor/edit/{id}','VendorController@edit');
Route::put('/vendor/{id}','VendorController@update')->name('vendor.update');
Route::post('vendor','VendorController@store');
Route::delete('/vendor/{id}','VendorController@destroy')->name('vendor.destroy');

Route::get('pelanggan','PelangganController@index');
Route::get('/pelanggan/add','PelangganController@create');
Route::get('/pelanggan/edit/{id}','PelangganController@edit');
Route::put('/pelanggan/{id}','PelangganController@update')->name('pelanggan.update');
Route::post('pelanggan','PelangganController@store');
Route::delete('/pelanggan/{id}','PelangganController@destroy')->name('pelanggan.destroy');
Route::get('/pelanggan/show/{id}','PelangganController@show');

Route::get('server','ServerController@index');
Route::get('/server/add','ServerController@create');
Route::get('/server/edit/{id}','ServerController@edit');
Route::put('/server/{id}','ServerController@update')->name('server.update');
Route::post('server','ServerController@store');
Route::delete('/server/{id}','ServerController@destroy')->name('server.destroy');
Route::get('/server/detail/{id}','ServerController@detail');


Route::get('proyek','ProyekController@index');
Route::get('/proyek/add','ProyekController@create');
Route::get('/proyek/edit/{id}','ProyekController@edit');
Route::put('/proyek/{id}','ProyekController@update')->name('proyek.update');
Route::post('proyek','ProyekController@store');
Route::delete('/proyek/{id}','ProyekController@destroy')->name('proyek.destroy');
/**
 *
 * detail Proyek
 *
 */

Route::get('/proyek/detail/{id}','ProyekController@detail');
Route::get('/proyek/detail/{id}/add','ProyekController@createDetail');
Route::get('/proyek/detail/{id}/edit','ProyekController@editDetail');
Route::put('/proyek/detail/{id}','ProyekController@updateDetail')->name('proyek.detail.update');
Route::post('proyek/detail','ProyekController@storeDetail');
Route::delete('/proyek/detail/{id}/delete','ProyekController@destroyDetail')->name('proyek.detail.destroy');
Route::post('/proyek/penagihan','ProyekController@print');

/**
 *
 * Hosting
 *
 */
Route::get('hosting','HostingController@index');
Route::get('/hosting/add','HostingController@create');
Route::get('/hosting/edit/{id}','HostingController@edit');
Route::put('/hosting/{id}','HostingController@update')->name('hosting.update');
Route::put('/hosting/status/{id}','HostingController@changeStatus')->name('hosting.changeStatus');

Route::post('hosting','HostingController@store');
Route::delete('/hosting/{id}','HostingController@destroy')->name('hosting.destroy');

/**
 *
 * detail Hosting
 *
 */

Route::get('hosting/detail/{id}','HostingController@show');
Route::get('/hosting/detail/{id}/add','HostingController@createDetail');
Route::delete('/hosting/detail/{id}','HostingController@destroyDetail')->name('hosting.detail.destroy');
Route::post('hosting/detail','HostingController@storeDetail');
Route::get('/hosting/detail/{id}/edit','HostingController@editDetail');
Route::put('/hosting/detail/{id}','HostingController@updateDetail')->name('hosting.detail.update');

/**
 *
 * Report
 *
 */
Route::get('report-proyek','ReportController@indexProject');
Route::post('report/project','ReportController@reportProyek');

/**
 *
 * Report Hosting
 *
 */
Route::get('report-hosting','ReportController@indexHosting');
Route::post('report/hosting','ReportController@reportHosting');

/**
 *
 * Report Pelanggan
 *
 */
Route::get('report-pelanggan','ReportController@indexPelanggan');
Route::post('report/pelanggan','ReportController@reportPelanggan');
/**
 *
 * File Proyek
 *
 */
Route::get('proyek/detail/{id}/upload','FileController@indexProyek');
Route::post('proyek/detail/file','FileController@uploadFileProyek');
Route::get('/proyek/file/{id}/delete','FileController@deleteFile');
Route::get('/proyek/file/{id}/download','FileController@downloadFile');


});
