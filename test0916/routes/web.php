<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Profile;
use App\Models\User;

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
    return profile::find(1)->user;
    
    // $user = User::find(1);
    // // dd($user->profile);
    // return ($user->profile);

    // // insert data to table
    // $profile = new Profile;
    // $profile->address="hsinchu";
    // $profile->user_id=3;
    // $profile->save();
    // $user->profile()->save($profile);

    // // return view('welcome');
});

// Auth::routes();

Route::get('/about-us','App\Http\Controllers\TestController@index')->name('about');

Route::get('/has_many','App\Http\Controllers\RelationController@index');
// Route::post('/has-many','App\Http\Controllers\RelationController@index');


Route::group(['prefix'=>'account'],function(){
    Route::get('register','App\Http\Controllers\TestController@register');
    Route::get('login','App\Http\Controllers\TestController@login');
});

Route::get('/product','App\Http\Controllers\TestController@product')->name('product.index');

Route::get('/test/create','App\Http\Controllers\TestController@create');
// Route::post('/test/store','App\Http\Controllers\TestController@store')->name('test.store');


//posts

Route::get('/posts/store','App\Http\Controllers\PostController@store');
Route::get('/posts','App\Http\Controllers\PostController@index');
Route::get('/post/{id}','App\Http\Controllers\PostController@show');

Route::get('/post/update/{id}','App\Http\Controllers\PostController@update');

Route::get('/post/delete/{id}','App\Http\Controllers\PostController@destory');

Route::get('/show','App\Http\Controllers\PostController@getPost');