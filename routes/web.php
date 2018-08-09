<?php

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/register', 'CustomersController@store');
Route::get('/logout', 'CustomersController@logout');
Route::post('/login', 'CustomersController@login');

Route::get('/contact', 'ContactController@show');
Route::post('contact', 'ContactController@mailToAdmin');

Route::get('/', 'PagesController@index');
Route::get('/register', 'PagesController@register');
Route::get('/checkout', 'PagesController@checkout');
Route::get('{category}', 'PagesController@category');
Route::get('{category}/{product}', 'PagesController@product');
