<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Redirect;

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

/*
La route récupère = URL , fonction de closure qui return une view ou le nom 
d'un controller@methode(public function qui aura également pour paramètre de retourner la view)
*/
//Main page
Route::get('/', 'HomeController@home')->name('home');


Route::get('/contact', 'HomeController@contact')->name('contact');

//shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

//cart
Route::get('/cart', 'HomeController@cart')->name('cart.index');

//checkout
Route::get('/checkout', 'HomeController@checkout')->name('checkout.index');
Route::get('/checkout/success', 'HomeController@success')->name('success');

//Orders
Route::get('/orders', 'HomeController@orders')->name('orders');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::get('/logout', function(){
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');
