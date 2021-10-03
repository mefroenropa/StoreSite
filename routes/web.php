<?php

use System\Router\Web\Route;
//home routes
Route::get('/', 'HomeController@index', 'home.index');
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

//admin routes
Route::get('/admin', 'Admin\AdminController@index', 'admin.index');

//admin category routes
Route::get('/category', 'Admin\CategoryController@index', 'admin.category.index');
Route::get('/category/archive', 'Admin\CategoryController@archive', 'admin.category.archive');
Route::get('/category/create', 'Admin\CategoryController@create', 'admin.category.create');
Route::post('/category/store', 'Admin\CategoryController@store', 'admin.category.store');
Route::get('/category/edit/{id}', 'Admin\CategoryController@edit', 'admin.category.edit');
Route::put('/category/update/{id}', 'Admin\CategoryController@update', 'admin.category.update');
Route::delete('/category/delete/{id}', 'Admin\CategoryController@destroy', 'admin.category.delete');

//admin product routes
Route::get('/product', 'Admin\ProductController@index', 'admin.product.index');
Route::get('/product/archive', 'Admin\ProductController@archive', 'admin.product.archive');
Route::get('/product/create', 'Admin\ProductController@create', 'admin.product.create');
Route::post('/product/store', 'Admin\ProductController@store', 'admin.product.store');
Route::get('/product/edit/{id}', 'Admin\ProductController@edit', 'admin.product.edit');
Route::put('/product/update/{id}', 'Admin\ProductController@update', 'admin.product.update');
Route::delete('/product/delete/{id}', 'Admin\ProductController@destroy', 'admin.product.delete');

//admin gallery routes
Route::get('/gallery/archive', 'Admin\GalleryController@archive', 'admin.gallery.archive');
Route::get('/gallery/create/{id}', 'Admin\GalleryController@create', 'admin.gallery.create');
Route::post('/gallery/store/{id}', 'Admin\GalleryController@store', 'admin.gallery.store');
Route::get('/gallery/isFirst/{id}', 'Admin\GalleryController@isFirst', 'admin.gallery.isFirst');
Route::delete('/gallery/delete/{id}', 'Admin\GalleryController@destroy', 'admin.gallery.delete');

//admin brand routes
Route::get('/brand', 'Admin\BrandController@index', 'admin.brand.index');
Route::get('/brand/archive', 'Admin\BrandController@archive', 'admin.brand.archive');
Route::get('/brand/create', 'Admin\BrandController@create', 'admin.brand.create');
Route::post('/brand/store', 'Admin\BrandController@store', 'admin.brand.store');
Route::get('/brand/edit/{id}', 'Admin\BrandController@edit', 'admin.brand.edit');
Route::put('/brand/update/{id}', 'Admin\BrandController@update', 'admin.brand.update');
Route::delete('/brand/delete/{id}', 'Admin\BrandController@destroy', 'admin.brand.delete');

//admin discount routes
Route::get('/discount', 'Admin\DiscountController@index', 'admin.discount.index');
Route::get('/discount/archive', 'Admin\DiscountController@archive', 'admin.discount.archive');
Route::get('/discount/create', 'Admin\DiscountController@create', 'admin.discount.create');
Route::post('/discount/store', 'Admin\DiscountController@store', 'admin.discount.store');
Route::delete('/discount/delete/{id}', 'Admin\DiscountController@destroy', 'admin.discount.delete');

//admin store routes
Route::get('/admin/store', 'Admin\StoreController@index', 'admin.store.index');
Route::get('/admin/store/archive', 'Admin\StoreController@archive', 'admin.store.archive');
Route::get('/admin/store/create', 'Admin\StoreController@create', 'admin.store.create');
Route::post('/admin/store/store', 'Admin\StoreController@store', 'admin.store.store');
Route::get('/admin/store/edit/{id}', 'Admin\StoreController@edit', 'admin.store.edit');
Route::put('/admin/store/update/{id}', 'Admin\StoreController@update', 'admin.store.update');
Route::delete('/admin/store/delete/{id}', 'Admin\StoreController@destroy', 'admin.store.delete');

