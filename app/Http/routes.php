<?php

Route::group(['middleware' => ['web', 'auth.store']], function () {
	
	// Backend Index
	Route::get('/admin', 'Backend\AdminController@index');

	// Backend Category Views
	Route::get('/admin/category/add', 'Backend\CategoryController@add');
	Route::get('/admin/category/{i}', 'Backend\CategoryController@detail');
	Route::get('/admin/categories', 'Backend\CategoryController@show');

	// Backend Product Views
	Route::get('/admin/product/add', 'Backend\ProductController@add');
	Route::get('/admin/product/{i}', 'Backend\ProductController@detail');
	Route::get('/admin/products', 'Backend\ProductController@show');


	// Frontend Main Views
    Route::get('/', 'Frontend\MainController@index');
    Route::get('/home', 'Frontend\MainController@index');
    Route::get('/login', 'Frontend\MainController@login');
    Route::get('/categories', 'Frontend\MainController@categories');
    Route::get('/register', 'Frontend\MainController@register');

    // Frontend Order Views
    Route::get('/order/{id}', 'Frontend\OrderController@detail');
    Route::get('/orders', 'Frontend\OrderController@show');

    // Frontend Payment Views
    Route::get('/payment/summary', 'Frontend\PaymentController@summary');
    Route::get('/payment/{id}', 'Frontend\PaymentController@detail');
    Route::get('/payments', 'Frontend\PaymentController@show');

    // Frontend Product Views
    Route::get('/product/summary', 'Frontend\ProductController@summary');
    Route::get('/product/{id}', 'Frontend\ProductController@detail');

});
