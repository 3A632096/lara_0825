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

//    $post=\App\Post::find(1);
//    dd($post);

//    $posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
//    dd($posts);

//更新資料
//    $post=\App\Post::find(1);
//    $post->update([
//        'title'=>'updated title',
//        'content'=>'updated content',
//    ]);

//    $post=\App\Post::find(1);
//    $post->title='saved title';
//    $post->content='saved content';
//    $post->save();

//刪除資料
//    $post=\App\Post::find(1);
//    $post->delete();

//    \App\Post::destroy(2);

//    \App\Post::destroy(3,5,7);

//練習 6：了解 Model 和 Collection 的差異
//    $allPosts=\App\Post::all();
//    dd($allPosts);
//    $featuredPosts=\App\Post::where('is_feature',1)->get();
//    dd($featuredPosts);

//取得 Model
//    $fourthPost=\App\Post::find(4);
//    dd($fourthPost);
    $lastPost=\App\Post::orderBy('id','DESC')->first();
    dd($lastPost);



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
