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

use App\Task;
use Illuminate\Http\Request;

/**
 * Show Task Dashboard
 */
Route::get('/', ["middleware"=>"auth",function (\Psr\Log\LoggerInterface $log) {
	$log->alert(Auth::user()->name . " logined.");
    return view('tasks', [
    	'tasks' => Task::orderBy('created_at', 'asc')->get()
    ]);
}]);


/**
 * Add New Task
 */
Route::post('/task',["middleware"=>"auth", function (Request $request) {
	$validator = Validator::make($request->all(), [
		'name' => 'required|max:255',
	]);

	if ($validator->fails()) {
		return redirect('/')
			->withInput()
			->withErrors($validator);
	}

	$task = new Task;
	$task->name = $request->name;
	$task->save();

	return redirect('/');
}]);


/**
 * Delete Task
 */
Route::delete('/task/{id}', ["middleware"=>"auth",function ($id) {
	Task::findOrFail($id)->delete();

	return redirect('/');
}]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
