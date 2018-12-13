<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();    // login and register

Route::get('/home', 'HomeController@index');  // login and register

// just for testing user role relation
//Route::get('/user_role', function(){
//
//    $user = User::findOrFail(1);
//
//    return $user->role->name;
//});

//route to test admin layout

Route::get('/admin', function(){

    return view('admin.index');  // to call index.php under admin folder

});

Route::group(['middleware'=>'admin'], function(){

    Route::resource('/admin/users', 'AdminUsersController'); // (Admin/users) to know how to treat with it php artisan route:list

    Route::resource('/admin/posts', 'AdminPostsController');



});

