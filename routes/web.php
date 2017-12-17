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

    Route::get('/products/{products}/edit', 'admin\ProductsController@edit')->name('sisadmin.products.edit');

    Route::get('/products/{products}', 'admin\ProductsController@show')->name('sisadmin.products.show');

    Route::post('/products/{products}', 'admin\ProductsController@update')->name('sisadmin.products.update');

    Route::get('/products/delete/{id}', 'admin\ProductsController@destroy')->name('sisadmin.products.delete');
    /*product status*/
    Route::get('product/changeProductStatus', 'admin\ProductsController@changeProductStatus')->name('sisadmin.product.changeProductStatus');

    Route::get('product/makeFeaturedProduct', 'admin\ProductsController@makeFeaturedProduct')->name('sisadmin.product.makeFeaturedProduct');


    /*-----------------------brand--------------------------------*/
    Route::get('/brand/index', 'admin\brandController@index')->name('sisadmin.brand.index');
    Route::post('/brand/store', 'admin\brandController@store')->name('sisadmin.brand.store');

    Route::get('brand/destroy/{id}', 'admin\brandController@destroy')->name('sisadmin.brand.destroy');

});

