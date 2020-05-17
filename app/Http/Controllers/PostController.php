<?php

namespace App\Http\Controllers;

use DB;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
	public function show($slug){
		// return $post;

		// $post = DB::table('post')->where('slug', $slug)->first();
		$post = Post::where('slug', $slug)->firstOrFail();

		// dd($post);

		// $posts = [
		// 	'my-first-post' => 'Hello, this is my first blog post',
		// 	'my-second-post' => 'Now I am getting the hang of this blogging thing',
		// ];

		// if(!array_key_exists($post, $posts)){
		// 	abort(404, 'Sorry that post was not found');
		// }

		if(! $post) abort(404);

	  return view('test-post',[
	  	'post' => $post,
	  ]);

	  // return view('test-post');
	}
}
