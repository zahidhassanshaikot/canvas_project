<?php

Route::group(['middleware' => ['auth', 'verified:ture']], function () {
Route::get('/order-info', 'applicationController@orderInfo')->name('order-info');
Route::get('/accept-order-req/{id}', 'applicationController@acceptOrderRreq')->name('accept-order-req');
Route::get('/reject-order-req/{id}', 'applicationController@rejectOrderRreq')->name('reject-order-req');
Route::get('/demo/list', 'BackEndController@demoList')->name('demo-list');
Route::get('/add-demo', 'BackEndController@addDemo')->name('add-demo');
Route::post('/save-demo', 'BackEndController@saveDemo')->name('save-demo');
Route::get('/delete-demo/{id}', 'BackEndController@deleteDemo')->name('delete-demo');
Route::get('/delete-comment/{id}', 'BackEndController@deleteComment')->name('delete-comment');

Route::get('/comment-list', 'BackEndController@commentList')->name('comment-list');
Route::get('/customer-list', 'BackEndController@customerList')->name('customer-list');

 });

Route::get('/login-page', 'applicationController@login')->name('login-page');
Route::post('/search-result', 'applicationController@searchResult')->name('search-result');
Route::get('/my-order', 'applicationController@myOrder')->name('my-order');
Route::post('/customer-login', 'applicationController@customerLogin')->name('customer-login');
Route::get('/customer-logout', 'applicationController@customerLogout')->name('customer-logout');

Route::get('/single-post/{id}', 'applicationController@singlePost')->name('single-post');
Route::get('/new/order/{id}', 'applicationController@newOrder')->name('new-order');
Route::post('/send-order-req', 'applicationController@sendOrderReq')->name('send-order-req');
Route::post('/comment/demo', 'applicationController@commentOnPost')->name('comment_on_post');

Route::get('/demos/{id}', 'applicationController@demos')->name('demos');

Route::get('/registration', 'applicationController@reg')->name('reg');
Route::post('/save/customer-info', 'applicationController@saveCustomerInfo')->name('save-customer-info');

Route::get('/', 'applicationController@index')->name('/');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();