<?php

Route::get('/','homePageController@index');

Route::get('/register','registrasiController@index');
Route::post('/simpanRegister','registrasiController@registrasi');

Route::get('/loginSuplier','suplierController@index');
Route::post('/loginSuplier','suplierController@masukSuplier');
Route::get('/logoutSuplier','suplierController@logoutSuplier');

// ADMIN
Route::get('/loginAdmin','AdminController@index');
Route::post('/loginAdmin','AdminController@loginAdmin');
Route::get('/logoutAdmin','AdminController@logoutAdmin');

// PENGAJUAN
Route::get('/pengajuan','PengajuanController@pengajuan');
