<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'Admin', 'namespace' => 'Admin'], function(){
	Route::get('Index/index', 'IndexController@index'); //首页概览

	Route::get('Profile/index', 'ProfileController@index'); //个人信息

	Route::get('Admin/index', 'AdminController@index'); //管理员管理
	Route::get('Admin/{id}/detail', 'AdminController@detail')->where('id', '[0-9]+'); //管理员详情
	Route::get('Admin/create', 'AdminController@create'); //管理员添加表单
	Route::post('Admin/store', 'AdminController@store'); //管理员添加
	Route::get('Admin/{id}/edit', 'AdminController@edit')->where('id', '[0-9]+'); //管理员编辑表单
	Route::put('Admin/update', 'AdminController@update'); //管理员编辑
	Route::delete('Admin/delete', 'AdminController@delete')->where('id', '[0-9]+'); //管理员删除

	Route::get('Product/index', 'ProductController@index')->name('ProductIndex'); //商品管理
	Route::get('Product/{id}/detail', 'ProductController@detail')->where('id', '[0-9]+'); //商品详情
	Route::get('Product/create', 'ProductController@create'); //商品添加表单
	Route::post('Product/store', 'ProductController@store'); //商品添加
	Route::get('Product/{id}/edit', 'ProductController@edit')->where('id', '[0-9]+'); //商品编辑表单
	Route::put('Product/update', 'ProductController@update'); //商品编辑
	Route::delete('Product/delete', 'ProductController@delete')->where('id', '[0-9]+'); //商品删除

	Route::get('Brand/index', 'BrandController@index'); //商品品牌管理
	Route::get('Brand/create', 'BrandController@create'); //商品品牌添加表单
	Route::post('Brand/store', 'BrandController@store'); //商品品牌添加
	Route::get('Brand/{id}/edit', 'BrandController@edit')->where('id', '[0-9]+'); //商品品牌编辑表单
	Route::put('Brand/update', 'BrandController@update'); //商品品牌编辑
	Route::delete('Brand/delete', 'BrandController@delete')->where('id', '[0-9]+'); //商品品牌删除

	Route::get('Category/index', 'CategoryController@index'); //商品分类管理
	Route::get('Category/create', 'CategoryController@create'); //商品分类添加表单
	Route::post('Category/store', 'CategoryController@store'); //商品分类添加
	Route::get('Category/{id}/edit', 'CategoryController@edit')->where('id', '[0-9]+'); //商品分类编辑表单
	Route::put('Category/update', 'CategoryController@update'); //商品分类编辑
	Route::delete('Category/delete', 'CategoryController@delete')->where('id', '[0-9]+'); //商品分类删除

	Route::get('Article/index', 'ArticleController@index'); //文章管理
	Route::get('Article/{id}/detail', 'ArticleController@detail')->where('id', '[0-9]+'); //文章详情
	Route::get('Article/create', 'ArticleController@create'); //文章添加表单
	Route::post('Article/store', 'ArticleController@store'); //文章添加
	Route::get('Article/{id}/edit', 'ArticleController@edit')->where('id', '[0-9]+'); //文章编辑表单
	Route::put('Article/update', 'ArticleController@update'); //文章编辑
	Route::delete('Article/delete', 'ArticleController@delete')->where('id', '[0-9]+'); //文章删除
});
