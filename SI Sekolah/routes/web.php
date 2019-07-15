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

Route::get('/', 'FrontEndController@beranda');

Auth::routes();

Route::get('/index', 'FrontEndController@beranda')->name('beranda');

Route::get('/berita', 'FrontEndController@berita')->name('berita_front');

Route::get('/data-guru', 'FrontEndController@guru')->name('data_guru');

Route::get('/data-siswa', 'FrontEndController@siswa')->name('data_siswa');

Route::get('/hubungi-kami', 'FrontEndController@hubungiKami')->name('hubungi_kami');

Route::get('/detail/{berita}', 'FrontEndController@detail')->name('detail');

//Route::get('/admin/pesan', function () {
//    return view('pages.pesan.pesan');
//})->name('pesan');

//Route::get('/admin', function () {
//    return view('pages.dashboard');
//})->name('dashboard');

//Route::get('/admin/detail', function () {
//    return view('pages.pesan.detail_pesan');
//})->name('detail');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
    Route::get('/', 'HomeController@index')->name('admin.dashboard');

    Route::get('/berita', 'BeritaController@index')->name('admin.berita');
    Route::get('/berita-create', 'BeritaController@create')->name('admin.berita.create');
    Route::get('/berita-edit/{id}', 'BeritaController@edit')->name('admin.berita.edit');
    Route::post('/berita', 'BeritaController@store')->name('admin.store.berita');
    Route::patch('/berita-edit/{id}', 'BeritaController@update')->name('admin.update.berita');
    Route::get('/berita-delete/{berita}', 'BeritaController@destroy')->name('admin.berita.delete');
    
    // Route::get('/user', 'UserController@index')->name('admin.user');
    // Route::get('/user-create', 'UserController@create')->name('admin.user.create');
    // Route::get('/user-edit', 'UserController@edit')->name('admin.user.edit');

    Route::get('/guru', 'GuruController@index')->name('admin.guru');
    Route::get('/guru-create', 'GuruController@create')->name('admin.guru.create');
    Route::get('/guru-edit/{id}', 'GuruController@edit')->name('admin.guru.edit');
    Route::post('/guru', 'GuruController@store')->name('admin.store.guru');
    Route::patch('/guru-edit/{id}', 'GuruController@update')->name('admin.update.guru');
    Route::get('/guru-delete/{id}', 'GuruController@destroy')->name('admin.berita.guru');

    Route::get('/siswa', 'SiswaController@index')->name('admin.siswa');
    Route::get('/siswa-create', 'SiswaController@create')->name('admin.siswa.create');
    Route::get('/siswa-edit/{id}', 'SiswaController@edit')->name('admin.siswa.edit');
    Route::post('/siswa', 'SiswaController@store')->name('admin.store.siswa');
    Route::patch('/siswa-edit/{id}', 'SiswaController@update')->name('admin.update.siswa');
    Route::get('/siswa-delete/{id}', 'SiswaController@destroy')->name('admin.destroy.siswa');


    Route::get('/pesan', 'HomeController@pesan')->name('admin.pesan');
});