<?php
Route::group(['namespace' => 'Saheed\AvailabilityCheck\Http\Controllers'], function () {
    Route::get('products', 'ProductController@index')->name('products');
});