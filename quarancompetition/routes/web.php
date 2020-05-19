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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','IndexController@index')->name('index');
Route::get('/signin','IndexController@signin')->name('signin');
Route::get('/signup','IndexController@signup')->name('signup');
Route::post('/signup/user','IndexController@registered');
Route::get('/admin/logout','Auth\LoginController@logout');
Route::get('/admin',function(){
	return view('auth.login');
});
Route::get('/faq','ManageFaqController@index');


Route::group(['middleware'=>['auth','admin']],function(){
	
	Route::get('dashbord/','DashBordcontroller@index')->name('dashbord');
    Route::get('user/','admin\UserController@index')->name('user');
    Route::get('user/status/{id?}/{status}','admin\UserController@userstatus');
    Route::get('user/contact/{id?}','admin\UserController@contactDetails');
    Route::get('admin/faq/add/{id?}','admin\ManageFaqController@index');
    Route::get('admin/faq/','admin\ManageFaqController@faq');
    Route::get('admin/faq/delete/{id}','admin\ManageFaqController@delete');

    Route::get('admin/faq/status/{id}/{status}','admin\ManageFaqController@changeStatus');


    Route::post('admin/faq/save','admin\ManageFaqController@save');

    // Question functionalities

     Route::get('admin/question','admin\MangeQuestionController@index');
     Route::get('admin/question/add/{id?}','admin\MangeQuestionController@add');
     Route::post('admin/question/save','admin\MangeQuestionController@save');
     Route::get('admin/question/assign','admin\MangeQuestionController@assign');

     Route::get('admin/question/delete/{id}','admin\MangeQuestionController@delete');


      Route::post('admin/question/assign/save','admin\MangeQuestionController@assigingto');


});


Route::group(['middleware'=>['auth','user']],function(){
	Route::get('dashbord/user','DashBordcontroller@index');
	Route::get('member/add','member\ManageMemberController@member');
	Route::post('member/save','member\ManageMemberController@store');
	


});

Route::group(['middleware'=>['auth','member']],function(){
	Route::get('dashbord/member','DashBordcontroller@index');

    Route::get('myquestion/{index?}','member\MyquestionController@index');
    Route::get('countquestion/{id?}','member\MyquestionController@countQuestion');

});
