<?php

/**
 * 	Job seeker authentication
 */
Auth::routes();
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@verifyEmail')->name('verifyEmail');

/**
 * 	Employer authentication
 */
Route::group(['prefix' => 'employer'], function () {
  Route::get('/login', 'EmployerAuth\LoginController@showLoginForm')->name('employer.login');
  Route::post('/login', 'EmployerAuth\LoginController@login');
  Route::post('/logout', 'EmployerAuth\LoginController@logout');

  Route::get('/register', 'EmployerAuth\RegisterController@showRegistrationForm')->name('employer.register');
  Route::post('/register', 'EmployerAuth\RegisterController@register');

  Route::post('/password/email', 'EmployerAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'EmployerAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'EmployerAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'EmployerAuth\ResetPasswordController@showResetForm');

  Route::get('verify/{email}/{verifyToken}', 'EmployerAuth\RegisterController@verifyEmployer')->name('verifyEmployer');

  Route::get('/profile','EmployerController@profile');
  Route::post('/profile','EmployerController@profileUpdate');  
  Route::post('/logo','EmployerController@logoUpdate');
  Route::get('/job', 'EmployerController@jobForm');
  Route::post('/job', 'EmployerController@jobPost');  

});


/**
 * 	Admin authentication
 */
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


/**
 * 	Pages Controller
 */
Route::get('/', 'PagesController@index');
Route::get('signup', 'PagesController@signup')->name('signup');
Route::post('theme', 'PagesController@themeUpdate');
Route::get('job/{category}/{id}', 'PagesController@show');
Route::get('job/{category}', 'PagesController@showCategoryJob');
Route::post('jobs/{job}/apply', 'ApplyController@store');


/**
 * 	Seeker Controller
 */
Route::group(['prefix' => 'seeker'], function () {

  Route::get('dashboard', 'SeekerController@index')->name('dashboard');
  Route::get('edit','SeekerController@editResume')->name('seekeredit');
  Route::get('personal','SeekerController@personalShow');
  Route::post('personal','SeekerController@personalUpdate');
  Route::get('career','SeekerController@careerShow');
  Route::post('career','SeekerController@careerUpdate');
  Route::get('preferred','SeekerController@preferredShow');
  Route::post('preferred','SeekerController@preferredUpdate');
  Route::post('avatar','SeekerController@avatarUpload');
  Route::get('academic','SeekerController@academicShow');
  Route::post('academic','SeekerController@academicCreate');
  Route::get('training','SeekerController@trainingShow');
  Route::post('training','SeekerController@trainingCreate');
  Route::get('professional','SeekerController@professionalShow');
  Route::post('professional','SeekerController@professionalCreate');
  Route::get('employment','SeekerController@employmentShow');
  Route::post('employment','SeekerController@employmentCreate');
  Route::get('language','SeekerController@languageShow');
  Route::post('language','SeekerController@languageCreate');
  Route::get('reference','SeekerController@referenceShow');
  Route::post('reference','SeekerController@referenceCreate');
  Route::get('resume','SeekerController@viewResume')->name('viewResume');
  Route::get('pdf','SeekerController@pdfGenerator')->name('pdf');

});

