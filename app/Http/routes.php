<?php
use App\Produk;
use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Front End Controller
Route::resource('/','frontEndController');

// Produk FrontEnd Route
Route::get('productFront','frontEndController@Produkpage');

// Produk FrontEnd Route
Route::get('productFront/{id}','frontEndController@ProdukDetail');
// Produk FrontEnd Filter
Route::get('productFront/tipe/{id}',function($id=0){

	$produk=App\Type::find($id)->produk()->where('type_id','=',$id)->get();
	 $tipe=App\Type::all();
	return view('FrontEnd.product',compact('produk','tipe'));
});
// News FrontEnd Route
Route::get('news','frontEndController@newsPage');
// Gallery FrontEnd Route
Route::get('gallery','frontEndController@galleryPage');

// News Detail FrontEnd Route
Route::get('news/{id}','frontEndController@newsDetail');

// Contact Us Route
Route::get('contactUs','frontEndController@contactUs');
//Send Message from Contact Us Page
Route::post('sendMessage','frontEndController@sendMessage');
// About us Route
Route::get('aboutus','frontEndController@aboutUs');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Admin Route
Route::resource('admin','adminController');

// Read Mail Route
Route::get('mail/{id}','adminController@readMail');

// Send Mail Form Route
Route::get('sendEmail/{id}','adminController@sendEmail');

// Save Admin Reply
Route::post('saveEmail','adminController@saveEmail');

// User Control Route
Route::resource('usercontrol','userControl');

//validate user Route
Route::post('validateuser/{id}','userControl@validateUser');

//Upload Image Route
Route::post('uploadavatar','adminController@UpImage');

//Slider Route
Route::resource('slider','slideController');

//Show Form Route
Route::get('showFormSlide','slideController@showForm');

// Banner Route
Route::resource('banner','bannerController');

//Show Form Banner Route
Route::get('showFormBanner','bannerController@showForm');

//Product Route
Route::resource('product','produkController');
// Add new Type for car
Route::post('addType','produkController@addType');
//News Route
Route::resource('newsAdmin','newsController');

//Gallery Route
Route::resource('galleryAdmin','galleryController');

// About Us Route
Route::resource('aboutUsAdmin','aboutController');

//Update Deskripsi About Us
Route::post('aboutUsDeskripsi/{id}','aboutController@updateDescription');

Route::get('foo',function(){
	User::find(1)->assignRoles(1);
});