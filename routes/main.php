<?php

/*
|--------------------------------------------------------------------------
| Main Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "main" middleware group. Now create something great!
|
*/

Route::group([
    'middleware' => ['auth.customer'],
    'prefix' => 'customer',
    'as' => 'customer.'
], function () {
    Route::get('/', 'FrontDashboardController@index')->name('dashboard');

    Route::get('/dashboard', 'FrontDashboardController@index')->name('dashboard');
    Route::get('/member_directory', 'FrontDashboardController@showMemberDirectory')->name('dashboard.member_directory');
    Route::get('/member_directory/search', 'FrontDashboardController@searchMemberDirectory')->name('dashboard.member_directory.search');
    Route::get('/member/{id}', 'FrontDashboardController@showMemberDetail')->name('dashboard.member_detail');
});

Route::post('/contact/store', 'ContactController@store')->name('contact.store');

Route::get('/executive-board/{slug}', 'BoardMemberController@showExecutive')->name('board.executive.show');

Route::get('/delegate-board/{slug}', 'BoardMemberController@showDelegate')->name('board.delegate.show');

Route::get('/event/{slug}', 'EventController@showEvent')->name('event.show');

Route::post('/event/event-register', 'EventController@registerToEvent')->name('event.register');

//Chapter Routes
Route::get('/{slug}/about-us', 'ChapterPageController@indexAboutUs');
Route::get('/{slug}/events', 'ChapterPageController@indexEvents');
Route::get('/{slug}/leadership-board', 'ChapterPageController@indexLeadershipBoard');
Route::get('/{slug}/contact-us', 'ChapterPageController@indexContactUs');

Route::get('/{slug}/event/{event_slug}', 'ChapterEventController@showChapterEventDetail')->name('chapter_event.detail');
Route::get('/{slug}/leadership-board/{board_slug}', 'ChapterBoardMemberController@showChapterBoardMemberDetail')->name('chapter_board_member.detail');

Route::post('/{slug}/contact-us', 'ChapterContactController@store')->name('chapter_contact.store');

Route::get('/{slug?}', 'PageController')->name('page');
