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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world', function () {
    $name = 'Scotty';
    $sirname = 'Phillips';
    $tasks = [
      'Go to store',
      'Finish laracasts',
      'Build API'
    ];
    $rejected_auths = DB::table('rejectedauths')->get();
    # return $rejected_auths;
    return view('hello', compact('name', 'sirname', 'tasks', 'rejected_auths'));


    #return view('hello', [
    #  'name' => 'Scott',
    #  'sirname' => 'Phillips'
    # ]);
});

Route::get('/switch/{switch}', function ($id) {
    $switch = DB::table('rejectedauths')->where('switch_id', $id)->get();
    return $switch;
});
