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

/* GET Routes */

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function (){
    return view('about');
})->name('about');

Route::get('/support', function (){
    return view('support');
})->name('support');

Route::get('/contact', function (){
    return view('contact');
})->name('contact');

Route::get('/terms', function (){
    return view('terms');
})->name('terms');


/* GET Controller Routes */

Route::get('/job/edit/{id}', 'JobController@indexEdit')->name('displayEditJob');

Route::get('/job/delete/{id}', 'JobController@indexDelete')->name('displayDeleteJob');

Route::get('/job/{id}/applicants', 'ApplicationController@index')->name('applicants');

Route::get('/jobs', 'JobController@indexJobs')->name('jobs');

Route::get('/post', 'JobController@indexPost')->name('post');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/profile/edit', 'ProfileController@editIndex')->name('editProfile');


/* POST Controller Routes */

Route::post('/enquire', 'ContactController@send')->name('enquire');

Route::post('/job/delete', 'JobController@delete')->name('deleteJob');

Route::post('/job/update', 'JobController@updateJob')->name('updateJob');

Route::post('/profile/delete', 'ProfileController@delete')->name('delete');

Route::post('/submit', 'JobController@create')->name('post-submit');

Route::post('/update', 'ProfileController@update')->name('update');


/* Authentication Routes */

Auth::routes();


/* API Routes */

/* Return any job seeker by ID. */
Route::get('/api/jobseeker/{id}', 'APIController@getJobSeeker')->name('getJobSeeker');

/* Return job by ID. */
Route::get('/api/job/{id}', 'APIController@getJob')->name('getJob');

/* Return applicants to a job by job ID. */
Route::get('/api/applicants/job/{id}', 'APIController@getApplicants')->name('getApplicants');
