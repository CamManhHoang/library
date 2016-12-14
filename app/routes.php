<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Unauthenticated group 
Route::group(array('before' => 'guest'), function() {
 
	// CSRF protection 
	Route::group(array('before' => 'csrf'), function() {

		// Create an account (POST) 
		Route::post('/create', array(
			'as' => 'account-create-post',
			'uses' => 'AccountController@postCreate'
		));

		// Sign in (POST) 
		Route::post('/sign-in', array(
			'as' => 'account-sign-in-post',
			'uses' => 'AccountController@postSignIn'
		));

		// Sign in (POST) 
		Route::post('/student-registration', array(
			'as' => 'student-registration-post',
			'uses' => 'StudentController@postRegistration'
		));		

	});

	// Sign in (GET) 
	Route::get('/sign-in', array(
		'as' 	=> 'account-sign-in',
		'uses'	=> 'AccountController@getSignIn'
	));

	// Create an account (GET) 
	Route::get('/create', array(
		'as' 	=> 'account-create',
		'uses' 	=> 'AccountController@getCreate'
	));

	// Student Registeration form 
	Route::get('/student-registration', array(
		'as' 	=> 'student-registration',
		'uses' 	=> 'StudentController@getRegistration'
	));
    
    // Render search books panel
    Route::get('/book', array(
        'as' => 'search-book',
        'uses' => 'BooksController@searchBook'
    ));    
	
});

// Main books Controlller left public so that it could be used without logging in too
Route::resource('/books', 'BooksController');

// Authenticated group 
Route::group(array('before' => ['auth', 'admin']), function() {

	// Render Add Books panel
    Route::get('/add-books', array(
        'as' => 'add-books',
        'uses' => 'BooksController@renderAddBooks'
    ));

    Route::get('/add-category', array(
        'as' => 'add-category',
        'uses' => 'BooksController@addCategory'
    ));

    Route::post('/add-category', array(
        'as' => 'post-add-category',
        'uses' => 'BooksController@postAddCategory'
    ));

	// Students
    Route::get('/registered-students', array(
        'as' => 'registered-students',
        'uses' => 'StudentController@renderStudents'
    ));

    // Render students approval panel
    Route::get('/students-for-approval', array(
        'as' => 'students-for-approval',
        'uses' => 'StudentController@renderApprovalStudents'
    ));

    // Issue Logs
    Route::get('/issue-return', array(
        'as' => 'issue-return',
        'uses' => 'LogController@renderIssueReturn'
    ));

    // Render logs panel
    Route::get('/currently-issued', array(
        'as' => 'currently-issued',
        'uses' => 'LogController@renderLogs'
    ));

    // Main Logs Controlller resource
    Route::resource('/issue-log', 'LogController');

    Route::get('/book-orders-list', array(
        'as' => 'book-orders-list',
        'uses' => 'BooksController@ordersList'
    ));
   
});

Route::group(array('before' => 'auth'), function() {

	// Home Page of Control Panel
	Route::get('/',array(
		'as' 	=> 'home',
		'uses'	=> 'HomeController@home'
	));

	// Render All Books panel
    Route::get('/all-books', array(
        'as' => 'all-books',
        'uses' => 'BooksController@renderAllBooks'
    ));

    Route::get('/all-books/{book}/issues', array(
        'as' => 'book.issues',
        'uses' => 'BooksController@showIssues'
    ));

    // Main students Controlller resource
    Route::resource('/student', 'StudentController');

    // Sign out (GET) 
    Route::get('/sign-out', array(
    	'as' => 'account-sign-out',
		'uses' => 'AccountController@getSignOut'
    ));

	// Users Profile
    Route::get('/{username}/profile', [
    	'before' => 'student',
    	'as' => 'profile', 
    	'uses' => 'ProfilesController@show'
	]);

	Route::get('/{username}/profile/edit', [
    	'before' => ['student', 'profile'],
    	'as' => 'profile.edit', 
    	'uses' => 'ProfilesController@edit'
	]);

	Route::put('/{username}/profile', [
		'before' => ['student', 'profile'],
    	'as' => 'profile.update', 
    	'uses' => 'ProfilesController@update'
	]);

	Route::get('/change-password', [
    	'as' => 'profile.password', 
    	'uses' => 'ProfilesController@changePassword'
	]);

	Route::post('/change-password', [
    	'as' => 'post-change-password', 
    	'uses' => 'ProfilesController@postChangePassword'
	]);

    Route::post('/orders/{book}', [
        'before' => 'student',
        'as' => 'order-book', 
        'uses' => 'BooksController@orderBook'
    ]);

});
