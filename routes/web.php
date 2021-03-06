<?php
// use DB;
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

use App\School;
use App\PastPupil;
use App\PastPupilRecord;

Route::get('/', ['as'=>'home', 'uses'=>'UserController@home']);

Route::get('home', ['as'=>'land', 'uses'=>'UserController@home']);

Route::get('login', ['as'=>'login', 'uses'=>function(){
	return view('auth.login');
}]);

Route::get('logout', ['as'=>'logout', 'uses'=>function(){
	Auth::logout();
	return redirect()->route('login');
}]);

Route::post('auth', ['as'=>'auth', 'uses'=>'UserController@login']);

Route::group(['middleware'=>"authX"], function(){
	

//Admin Routes
	Route::group(['middleware'=>"role_auth:1"], function(){

		Route::get('add_school', ['as' => 'newSchool', 'uses' => function () {
			$schools = School::getSchools();
			return view('school.school_add', compact('schools'));
		}]);


		Route::post('school_added', 'SchoolController@addNew')->name('schooldAdd');

		Route::get('add_pastpupil_record', ['as' => 'newPastPupilRecord', 'uses' => function () {
			return view('pastpupil.pastpupil_record_add');
		}]);

		Route::post('pastpupil_added', 'PastPupilController@addNew')->name('pastpupilAdd');

		Route::post('pastpupil_record_added', 'PastPupilController@addNewRecord')->name('pastpupilRecordAdd');

		

		Route::post('/addPastPupilMarkingScheme',['as'=>'addPastPupilMarkingScheme', 'uses'=>'markingSchemeController@addPastPupilMarkingScheme']);

		Route::post('/addProximityMarkingScheme',['as'=>'addProximityMarkingScheme', 'uses'=>'markingSchemeController@addProximityMarkingScheme']);
		

	});


	Route::get('/addMarkingScheme',['as'=>'addMarkingScheme','uses'=>'markingSchemeController@viewMarkingSchemeTab'
		]);
	Route::get('allApplications', 'ApplicationController@viewAllApp')->name('viewAllApp');


		// Data operator authorization
	Route::get('/viewPxApplication/{application_id}',['as'=>'viewPxApplication', 'uses'=>'ApplicationController@viewPxApplication']);

	Route::get('add_pastpupil', ['as' => 'newPastPupil', 'uses' => function () {
		$pastPupils = PastPupil::getPastPupils();
		return view('pastpupil.pastpupil_add', compact('pastPupils'));
	}]);

	Route::get('add_pastpupil_record', ['as' => 'newPastPupilRecord', 'uses' => function () {
		$ppRecs = PastPupilRecord::getAllPastPupilRecords();
		return view('pastpupil.pastpupil_record_add', compact('ppRecs'));
	}]);

	Route::post('pastpupil_added', 'PastPupilController@addNew')->name('pastpupilAdd');

	Route::post('pastpupil_record_added', 'PastPupilController@addNewRecord')->name('pastpupilRecordAdd');


	Route::get('/newApplication', ['as' => 'newApplication', 'uses' => function(){
		$schools = School::getSchools();
		$year = date("Y")+1;
		return view('new_application.newApplication', compact('schools', 'year'));
	}]);

	Route::post('/newApplication2', ['as' => 'newApplication2', 'uses' => 'ApplicationController@addNewApplication']);

	Route::post('/storePxApplication{application_id}', ['as' => 'storeApplication2', 'uses' => 'ApplicationController@addNewProximityApplication']);

	Route::get('/viewPPApplication/{application_id}',['as'=>'viewPPApplication', 'uses'=>'ApplicationController@viewPastPupilApplication']);

	Route::post('/storePPApplication/{application_id}', ['as' => 'storeApplication1', 'uses' => 'ApplicationController@addNewPastPupilApplication']);

	Route::get('/applicationlist', ['as' => 'list', 'uses' =>'SchoolController@viewList']);

	Route::get('/school/searchApps', 'SchoolController@searchSchoolApps')->name('searchSchoolApps');

	Route::get('/All/searchApps', 'ApplicationController@searchAllApps')->name('searchAllApps');

	Route::get('/applicationsHome', ['as' => 'applications', 'uses' => function () {
		$user_name = Illuminate\Support\Facades\Auth::user()->username;
		return view('applications')->with('user_name',$user_name);
	}]);
	Route::post('/school/applicationlist/student', 'ApplicationController@viewApp')->name('studentApp');

	
});

