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

// this route can return the state with the state id
Route::get('temukanKota/{id}', 'Demo\dependent_dropdown\DependensiDropdownController@temukanKotadenganIDProvinsi');

// Route::get('dropdownlist', 'DropdownController@getProvinsi');
// Route::get('dropdownlist/getkota/{id}', 'DropdownController@getKota');

Route::get('dropdownlist2', 'DropdownController@getProvinsi');
Route::get('dropdownlist2/getkota/{id}', 'DropdownController@getKota');
Route::get('dropdownlist2/getkecamatan/{id}', 'DropdownController@getKecamatan');
Route::get('dropdownlist2/getdesa/{id}', 'DropdownController@getDesa');
