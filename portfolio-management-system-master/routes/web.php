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

//Route::view('/', 'home')->name('index');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

// MY CODE 
Route::view('/', 'index');
Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/about', 'ViewController@aboutview')->name('about');
Route::get('/skills', 'ViewController@skillview')->name('skills');
Route::get('/projects', 'ViewController@projectview')->name('projects');
Route::get('/experience', 'ViewController@experienceview')->name('experience');
Route::get('/blog', 'ViewController@blogview')->name('blog');
Route::get('/services', 'ViewController@serviceview')->name('services');
Route::get('/contact', 'ViewController@contactview')->name('contact');
Route::post('logout', 'Auth\LoginController@logout');
//Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('admin.login');

Route::get('/admin/about', 'HomeController@aboutview')->name('admin.about');
Route::post('/admin/about', 'HomeController@updateabout')->name('admin.about');

Route::get('/admin/skills', 'HomeController@skillview')->name('admin.skills');
Route::post('/admin/skills', 'HomeController@updateskill')->name('admin.skills');

Route::get('/admin/project', 'HomeController@projectview')->name('admin.project');
Route::post('/admin/project', 'HomeController@updateproject')->name('admin.project');

Route::get('/admin/experience', 'HomeController@experienceview')->name('admin.experience');
Route::post('/admin/experience', 'HomeController@updatexperience')->name('admin.experience');

Route::get('/admin/services', 'HomeController@serviceview')->name('admin.services');
Route::post('/admin/services', 'HomeController@updateservices')->name('admin.services');

Route::get('/admin/blog', 'HomeController@blogview')->name('admin.blog');
Route::post('/admin/blog', 'HomeController@updateblog')->name('admin.blog');

Route::get('/admin/contact', 'HomeController@contactview')->name('admin.contact');
Route::post('/admin/contact', 'HomeController@updatecontact')->name('admin.contact');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
