<?php

use Illuminate\Support\Facades\Route;

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
//basic routes
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/job/{job}', 'JobController@show')->name('jobdetail');
Route::get('/browsejob', 'BrowseJobController@show')->name('browsejob');
Route::get('/contactus', 'ContactusController@index')->name('contactus');
Route::get('/browsejob/{job}', 'BrowseJobController@showsingle')->name('browsejobsingle');

Route::get('/resume', 'SubmitResumeController@index')->name('resume');

// search
Route::get('search', 'SearchController@index')->name('search');





//admin routes
Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::post('/admin/jobs', 'AdminJobController@store')->name('job.store');
    Route::get('/admin/jobs', 'AdminJobController@index')->name('job.index');
    Route::get('/admin/jobs/create', 'AdminJobController@create')->name('job.create');
    Route::delete('/admin/jobs/{job}/destroy', 'AdminJobController@destroy')->name('job.destroy');
    Route::get('/admin/jobs/{job}/edit', 'AdminJobController@edit')->name('job.edit');
    Route::patch('/admin/jobs/{job}/update', 'AdminJobController@update')->name('job.update');
    Route::get('admin/jobs/status/update', 'AdminJobController@updatestatuss')->name('job.update.status');
    //Admin Display All users
    Route::get('/admin/users', 'AdminUserController@index')->name('user.index');
    Route::get('/admin/companyusers', 'AdminUserController@companyindex')->name('user.company');
    Route::get('/admin/simpleusers', 'AdminUserController@simpleindex')->name('user.simple');
    // Admin Delete Users
    Route::delete('/admin/users/{user}/destroy', 'AdminUserController@destroy')->name('user.destroy');


//company routes
Route::get('/company', 'CompanyController@index')->name('company');
Route::post('/company/jobs', 'CompanyJobController@store')->name('companyjob.store');
Route::get('/company/jobs', 'CompanyJobController@index')->name('companyjob.index');
Route::get('/company/jobs/create', 'CompanyJobController@create')->name('companyjob.create');
Route::delete('/company/jobs/{job}/destroy', 'CompanyJobController@destroy')->name('companyjob.destroy');
Route::get('/company/jobs/{job}/edit', 'CompanyJobController@edit')->name('companyjob.edit');
Route::patch('/company/jobs/{job}/update', 'CompanyJobController@update')->name('companyjob.update');
//for company registration
Route::resource('/comreg', 'CompanyRegController');






