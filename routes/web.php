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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/', 'AdminController@index')->name('adminindex')->middleware('auth');

Route::get('/admin/smartphones/create', 'SmartphoneController@create')->name('createsmartphone')->middleware('auth');

Route::post('/admin/smartphones/store', 'SmartphoneController@store')->name('storesmartphone');

Route::get('/admin/smartphones/', 'SmartphoneController@index')->name('listphones');

Route::get('/tests/addTest/{id}', 'TestController@addTest')->name('addtest');

Route::post('/tests/storetest/{id}', 'TestController@storeTest')->name('storetest');

Route::get('/user/getSmartphoner', 'SmartphoneController@userSubsciption')->name('getsmartphone');

Route::get('/docs', 'DocumentationController@index')->name('indexdocs');

Route::get('/docs/tests', 'DocumentationController@tests')->name('tests');

Route::get('/docs/testsresults/{id}', 'DocumentationController@testsresults')->name('testsresults');

Route::get('/support', function () {
    return view('defaultpages/support');
})->name('supportpage');

Route::get('/courses', 'CourseController@index')->name('courselist');

Route::get('/courses/free', function () {
    return view('courses/free');
})->name('freecourses');