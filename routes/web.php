<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('main');
});


Route::post('/','AjaxController@index');


Route::get('/testDB', function () {
    return DB::table('migrations')->get();
});


Route::fallback(function () {
    return view('main');
});


