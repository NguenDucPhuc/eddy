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

Route::get('/', 'HomeController@index')->name('home');
Route::get('getinfor&{id}','HomeController@getInfor')->name('getinfo');
Route::get('product','HomeController@product')->name('product');
Route::get('product-detail&{id}','HomeController@product_detail')->name('product_detail');
Route::get('shoping-cart', function () {
	return view('pages.shop.shoping-cart');
})->name('shoping-cart');
Route::group(['prefix' => 'cart'], function() {
    Route::get('add/{id}', 'CartController@add')->name('addCart');
    Route::post('update', 'CartController@update')->name('update');
    Route::get('delete/{id}', 'CartController@delete')->name('delete');
    Route::get('deleteAll', 'CartController@deleteAll')->name('deleteAll');
});
Route::post('checkout', 'HomeController@postcheckout')->name('checkout');
Route::post('xacnhan', 'CartController@xacnhan');

Route::get('about', function () {
	return view('pages.shop.about');
})->name('about');
Route::get('contact', function () {
	return view('pages.shop.contact');
})->name('contact');

Route::group(['prefix'=>'admin'],function(){
	Route::get('/','AuthController@index')->name('admin');
	
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

		Route::get('delete&{id}','UserController@getdetete')->name('admin.user.delete');

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
	Route::group(['prefix'=>'product_detail'],function(){
		Route::get('list','ProductDetailController@getList')->name('admin.product_detail.list');

		Route::get('edit&{id}','ProductDetailController@getedit')->name('admin.admin.product_detail.list.edit');
		Route::post('edit&{id}','ProductDetailController@postedit');

		Route::get('add','ProductDetailController@getadd')->name('admin.admin.product_detail.list.add');
		Route::post('add','ProductDetailController@postadd');

		Route::get('delete&{id}','ProductDetailController@getdelete');
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
	Route::group(['prefix'=>'slide'],function(){
		Route::get('list','SlideController@getList')->name('admin.slide.list');

		Route::get('edit&{id}','SlideController@getedit')->name('admin.slide.edit');
		Route::post('edit&{id}','SlideController@postedit');

		Route::get('add','SlideController@getadd')->name('admin.slide.add');
		Route::post('add','SlideController@postadd');

		Route::get('delete&{id}','SlideController@getdelete');
	});
	Route::group(['prefix'=>'order'],function(){
		Route::get('list','OrderController@getList')->name('admin.order.list');


		Route::get('edit&{id}','OrderController@getedit')->name('admin.customer.edit');
		Route::post('edit&{id}','OrderController@postedit');

		// Route::get('add','OrderController@getadd')->name('admin.order.add');
		// Route::post('add','OrderController@postadd');

		// Route::get('delete&{id}','OrderController@getdelete');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
