<?php

use Illuminate\Support\Facades\Route;

Route::get('/','UserController@userHome');
Route::get('/description/{id}','UserController@productDescription');
Route::get('/product/{id}','UserController@product');
Route::get('/products','UserController@allproduct');
Route::post('/productshow','UserController@productshow');

Route::get('/contact','UserController@contact');
Route::post('user-contact','UserController@usercontact');
/* user login post*/
Route::get('/login','UserController@userLoginget');
Route::post('/userlogin','UserController@userLogin');
/*usercreate*/
Route::post('/usercreate','UserController@usercreate');

Route::get('/profile','UserController@userprofileget');


/*Route::get('/profile', function () {
    return view('userInterface.userprofile');
});*/

/*Route::get('cart','CartController@index')->name('cart.index');

Route::get('checkout','CheckoutController@index')->name('checkout.index');*/

/*------------------------------------------------------------------*/
/* Admin login get*/
Route::get('admin/login','AdminController@login');

/* Admin login post*/
Route::post('/adminlogin','AdminController@adminLogin');

/* Admin login post*/
Route::post('/userlogin','UserController@userLogin');

/*usercreate*/
Route::post('/usercreate','UserController@usercreate');

/*Admin start*/

Route::get('/dashboard', function () {
	return view('admin.index');
});
/*Product*/
Route::get('/admin/product','AdminController@product');

/*product insert*/
Route::post('/productinsert','AdminController@productinsert');
//Route::get('/productinsert','AdminController@productinsert');
/*Product update get*/
Route::get('/admin/productupdate/{id}','AdminController@productUpdateGet');
/*Product update post*/
Route::post('/productupdate','AdminController@productupdate');
/*Product update get*/
Route::post('/productdelete','AdminController@productDelete');

/*others*/
Route::get('/admin/others','AdminController@others');

/*gender*/
Route::get('/admin/gender','AdminController@gender');

/*product_type*/
Route::get('/admin/product-type','AdminController@productType');

/*Order*/
Route::get('/admin/order','AdminController@order');
/*Order details*/
Route::get('/admin/orderdetails/{id}','AdminController@orderdetails');
/*contact*/
Route::get('/admin/contact','AdminController@contact');

/*product_type Edit*/
Route::get('/edit/producttype/{id}','AdminController@editProductType');
Route::post('/update/producttype/{id}','AdminController@updateProductType');

Route::get('/admin/Productinventory','AdminController@productinventory')->name('productinventory');


Route::post('/cart/add',[
	'uses' => 'ShoppingController@add_to_cart',
	'as' => 'cart.add'
]);

//cart
Route::get('cart','CartController@index')->name('cart.index');
Route::post('cart/{id}','CartController@destroy')->name('cart.destroy');
Route::post('cart/item/{id}','CartController@update')->name('cart.update');

// Checkout
Route::get('checkout','CheckoutController@index')->name('checkout.index');
Route::post('checkout','CheckoutController@store')->name('checkout.store');