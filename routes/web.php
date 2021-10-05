<?php

use System\Router\Web\Route;
//home routes
Route::get('/', 'HomeController@index', 'home.index');
Route::get('/home', 'HomeController@index', 'home.home');

Route::post('/newslitter/register', 'HomeController@newslitterRegister', 'newslitter.register');

// product routes
Route::get('/products/{category}', 'HomeController@products', 'product.products');
Route::get('/search', 'HomeController@search', 'product.search');

Route::get('/product/{id}', 'HomeController@show', 'product.show');

Route::get('/view-plus/{id}', 'HomeController@viewPlus', 'view.plus');

//comment routes
Route::post('/comment/store/{id}', 'HomeController@commentStore', 'comment.store');

// wishlist routes
Route::get('/wishlist', 'HomeController@wishlist', 'wishlist');
Route::get('/add-to-wishlist/{id}', 'HomeController@wishlistAdd', 'add.to.wishlist');
Route::delete('/wishlist/delete/{id}', 'HomeController@wishlistDestory', 'wishlist.delete');

//cart routes 
Route::post('/cart/store', 'HomeController@cartStore', 'cart.store');
Route::delete('/cart/delete/{id}', 'HomeController@cartDestory', 'cart.delete');
Route::get('/cart-list', 'HomeController@cartList', 'cart.list');
Route::get('/checkout', 'HomeController@checkout', 'checkout');


//////////////////////
// home routes ended//
//////////////////////


//auth routes
Route::get('/forgot', 'Auth\ForgotController@view', 'auth.forgot.view');
Route::post('/forgot', 'Auth\ForgotController@forgot', 'auth.forgot');
Route::get('/reset-password/{token}', 'Auth\ResetPasswordController@view', 'auth.reset-password.view');
Route::post('/reset-password/{token}', 'Auth\ResetPasswordController@resetPassword', 'auth.reset-password');

Route::get('/logout', 'Auth\LogoutController@logout', 'auth.logout');

Route::get('/login', 'Auth\LoginController@view', 'auth.login.view');
Route::post('/login', 'Auth\LoginController@login', 'auth.login');

Route::get('/register', 'Auth\RegisterController@view', 'auth.register.view');
Route::post('/register', 'Auth\RegisterController@register', 'auth.register');
Route::get('/activation/{token}', 'Auth\RegisterController@activation', 'auth.activation');

// profile routes
Route::get('/profile', 'Auth\ProfileController@index', 'profile.view');
Route::get('/profile/edit/{id}', 'Auth\ProfileController@edit', 'profile.edit');
Route::post('/profile/update/{id}', 'Auth\ProfileController@update', 'profile.update');
Route::get('/profile/bought/show', 'Auth\ProfileController@boughtShow', 'profile.bought.show');



//admin routes
Route::get('/admin', 'Admin\AdminController@index', 'admin.index');

//admin category routes
Route::get('/admin/category', 'Admin\CategoryController@index', 'admin.category.index');
Route::get('/admin/category/restor/{id}', 'Admin\CategoryController@restor', 'admin.category.restor');
Route::get('/admin/category/create', 'Admin\CategoryController@create', 'admin.category.create');
Route::post('/admin/category/store', 'Admin\CategoryController@store', 'admin.category.store');
Route::get('/admin/category/edit/{id}', 'Admin\CategoryController@edit', 'admin.category.edit');
Route::put('/admin/category/update/{id}', 'Admin\CategoryController@update', 'admin.category.update');
Route::delete('/admin/category/delete/{id}', 'Admin\CategoryController@destroy', 'admin.category.delete');

//admin product routes
Route::get('/admin/product', 'Admin\ProductController@index', 'admin.product.index');
Route::get('/admin/product/create', 'Admin\ProductController@create', 'admin.product.create');
Route::post('/admin/product/store', 'Admin\ProductController@store', 'admin.product.store');
Route::get('/admin/product/edit/{id}', 'Admin\ProductController@edit', 'admin.product.edit');
Route::put('/admin/product/update/{id}', 'Admin\ProductController@update', 'admin.product.update');
Route::delete('/admin/product/delete/{id}', 'Admin\ProductController@destroy', 'admin.product.delete');

//admin gallery routes
Route::get('/admin/gallery/create/{id}', 'Admin\GalleryController@create', 'admin.gallery.create');
Route::post('/admin/gallery/store/{id}', 'Admin\GalleryController@store', 'admin.gallery.store');
Route::get('/admin/gallery/isFirst/{id}', 'Admin\GalleryController@isFirst', 'admin.gallery.isFirst');
Route::delete('/admin/gallery/delete/{id}', 'Admin\GalleryController@destroy', 'admin.gallery.delete');

//admin brand routes
Route::get('/admin/brand', 'Admin\BrandController@index', 'admin.brand.index');
Route::get('/admin/brand/create', 'Admin\BrandController@create', 'admin.brand.create');
Route::post('/admin/brand/store', 'Admin\BrandController@store', 'admin.brand.store');
Route::get('/admin/brand/edit/{id}', 'Admin\BrandController@edit', 'admin.brand.edit');
Route::put('/admin/brand/update/{id}', 'Admin\BrandController@update', 'admin.brand.update');
Route::delete('/admin/brand/delete/{id}', 'Admin\BrandController@destroy', 'admin.brand.delete');

//admin discount routes
Route::get('/admin/discount', 'Admin\DiscountController@index', 'admin.discount.index');
Route::get('/admin/discount/create', 'Admin\DiscountController@create', 'admin.discount.create');
Route::post('/admin/discount/store', 'Admin\DiscountController@store', 'admin.discount.store');
Route::delete('/admin/discount/delete/{id}', 'Admin\DiscountController@destroy', 'admin.discount.delete');

//admin store routes
Route::get('/admin/store', 'Admin\StoreController@index', 'admin.store.index');
Route::get('/admin/store/create', 'Admin\StoreController@create', 'admin.store.create');
Route::post('/admin/store/store', 'Admin\StoreController@store', 'admin.store.store');
Route::get('/admin/store/edit/{id}', 'Admin\StoreController@edit', 'admin.store.edit');
Route::put('/admin/store/update/{id}', 'Admin\StoreController@update', 'admin.store.update');
Route::delete('/admin/store/delete/{id}', 'Admin\StoreController@destroy', 'admin.store.delete');

//admin sold routes
Route::get('/admin/sold', 'Admin\SoldController@index', 'admin.sold.index');
Route::get('/admin/sold/{status}/{id}', 'Admin\SoldController@status', 'admin.sold.status');

//admin comments routes
Route::get('/admin/comment', 'Admin\CommentController@index', 'admin.comment.index');
Route::get('/admin/comment/isConfirm/{isConfirm}/{id}', 'Admin\CommentController@isConfirm', 'admin.comment.isConfirm');
Route::get('/admin/comment/unConfirm', 'Admin\CommentController@unConfirm', 'admin.comment.unConfirm');
Route::delete('/admin/comment/delete/{id}', 'Admin\CommentController@destroy', 'admin.comment.delete');

//////////////////////
// admin routes ended//
//////////////////////