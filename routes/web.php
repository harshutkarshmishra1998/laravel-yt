<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;

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

// Route::get('/', function () {
//     return view('pages.welcome');
// });
// OR
Route::view('/', 'pages.welcome');

// Route::get('/users/{name}', function ($name) {
//     return view('pages.users', ["name" => $name]);
// });
// OR
// Route::get('/users/{name}', [UsersController::class, 'name']);

// Route::get('/admin/{id}/{name}', function ($id, $name) {
//     return "My name is " . $name . " and my id is " . $id;
// });

// Route::get('/admin/posts/example', array('as' => 'admin.home', function () {
//     $url = route('admin.home');
//     return "This URL is " . $url;
// }));

// Route::get('/posts/{id}', [PostsController::class, 'index']);

// Route::get('/posts/{id}', [PostsController::class, 'show']);
// Route::get('/posts', [PostsController::class, 'create']);
// OR
// Route::resource('/posts', PostsController::class); //only show and create method. For create method remove /11 and add /create

// Route::get('/contact', [PostsController::class, 'contact']);

// Route::get('/posts/{id}', [PostsController::class, 'showPosts']);

// Route::get('/about/{name}', function ($name) {
//     return view('pages.about', compact('name'));
// });

Route::get('/users', [UsersController::class, 'loadView']);
