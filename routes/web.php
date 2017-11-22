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

//User Routes
Route::group(['namespace' => 'user'],function (){
    Route::get('/','HomeController@index');
    //Route::get('/{chat}','HomeController@chat');
    Route::get('post/{posts?}','PostController@post')->name('post');
    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
    Route::get('post/category/{category}','HomeController@category')->name('category');
    Route::get('contact','HomeController@contact')->name('contact');
    Route::get('about','HomeController@about')->name('about');


    //vue Routes
    Route::post('getPosts','PostController@getAllPosts');
    Route::post('saveLike','PostController@saveLike');
});


//Admin Routes
Route::group(['namespace' => 'Admin'],function (){
    //Tag Routes
    Route::resource('admin/tag','TagController');
    //post Routes
    Route::resource('admin/post','PostController');
    //Category Routes
    Route::resource('admin/category','CategoryController');
    //User Routes
    Route::resource('admin/user','UserController');
    //Role Routes
    Route::resource('admin/role','RoleController');
    //Permission Routes
    Route::resource('admin/permission','PermissionController');
    //index Routes
    Route::get('admin/home','HomeController@index')->name('admin.home');
    //Admin Auth Routes
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
    Route::post('admin-logout', 'Auth\LoginController@logoutAdmin')->name('admin.logout');
});
    //Chat Routes
    // Route::get('chat',function(){
    //     return view('chat');
    // });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
