<?php

use Illuminate\Support\Facades\Route;
Route::get('/logout', "Auth\LoginController@logout")->name("logout");
// Connnexion RB
Auth::routes();

// Connnexion RB
Route::get('/home', 'HomeController@index')->name('home');

// Page d'accueil YM
Route::get('/', function () {
     return view('index');
 });

// Page d'accueil YM
Route::get('/index', function () {
    return view('index');
});

// Page generic YM
Route::get('/generic', function () {
    return view('generic');
});

// Page element YM
Route::get('/elements', function () {
    return view('elements');
});

// Test GET YM
Route::get('/test-get',  function () {

	$name = request('name'); // $_GET
	// return $name;

  // return view('test');
  return view('test-get',[
  	'name' => $name,
  ]);

});

// Test POST YM
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

// Test POST YM
Route::get('/test-post/{post}','PostController@show');