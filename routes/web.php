<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', function () {
    dd('jelel YEEAH');
    return'This is blabla';
});
