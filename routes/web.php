<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'FrontendController@index');

Route::get('firebase','FirebaseController@index');

Route::get('/about-us', 'FrontendController@aboutus');
Route::get('/services', 'FrontendController@services');
Route::get('/contact-us', 'FrontendController@contactus');

// Route::get('/vendordash', 'Vendor\VDashboardController@vendor');
// Route::get('/vendor_d', 'Vendor\VDashboardController@vdetail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','admin']],  function(){
   
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('role-registered', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}', 'Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}', 'Admin\DashboardController@registerdelete');

    Route::get('/vendor-details', 'Admin\DashboardController@vendorShow');

    Route::get('/about', 'Admin\AboutusController@index');
    Route::post('/save-aboutus', 'Admin\AboutusController@store');
    Route::get('/about-us/{id}', 'Admin\AboutusController@edit');
    Route::put('aboutus-update/{id}', 'Admin\AboutusController@update');
    Route::delete('about-us-delete/{id}', 'Admin\AboutusController@delete');
});


Route::group(['middleware'=>['auth','vendor']],  function(){
   
    Route::get('/vendordash', function () {
        return view('vendorMaster.v_dashboard');
    });
    //Route::get('/vendordash', 'Vendor\VDashboardController@vendor');
    Route::get('/vendor_d', 'Vendor\VDashboardController@vdetail');
    Route::post('/save-vdetail', 'Vendor\VDashboardController@store');
    Route::get('/vendor_p', 'Vendor\VDashboardController@show');
});