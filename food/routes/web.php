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
    return view('home.home');
});
Route::get('/index','HomeController@getSanPhamIndex')->name('index');

Route::post('/timkiem','HomeController@timKiem')->name('timkiem');


Route::get('/loai-mon-an/{type}/{slug}','HomeController@getSanPhamTheoLoai')->name('getloai');
Route::get('/danh-muc/{dm}/{slug}','HomeController@getSanPhamTheoDM')->name('getdm');

Route::get('/shop', 'HomeController@getSanPhamShop')->name('shop');

Route::get('/chi-tiet/{id}/{slug}', 'HomeController@getChiTiet')->name('detail');

Route::get('/mua-hang/{id}/{tensanpham}', 'HomeController@getCart')->name('getCart');

Route::get('/dat-hang/{id}/{tensanpham}', 'HomeController@getCartForm')->name('getCartForm');

Route::get('/remove-cart/{id}/{tensanpham}', 'HomeController@removeCart')->name('removeCart');
Route::get('/update-Qty/{id}/{qty}', 'HomeController@updateQty')->name('updateQty');

Route::get('/cart', 'HomeController@Cart')->name('cart');
Route::get('/checkout', 'HomeController@getCheckout')->name('checkout');
Route::post('/checkout', 'HomeController@postCheckout');

Route::group(['prefix'=>'login','middleware'=>'CheckLogIn'],function (){
	Route::get('/', 'AdminController@getLogin');
	Route::post('/', 'AdminController@postLogin');
});
Route::group(['prefix'=>'register'],function (){
	Route::get('/', 'AdminController@getRegis')->name('regis');
	Route::post('/', 'AdminController@postRegis');
});

Route::get('/logout', 'HomeController@getlogout')->name('getlogout');

Route::group(['prefix'=>'admin','middleware'=>'CheckLogOut'],function (){
	Route::get('/index', 'HomeController@getIndexAdmin')->name('login');

	Route::group(['prefix'=>'danhmuc'],function (){
		Route::get('/', 'AdminController@getDanhMuc');
		Route::post('/', 'AdminController@postDanhMuc');

		Route::get('/edit/{id}', 'AdminController@getEditDanhMuc');
		Route::post('/edit/{id}', 'AdminController@postEditDanhMuc');

		Route::get('/delete/{id}', 'AdminController@getDeleteDanhMuc');
	});

	Route::group(['prefix'=>'loaimonan'],function (){
		Route::get('/', 'AdminController@getLoaiMonAn');

		Route::get('/add', 'AdminController@getAddLoaiMonAn');
		Route::post('/add', 'AdminController@postAddLoaiMonAn');

		Route::get('/edit/{id}', 'AdminController@getEditLoaiMonAn');
		Route::post('/edit/{id}', 'AdminController@postEditLoaiMonAn');

		Route::get('/delete/{id}', 'AdminController@getDeleteLoaiMonAn');
	});

	Route::group(['prefix'=>'monan'],function (){
		Route::get('/', 'AdminController@getMonAn');

		Route::get('/add', 'AdminController@getAddMonAn');
		Route::post('/add', 'AdminController@postAddMonAn');

		Route::get('/edit/{id}', 'AdminController@getEditMonAn');
		Route::post('/edit/{id}', 'AdminController@postEditMonAn');

		Route::get('/delete/{id}', 'AdminController@getDeleteMonAn');
	});

	Route::group(['prefix'=>'donhang'],function (){
		Route::get('/', 'AdminController@getDonHang');

		Route::get('/delete/{id}', 'AdminController@getDeleteDonHang');
	});
	Route::group(['prefix'=>'thongke'],function (){
		Route::get('/', 'AdminController@getThongKe');
	});
});




//route page
Route::get('/account', function () {return view('pages.account');})->name('account');
//Route::get('/checkout', function () {return view('pages.checkout');})->name('checkout');
Route::get('/wishlist', function () {return view('pages.wishlist');})->name('wishlist');
//Route::get('/compare', function () {return view('pages.compare');})->name('compare');
Route::get('/faqs', function () {return view('pages.faqs');})->name('faqs');
Route::get('/404', function () {return view('pages.404');})->name('404');