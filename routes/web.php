<?php

Route::get('/', function(){
	return view('client/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/dashboard', function(){
	return view('dashboard');
});*/

/*Route::get('/admin', 'Auth\SisadminController@showLoginForm');*/
Route::get('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('sisadmin')->group(function(){
   Route::get('/login', 'Auth\SisadminController@showLoginForm')->name('sisadmin.login');

   Route::post('/login', 'Auth\SisadminController@login')->name('sisadmin.login.submit');

   Route::get('/dashboard', 'AdminController@index')->name('sisadmin.dashboard');

   Route::post('/logout', 'Auth\SisadminController@adminlogout')->name('sisadmin.logout');

   /*categories*/
    Route::get('/categories/index', 'admin\CategoriesController@index')->name('sisadmin.categories.index');
   Route::get('/categories/create', 'admin\CategoriesController@create')->name('sisadmin.categories.create');
   Route::post('/categories/store', 'admin\CategoriesController@store')->name('sisadmin.categories.store');
   Route::get('/categories/show', 'admin\CategoriesController@show')->name('sisadmin.categories.show');
   Route::POST('/categories/{id}', 'admin\CategoriesController@delete')->name('sisadmin.categories.delete');

   /*product*/
    Route::get('/products/index', 'admin\ProductsController@index')->name('sisadmin.products.index');
    
    Route::get('/products/create', 'admin\ProductsController@create')->name('sisadmin.products.create');
    Route::post('/products/store', 'admin\ProductsController@store')->name('sisadmin.products.store');
    Route::get('/products/show', 'admin\ProductsController@show')->name('sisadmin.products.show');
    Route::get('/products/delete', 'admin\ProductsController@delete')->name('sisadmin.products.delete');

});

