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
// Authentication Route
Auth::routes();

// Home Direct
Route::get('/home', 'HomeController@index')->name('home');

// LogOut

Route::get('/logout', 'HomeController@logout');


// Retrieve and manage Subject
Route::get('/displaySubject','HomeController@getSubject');

Route::post('/display','HomeController@store');

Route::get('/deleteSubject/{id}', 'HomeController@delete');


// For User Task

Route::get('/addTask/{id}', function($id){ 
    $id = $id;
    return view('addTask', ['id' => $id]);
})->name('addTask');

Route::get('/task/{id}','HomeController@getData');

Route::post('/add','HomeController@addTask');

Route::get('/deleteTask/{id}','HomeController@deleteData');

Route::post('/editTask/{id}','HomeController@updateTask');

Route::get('/editTask/{id}','HomeController@editTask');

Route::get('/search','HomeController@search');




// User Profile Management
Route::get('/profile','Human@profile')->name('user_profile');

Route::post('/profile/{id}','Human@uploadProfile');

Route::get('/edit/{id}','Human@editProfile');

// Swall
Route::get('/my-notification/{type}', 'HomeController@myNotification');

// Email.com
Route::get('sendhtmlemail','HomeController@html_email');
Route::get('sendSubjectemail','HomeController@subjects');


?>
