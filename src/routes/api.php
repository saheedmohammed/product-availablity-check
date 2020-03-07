<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::prefix('api')->group(function () {
Route::group(['middleware' => 'api','namespace' => 'Saheed\AvailabilityCheck\Http\Controllers',], function () {
    Route::get('products', 'ProductController@index')->name('products');
});
});
