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
	return view('index_test');
});

Route::get('/newApplication', ['as' => 'newApplication', 'uses' => function(){
	return view('newApplication');
}]);

Route::post('/storeApplication1', ['as' => 'storeApplication1', 'uses' => function(Illuminate\Http\Request $req){

	$name = $req['name'];
	$nic = $req['nic'];

	DB::insert('insert into past_pupils (nic, name_with_initials) values (?, ?)', [$nic, $name]);

}]);

Route::get('add_pastpupil', ['as' => 'newPastPupil', 'uses' => function () {
	return view('pastpupil.pastpupil_add');
}]);

Route::get('add_pastpupil_record', ['as' => 'newPastPupilRecord', 'uses' => function () {
	return view('pastpupil.pastpupil_record_add');
}]);

Route::get('add_school', ['as' => 'newSchool', 'uses' => function () {
	return view('school.school_add');
}]);