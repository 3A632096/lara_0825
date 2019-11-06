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

//    \App\Post::create([
//        'title'=>'test title',
//        'content'=>'test content',
//    ]);

//    $post=new\App\Post();
//    $post->title='testtitle';
//    $post->content='testcontent';
//    $post->save();

//查詢資料
//    $posts=\App\Post::all();
//    dd($posts);

    $post=\App\Post::find(1);
    dd($post);

    return view('welcome');
});
//Route::get('index', function () {
//    return view('index');
//});
//Route::get('post', function () {
//    return view('post');
//});
//Route::get('contact', function () {
//    return view('contact');
//});
//Route::get('about', function () {
//    return view('about');
//});
Route::get('posts', ['as' => 'posts.index', 'uses' =>
    'PostsController@index']);
Route::get('post', ['as' => 'posts.show', 'uses' => 'PostsController@show']);
Route::get('about', ['as' => 'posts.about', 'uses' =>
    'PostsController@about']);
Route::get('contact', ['as' => 'posts.contact', 'uses' =>
    'PostsController@contact']);
