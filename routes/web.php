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

//Route::get('/', function () {
//    return view('home');
//})->name('home');

Route::get('/', 'HomeController@index')->name('home');
Route::view('candidate','layouts.candidate')->name('candidate');
Route::view('candidatedetails','layouts.candidate-details')->name('candidatedetails');
Route::view('Companies','layouts.Companies')->name('Companies');
Route::view('Companiesdetails','layouts.company-details')->name('Companiesdetails');
Route::view('post-job','layouts.postJob')->name('postJob');
Route::view('job-listening','layouts.jobListening')->name('jobListening');
Route::view('post-resume-form','layouts.post-resume-form')->name('post-resume-form');
Route::view('about-us','layouts.about-us')->name('about-us');
Route::view('contact-us','layouts.contact-us')->name('contact-us');


Route::get('/showpost', 'Test@showpost')->name('showpost');

Auth::routes();


//employee
//Route::view('employee-dashboard','employee.resume')->name('employee');
Route::get('/employee-dashboard', 'Employee@showResume')->name('employee');

Route::post('/employee-Info-edit', 'Employee@showInforForEdit')->name('employee.showInfo');

Route::get('/Resume', 'Employee@showResume')->name('resume');
Route::get('/JobMaintain', 'Employee@showJobApplied')->name('jobapplied');
Route::get('/ChangePassword', 'Employee@showChangepassword')->name('changepassword');


//login
Route::view('/Login', 'layouts.login')->name('loginshow');


//Route::get('/home', 'HomeController@index')->name('home');
