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
//Route::view('job-listening','layouts.jobListening')->name('jobListening');
Route::view('post-resume-form','layouts.post-resume-form')->name('post-resume-form');
Route::view('about-us','layouts.about-us')->name('about-us');
Route::view('contact-us','layouts.contact-us')->name('contact-us');


Route::get('/showpost', 'Test@showpost')->name('showpost');

Auth::routes();


//employee
//Route::view('employee-dashboard','employee.resume')->name('employee');
Route::get('/employee-dashboard', 'Employee@showResume')->name('employee');
Route::post('/employee-Info-edit', 'Employee@showInforForEdit')->name('employee.showInfo');
Route::post('/employee-Info-update/{candidate}', 'Employee@CandidateInfoUpdate')->name('employee.updateCandidateInfo');

Route::post('/employee-getAllCity}', 'Employee@getAllCityByState')->name('employee.getAllAddressCity');

Route::post('/employee-AboutMe-Edit}', 'Employee@showCandidateAboutMeForEdit')->name('employee.editCandidateAboutMe');
Route::post('/employee-AboutMe-update/{candidate}', 'Employee@CandidateAboutMeUpdate')->name('employee.updateCandidateAboutMe');


Route::post('/employee-WorkExperience', 'Employee@CandidateAddWorkExperience')->name('employee.addCandidateWorkExperience');
Route::post('/employee-Add-WorkExperience/{candidate}', 'Employee@insertCandidateWorkExperience')->name('employee.insertCandidateWorkExperience');
Route::post('/employee-delete-WorkExperience', 'Employee@deleteCandidateWorkExperience')->name('employee.deleteWorkExperience');


Route::post('/employee-Edit-WorkExperience', 'Employee@editCandidateWorkExperience')->name('employee.editCandidateWorkExperience');
Route::post('/employee-WorkExperience-update/{experienceId}', 'Employee@CandidateWorkExperienceUpdate')->name('employee.updateCandidateWorkExperience');

Route::post('/employee-deleteSocialMedia', 'Employee@deleteSocialMedia')->name('employee.deleteSocialMedia');


Route::post('/employee-Education', 'Employee@addEducation')->name('employee.addEducation');
Route::post('/employee-Add-Education/{candidate}', 'Employee@insertCandidateEducation')->name('employee.insertEducation');
Route::post('/employee-delete-Education', 'Employee@deleteCandidateEducation')->name('employee.deleteEducation');
Route::post('/employee-Edit-Education', 'Employee@editCandidateEducation')->name('employee.editCandidateEducation');
Route::post('/employee-Education-update/{educationId}', 'Employee@CandidateEducationUpdate')->name('employee.updateCandidateEducation');


Route::post('/employee-Skill', 'Employee@addSkill')->name('employee.addCandidateSkill');
Route::post('/employee-Add-Skill/{candidate}', 'Employee@insertCandidateSkill')->name('employee.insertSkill');
Route::post('/employee-Edit-Skill', 'Employee@editCandidateSkill')->name('employee.editSkill');
Route::post('/employee-delete-Skill', 'Employee@deleteCandidateSkill')->name('employee.deleteSkill');
Route::post('/employee-Skill-update/{skillId}', 'Employee@CandidateSkillUpdate')->name('employee.updateSkill');


Route::post('/employee-FreeTime', 'Employee@addFreeTime')->name('employee.addCandidateFreeTime');
Route::post('/employee-Edit-FreeTime', 'Employee@editCandidateFreeTime')->name('employee.editFreeTime');
Route::post('/employee-FreeTime-update/{FreeTimeId}', 'Employee@CandidateFreeTimeUpdate')->name('employee.updateFreeTime');
Route::post('/employee-delete-FreeTime', 'Employee@deleteCandidateFreeTime')->name('employee.deleteFreeTime');
Route::post('/employee-Add-FreeTime/{candidate}', 'Employee@insertCandidateFreeTime')->name('employee.insertFreeTime');




Route::get('/Resume', 'Employee@showResume')->name('resume');
Route::get('/JobMaintain', 'Employee@showJobApplied')->name('jobapplied');
Route::get('/ChangePassword', 'Employee@showChangepassword')->name('changepassword');


//login
Route::view('/Login', 'layouts.login')->name('loginshow');


//register
Route::view('/Sign-up', 'layouts.signup')->name('sigupShow');
Route::post('/Create-Account', 'Auth\RegisterController@AccountCreation')->name('register');
Route::post('/Account-Active', 'Auth\RegisterController@AccountActive')->name('account.active');


//Route::get('/home', 'HomeController@index')->name('home');

//job
Route::get('/job-listening', 'JobController@index')->name('jobListening');