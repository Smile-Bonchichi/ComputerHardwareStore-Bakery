<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/product', function () {
    return view('product');
});
