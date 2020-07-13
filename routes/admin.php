<?php

Route::get('/', 'AdminDashboardController')->name('index');

Route::get('/dashboard', 'AdminDashboardController')->name('index');


Route::get('/users/draw', 'UserController@draw')->name('users.draw');

Route::resource('/users', 'UserController');

// User All Members
Route::get('/user-admin', 'UserController@displayAllAdmin')->name('user.index_admin');
Route::get('/admin-edit/{id}', 'UserController@editAdmin')->name('user.edit_admin');
Route::post('/admin-edit/{id}', 'UserController@updateAdmin')->name('user.update_admin');
Route::get('/admin-create', 'UserController@createAdmin')->name('user.create_admin');
Route::post('/admin-create', 'UserController@storeAdmin')->name('user.store_admin');

Route::get('/user-all', 'UserController@displayAllMembers')->name('user.index_members');
Route::get('/user-edit/{id}', 'UserController@editMember')->name('user.edit_member');
Route::post('/user-edit/{id}', 'UserController@updateMember')->name('user.update_member');
Route::get('/members-generate-csv', 'UserController@generateCSV')->name('user.generate_csv');
// Route::get('/members-generate-csv/{$id}', 'UserController@generateCSV')->name('user.generate_csv');


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


Route::post('/faqs/position', 'FaqController@position')->name('faqs.position');
Route::resource('/faqs', 'FaqController');


Route::resource('/galleries', 'GalleryController');


Route::resource('/events', 'EventController');


Route::resource('/chapters', 'ChapterController');
Route::get('/chapters/pages/{id}', 'ChapterController@pages')->name('chapters.pages');
Route::get('/chapters/members/{id}', 'ChapterController@members')->name('chapters.members');



Route::resource('/benefits', 'BenefitsController');


Route::resource('/webinars', 'WebinarsController');

Route::get('/chapters/pages/{id}/edit/home', 'ChapterHomeController@edit')->name('chapters.pages.edit.home');
Route::resource('/chapter_homes', 'ChapterHomeController');



Route::resource('/chapter_events', 'ChapterEventController');


Route::resource('/chapter_board_members', 'ChapterBoardMembersController');


Route::resource('/chapter_board_members', 'ChapterBoardMemberController');


Route::resource('/media_categories', 'MediaCategoryController');


Route::resource('/media', 'MediaController');


Route::resource('/chapter_logos', 'ChapterLogoController');
Route::get('/chapter_logos/upload/{id?}', 'ChapterLogoController@uploadLogo')->name('chapter_logos.upload');


Route::resource('/chapter_page_about_uses', 'ChapterPageAboutUsController');
Route::get('/chapters/pages/{id}/edit/about_us', 'ChapterPageAboutUsController@edit')->name('chapters.pages.edit.about_us');


Route::resource('/chapter_page_events', 'ChapterPageEventController');
Route::get('/chapters/pages/{id}/edit/events', 'ChapterPageEventController@edit')->name('chapters.pages.edit.events');


Route::resource('/chapter_page_leaderships', 'ChapterPageLeadershipController');
Route::get('/chapters/pages/{id}/edit/leadership', 'ChapterPageLeadershipController@edit')->name('chapters.pages.edit.leadership');


Route::resource('/chapter_page_contact_uses', 'ChapterPageContactUsController');
Route::get('/chapters/pages/{id}/edit/contact_us', 'ChapterPageContactUsController@edit')->name('chapters.pages.edit.contact_us');


Route::resource('/members', 'MembersController');
Route::get('/member/{id}', 'MembersController@display')->name('members.display');

Route::resource('/chapter_page_homesliders', 'ChapterPageHomesliderController');


Route::resource('/chapter_contacts', 'ChapterContactController');


Route::get('/event_registrations/national', 'EventRegistrationController@national')->name('event_registrations.national');
Route::get('/event_registrations/chapter', 'EventRegistrationController@chapter')->name('event_registrations.chapter');
Route::resource('/event_registrations', 'EventRegistrationController');

Route::post('/gallery_upload', 'GalleryController@upload_images');


Route::resource('/benefits_categories', 'BenefitsCategoriesController');

// Route::get('/account', 'UserController@editAccount')->name('chapters.account');
Route::get('/account', 'UserController@editAccount')->name('account.edit');
Route::post('/account', 'UserController@updateAccount')->name('account.update');
