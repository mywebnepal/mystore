<?php
Route::get('/page', function(){
   return redirect()->route('/');
});

Route::get('/', 'HomeController@home')->name('/');
Route::get('/user/product/search', 'HomeController@getProductSearchData')->name('user.product.search');
Route::post('/supportForm', 'HomeController@supportForm')->name('supportForm');
Route::post('/subscribe', 'HomeController@userSubscribe')->name('systemSubscribe');
Route::post('/product/comment', 'HomeController@productComment')->name('product.comment');

/*viewed producted*/
Route::post('/viewProduct/{id}', 'HomeController@viewedProduct')->name('mostViewProduct');


/*cart*/
Route::get('/cart/{id}', 'cartController@addCart')->name('addCart');
Route::get('/removeCart/{id}', 'cartController@removeCart')->name('removeCart');
Route::get('/removeMyCart/{id}', 'cartController@removeByAllCart')->name('removeAll');

Route::get('/myshopping', 'cartController@getCartPage')->name('cart.myshopping');
/*login route*/

Route::get('/page/{slug}', 'HomeController@myPage')->name('page_slug');
Route::get('/product/{slug}', 'HomeController@singleProduct')->name('product.single');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/booking/mybooking', 'bookingController@getBooking')->name('booking');

/*Route::get('/admin', 'Auth\SisadminController@showLoginForm');*/
// Route::get('/home', 'Auth\LoginController@userDashborad')->name('home');
Route::post('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('sisadmin')->group(function(){
   Route::get('/login', 'Auth\SisadminController@showLoginForm')->name('sisadmin.login');

   Route::post('/login', 'Auth\SisadminController@login')->name('sisadmin.login.submit');

   Route::get('/dashboard', 'AdminController@index')->name('sisadmin.dashboard');

   Route::post('/logout', 'Auth\SisadminController@adminlogout')->name('sisadmin.logout');

   /*categories*/
    Route::get('/categories/index', 'admin\CategoriesController@index')->name('sisadmin.categories.index');
   Route::get('/categories/create', 'admin\CategoriesController@create')->name('sisadmin.categories.create');
   Route::post('/categories/store', 'admin\CategoriesController@store')->name('sisadmin.categories.store');
   Route::get('/categories/{id}/edit', 'admin\CategoriesController@edit')->name('sisadmin.categories.edit');
   Route::get('/categories/show', 'admin\CategoriesController@show')->name('sisadmin.categories.show');
   Route::post('categories/{id}/update', 'admin\CategoriesController@update')->name('sisadmin.categories.update');

   Route::POST('/categories/{id}', 'admin\CategoriesController@delete')->name('sisadmin.categories.delete');

   /*subcategories*/
   Route::get('/sub_categories/index', 'admin\SubcategoryController@index')->name('sisadmin.subcategory.index');

   Route::post('/sub_categories/store', 'admin\SubcategoryController@store')->name('sisadmin.subcategory.store');

   Route::get('/sub_categories/delete', 'admin\SubcategoryController@destroy')->name('sisadmin.subcategory.delete');

   Route::get('/sub_categories/getSubCategory/{id}', 'admin\SubcategoryController@getSubCategory')->name('sisadmin.sub_categories.getSubCategory');

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
    
    /*--------------subscribe comment --------------------------------*/
    Route::get('product/admin/supportForm', 'admin\ProductsController@supportForm')->name('sisadmin.product.adminSupportForm');

    Route::get('/product/productComment', 'admin\ProductsController@productComment')->name('sisadmin.product.productComment');

    Route::get('comment/delete/{id}', 'admin\ProductsController@commentDelete')->name('sisadmin.comment.delete');

    Route::get('admin/subscribe', 'admin\ProductsController@userSubscribe')->name('sisadmin.admin.subscribe');

    /*-----------------------brand--------------------------------*/
    Route::get('/brand/index', 'admin\brandController@index')->name('sisadmin.brand.index');
    Route::post('/brand/store', 'admin\brandController@store')->name('sisadmin.brand.store');

    Route::get('brand/destroy/{id}', 'admin\brandController@destroy')->name('sisadmin.brand.destroy');

    Route::get('brand/{brand}/edit', 'admin\brandController@edit')->name('sisadmin.brand.edit');
    Route::post('brand/{id}/update', 'admin\brandController@update')->name('sisadmin.brand.update');


    /*notice board*/
     Route::get('noticeBoard/index', 'admin\NoticeBoardController@index')->name('sisadmin.notice.index');

     Route::post('noticeBoard/store', 'admin\NoticeBoardController@store')->name('sisadmin.notice.store');

     Route::get('noticeBoard/delete/{id}', 'admin\NoticeBoardController@destroy')->name('sisadmin.notice.delete');

     Route::get('noticeBoard/{id}/edit', 'admin\NoticeBoardController@edit')->name('sisadmin.noticeBoard.edit');

     Route::post('noticeBoard/{id}/update', 'admin\NoticeBoardController@update')->name('sisadmin.noticeBoard.update');



});