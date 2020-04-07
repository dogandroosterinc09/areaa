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
});

Route::post('/contact/store', 'ContactController@store')->name('contact.store');

Route::get('/executive-board/{slug}', 'BoardMemberController@showExecutive')->name('board.executive.show');

Route::get('/delegate-board/{slug}', 'BoardMemberController@showDelegate')->name('board.delegate.show');

Route::get('/event/{slug}', 'EventController@showEvent')->name('event.show');

Route::get('/{slug}/about', 'ChapterController@showChapterAbout');
Route::get('/{slug}/events', 'ChapterEventController@showChapterEvents');
Route::get('/{slug}/event/{event_slug}', 'ChapterEventController@showChapterEventDetail')->name('chapter_event.detail');

Route::get('/{slug?}', 'PageController')->name('page');
