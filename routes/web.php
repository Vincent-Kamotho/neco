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

Route::get('/', function () {
    return view('frontend.welcome');
})->name('welcome');

Route::get('/personal-problem', function (){
    return view('frontend.personalproblem');
});

Route::get('/depression-treatment', function(){
    return view('frontend.depressionproblem');
});

Route::get('/family-problems', function(){
    return view('frontend.familyproblems');
});

Route::get('couples-problems', function(){
    return view('frontend.couplesproblems');
});

Route::get('business-problems', function(){
    return view('frontend.businessproblems');
});

Route::get('relationship-problems', function(){
    return view('frontend.relationshipproblems');
});

Route::get('/contact-us', function(){
    return redirect()->route('welcome', ['#contact-section']);
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('home', function(){
        return view('admin.home');
    });
});

