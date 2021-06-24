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

Route::post('/admin/smartphones/store', 'SmartphoneController@store')->name('storesmartphone')->middleware('auth');

Route::get('/admin/smartphones/', 'SmartphoneController@index')->name('listphones');

Route::get('/tests/addTest/{id}', 'TestController@addTest')->name('addtest')->middleware('auth');

Route::post('/tests/storetest/{id}', 'TestController@storeTest')->name('storetest')->middleware('auth');

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

Route::get('/courses/paid', function () {
    return view('courses/paid');
})->name('paidcourses');

Route::get('/about', function () {
    return view('defaultpages/about');
})->name('aboutpage');

Route::get('/requestSmartphone', 'SmartphoneController@requestSmartphone')->name('requestsmartphone')->middleware('auth');

Route::post('/requestSmartphone', 'SmartphoneController@createsSmartphoneSolicitation')->name('createsolicitation')->middleware('auth');

Route::get('/viewsolicitations', 'SmartphoneController@viewSolicitations')->name('viewsolicitations')->middleware('auth');

Route::get('/getSolicitations/{id?}', 'SmartphoneController@getSolicitations')->name('getsolicitation');

Route::post('/setSolicitationValue/{id?}', 'SmartphoneController@setSolicitationValue')->name('setsolicitationvalue')->middleware('auth');

Route::get('/users/list', 'AdminController@users')->name('getusers')->middleware('auth');

Route::get('/users/toggle/{id}', 'AdminController@toggleCategory')->name('toggleuser')->middleware('auth');