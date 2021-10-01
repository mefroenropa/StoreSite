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


