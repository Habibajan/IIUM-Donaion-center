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
    return view('layout.homePage');
})->name('homePage');
Route::get('about', function () { 
    return view('layout.about');
})->name('about');
Route::get('contact', function () { 
    return view('layout.contact');
})->name('contact');
// Route::get('gallery', function () { 
//     return view('layout.gallery');
// })->name('gallery');
// Route::get('shortcodes', function () { 
//     return view('layout.shortcodes');
// })->name('shortcodes');

Auth::routes();

Route::group(['middleware'=>['web', 'auth']], function(){
    
       
        Route::get('donationForm', function () { 
            return view('donations.donationForm');
        })->name('donationForm');
        // Route::post('view-all-donation', function () { 
        //     return view('donations.view-all-donation');
        // })->name('view-all-donation');
        Route::get('addRequest', function () { 
            return view('receivers.addRequest');
        })->name('addRequest');

       Route::get('/home', function(){
        if(auth::user()->admin==0){
            return view('home');
        }else{
            // $users['users']=\App\User::all();
            return view('admin');
        }
       });

    Route::get('/donations/donationForm', 'DonationController@create')->name('donations.donationForm');
    Route::post('donations/store', 'DonationController@store')->name('donations.store');
    Route::get('donations', 'DonationController@index')->name('donations.index');
    Route::get('/donations//{id}', 'DonationController@edit')->name('donations.edit-donation');
    Route::post('donations/destroy/{id}', 'DonationController@destroy')->name('donations.destroy');
    Route::post('/donations/update/{id}', 'DonationController@update')->name('donations.update');

    Route::get('/receivers/addRequests', 'RequestController@create')->name('addRequests');
    Route::post('receivers/store', 'RequestController@store')->name('receivers.store');
    Route::get('receivers', 'RequestController@index')->name('receivers.index');
    Route::get('/receivers/edit-request/{id}', 'RequestController@edit')->name('receivers.edit-request');
    Route::post('receivers/destroy/{id}', 'RequestController@destroy')->name('receivers.destroy');
    Route::post('/receivers/update/{id}', 'RequestController@update')->name('receivers.update');

});
// Route::get('/donations/send', 'MailController@send');
