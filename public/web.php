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
use App\User;
Route::get('/', function () {
	return view('layouts.index');
});

Route::group(['prefix'=>'admin'],function(){
	
	Route::get('login', 'AuthController@index')->name('admin.login');
	Route::post('post-login', 'AuthController@postLogin'); 
	Route::get('registration', 'AuthController@registration');
	Route::post('post-registration', 'AuthController@postRegistration'); 
	Route::get('logout', 'AuthController@logout');
	Route::get('dashboard', 'AuthController@dashboard');



	Route::group(['prefix'=>'user'],function(){
		Route::get('list','UserController@getlist')->name('admin.user.list');

		Route::get('getinfor&{id}','UserController@getInfor')->name('admin.user.getinfor');

		Route::get('edit&{id}','UserController@getedit')->name('admin.user.edit');
		Route::post('edit&{id}','UserController@postedit');

		Route::get('add','UserController@getadd')->name('admin.user.add');
		Route::post('add','UserController@postadd');

		Route::get('delete&{id}','UserController@delete');

		Route::get('profile&{id}', 'UserController@profile')->name('admin.user.profile');
	});
	Route::group(['prefix'=>'category'],function(){
		Route::get('list','CategoryController@getList')->name('admin.category.list');

		Route::get('edit&{id}','CategoryController@getedit')->name('admin.category.edit');
		Route::post('edit&{id}','CategoryController@postedit');

		Route::get('add','CategoryController@getadd')->name('admin.category.add');
		Route::post('add','CategoryController@postadd');

		Route::get('delete&{id}','CategoryController@getdelete');
	});
	Route::group(['prefix'=>'product'],function(){
		Route::get('list','ProductController@getList')->name('admin.product.list');

		Route::get('edit&{id}','ProductController@getedit')->name('admin.product.edit');
		Route::post('edit&{id}','ProductController@postedit');

		Route::get('add','ProductController@getadd')->name('admin.product.add');
		Route::post('add','ProductController@postadd');

		Route::get('delete&{id}','ProductController@getdelete');
	});
	Route::group(['prefix'=>'customer'],function(){
		Route::get('list','CustomerController@getList')->name('admin.customer.list');

		Route::get('getinfor&{id}','CustomerController@getInfor')->name('admin.customer.getinfor');

		Route::get('edit&{id}','CustomerController@getedit')->name('admin.customer.edit');
		Route::post('edit&{id}','CustomerController@postedit');

		Route::get('add','CustomerController@getadd')->name('admin.customer.add');
		Route::post('add','CustomerController@postadd');

		Route::get('delete&{id}','CustomerController@getdelete');

		Route::get('export', 'CustomerController@export')->name('admin.customer.export');
	});
	// Route::group(['prefix'=>'color'],function(){
	// 	Route::get('list','ColorController@getList')->name('admin.color.list');

	// 	Route::get('edit&{id}','ColorController@getedit')->name('admin.color.edit');
	// 	Route::post('edit&{id}','ColorController@postedit');

	// 	Route::get('add','ColorController@getadd')->name('admin.color.add');
	// 	Route::post('add','ColorController@postadd');

	// 	Route::get('delete&{id}','ColorController@getdelete');
	// });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
