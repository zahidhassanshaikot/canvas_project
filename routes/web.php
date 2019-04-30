<?php

Route::get('/order-info', 'applicationController@orderInfo')->name('order-info');
Route::get('/demo/list', 'BackEndController@demoList')->name('demo-list');
Route::get('/add-demo', 'BackEndController@addDemo')->name('add-demo');
Route::post('/save-demo', 'BackEndController@saveDemo')->name('save-demo');
Route::get('/delete-demo/{id}', 'BackEndController@deleteDemo')->name('delete-demo');



Route::get('/login-page', 'applicationController@login')->name('login-page');

Route::get('/single-post/{id}', 'applicationController@singlePost')->name('single-post');
Route::post('/comment/demo', 'applicationController@commentOnPost')->name('comment_on_post');

Route::get('/demos/{id}', 'applicationController@demos')->name('demos');

Route::get('/registration', 'applicationController@reg')->name('reg');
Route::post('/save/customer-info', 'applicationController@saveCustomerInfo')->name('save-customer-info');

Route::get('/', 'applicationController@index')->name('/');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();