<?php
use Auth;
use User;

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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('/{id}', function ($id) {
   		 $user = \DB::table('users')->where('username' ,$id)->get();
		return $user;
		/*$data = ['mensaje' => 'probando perfil'];

		return view('contact',$data);*/
});
Route::resource('articles','ArticlesController');
Route::resource('movies','MoviesController');
Route::resource('reviews','ReviewsController');
Route::resource('likes','LikesController');
Route::resource('ratings','RatingsController');
Route::resource('posts','PostsController');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
