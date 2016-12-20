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

Route::get('/', function () {
	return view('login');
});

Route::get('allApplications', 'ApplicationController@viewAllApp')->name('viewAllApp');

//Admin Routes

Route::get('/viewPxApplication/{application_id}',['as'=>'viewPxApplication', 'uses'=>'ApplicationController@viewPxApplication']);

Route::get('add_pastpupil', ['as' => 'newPastPupil', 'uses' => function () {
	return view('pastpupil.pastpupil_add');
}]);

Route::get('add_school', ['as' => 'newSchool', 'uses' => function () {
	return view('school.school_add');
}]);

Route::post('school_added', 'SchoolController@addNew')->name('schooldAdd');

Route::get('add_pastpupil_record', ['as' => 'newPastPupilRecord', 'uses' => function () {
	return view('pastpupil.pastpupil_record_add');
}]);

Route::post('pastpupil_added', 'PastPupilController@addNew')->name('pastpupilAdd');

Route::post('pastpupil_record_added', 'PastPupilController@addNewRecord')->name('pastpupilRecordAdd');

Route::get('/addMarkingScheme',['as'=>'addMarkingScheme','uses'=>function(){
	return view('addMarkingScheme');
}]);

Route::post('/addPastPupilMarkingScheme',['as'=>'addPastPupilMarkingScheme', 'uses'=>'markingSchemeController@addPastPupilMarkingScheme']);

Route::post('/addProximityMarkingScheme',['as'=>'addProximityMarkingScheme', 'uses'=>'markingSchemeController@addProximityMarkingScheme']);


//Data Operator Routes

Route::get('/newApplication', ['as' => 'newApplication', 'uses' => function(){
	$schools = new App\School();
	$schools = $schools->getSchools();
	$year = date("Y")+1;
	return view('new_application.newApplication', compact('schools', 'year'));
}]);

Route::post('/newApplication2', ['as' => 'newApplication2', 'uses' => 'ApplicationController@addNewApplication']);

Route::post('/storePxApplication{application_id}', ['as' => 'storeApplication2', 'uses' => 'ApplicationController@addNewProximityApplication']);

Route::get('/viewPPApplication/{application_id}',['as'=>'viewPPApplication', 'uses'=>'ApplicationController@viewPastPupilApplication']);

Route::post('/storePPApplication/{application_id}', ['as' => 'storeApplication1', 'uses' => 'ApplicationController@addNewPastPupilApplication']);

Route::get('/applicationlist', ['as' => 'list', 'uses' =>'SchoolController@viewList']);

Route::get('/school/searchApps', 'SchoolController@searchSchoolApps')->name('searchSchoolApps');

Route::get('/applicationsHome', ['as' => 'applications', 'uses' => function () {
	return view('applications');
}]);
Route::post('/school/applicationlist/student', 'ApplicationController@viewApp')->name('studentApp');