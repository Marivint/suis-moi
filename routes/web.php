<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/index', function () {
    return view('index');
});


Route::get('/generic', function () {
    return view('generic');
});

Route::get('/elements', function () {
    return view('elements');
});


Route::get('/test-get',  function () {

	$name = request('name'); // $_GET
	// return $name;

  // return view('test');
  return view('test-get',[
  	'name' => $name,
  ]);

});


// Route::get('/test-post/{post}',  function ($post) {

// 	// return $post;

// 	$posts = [
// 		'my-first-post' => 'Hello, this is my first blog post',
// 		'my-second-post' => 'Now I am getting the hang of this blogging thing',
// 	];

// 	if(!array_key_exists($post, $posts)){
// 		abort(404, 'Sorry that post was not found');
// 	}

//   return view('test-post',[
//   	'post' => $posts[$post],
//   ]);

//   return view('test-post');
// });

Route::get('/test-post/{post}','PostController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


