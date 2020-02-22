<?php

Route::get('/', 'AdminDashboardController')->name('index');

Route::get('/dashboard', 'AdminDashboardController')->name('index');


Route::get('/users/draw', 'UserController@draw')->name('users.draw');

Route::resource('/users', 'UserController');


Route::resource('/roles', 'RoleController');


Route::resource('/permissions', 'PermissionController');


Route::resource('/permission_groups', 'PermissionGroupController');


Route::resource('/system_settings', 'SystemSettingController');


Route::resource('/pages', 'PageController');


Route::post('/ckeditor_image_upload', 'PageController@ckEditorImageUpload')->name('ckeditor_image_upload');

Route::post('/upload', 'PageController@upload')->name('upload');


Route::resource('/home_slides', 'HomeSlideController');


Route::get('/contacts', 'ContactController@index')->name('contacts.index');

Route::get('/contacts/{contact}', 'ContactController@show')->name('contacts.show');




Route::get('/board_members/executives', 'BoardMemberController@executives')->name('board_members.executives');
Route::get('/board_members/delegates', 'BoardMemberController@delegates')->name('board_members.delegates');
Route::post('/board_members/position', 'BoardMemberController@position')->name('board_members.position');
Route::resource('/board_members', 'BoardMemberController');