<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/','HomeController@index')->name('home');
Route::get('/shop/categories','ProductController@categories')->name('shop.category');
Route::get('/shop/brands','ProductController@brands')->name('shop.brand');
Route::get('/shop/{slug}/{id}','ProductController@show')->name('shop.show');
Route::get('/search/product','SearchController@product')->name('search.product');
Route::get('/services','ServiceController@index')->name('service.index');
Route::get('/gallery','GalleryController@index')->name('gallery.index');
Route::get('/gallery/{slug}/{id}','GalleryController@show')->name('gallery.show');
Route::get('/about','AboutController@index')->name('about.index');
Route::get('/contact','AboutController@contact')->name('contact');

Route::post('/contact','ContactController@store')->name('contact.post');





