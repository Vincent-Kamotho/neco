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

Route::get('/book-appointment', function(){
    return view('frontend.appointmentbooking');
});

Route::get('/upcoming-events', function(){
    return view('frontend.upcomingevents');
});

Route::post('/request-appointment', [App\Http\Controllers\ClientAppointment::class, 'store']);

Route::group(['prefix' => 'admin'], function(){
    Route::get('home', function() { 
        return view('admin.home'); 
    })->middleware('auth');
    Route::get('appointments', [App\Http\Controllers\ClientAppointment::class, 'index']);
    Route::get('approve-appointment/{id}', [App\Http\Controllers\ClientAppointment::class, 'ApproveRequest']);
    Route::get('decline-appointment/{id}', [App\Http\Controllers\ClientAppointment::class, 'DeclineRequest']);


    Route::get('schedule', [App\Http\Controllers\Schedule::class, 'index']);
    Route::get('clear-schedule/{id}', [App\Http\Controllers\Schedule::class, 'destroy']);


    Route::group(['prefix' => 'team'], function(){
        Route::get('counsellors', [App\Http\Controllers\Team::class, 'CounsellorIndex']);
        Route::get('add-counsellor', [App\Http\Controllers\Team::class, 'createCounsellor']);
        Route::post('save-counsellor', [App\Http\Controllers\Team::class, 'storeCounsellor']);
        Route::get('edit-counsellor/{id}', [App\Http\Controllers\Team::class, 'editCounsellor']);
        Route::post('update-counsellor/{id}', [App\Http\Controllers\Team::class, 'updateCounsellor']);
        Route::get('delete-counsellor/{id}', [App\Http\Controllers\Team::class, 'destroyCounsellor']);


        Route::get('staff', [App\Http\Controllers\Team::class, 'staffIndex']);
        Route::get('add-staff', [App\Http\Controllers\Team::class, 'createStaff']);
        Route::post('save-staff', [App\Http\Controllers\Team::class, 'storeStaff']);
        Route::get('edit-staff/{id}', [App\Http\Controllers\Team::class, 'editStaff']);
        Route::post('update-staff/{id}', [App\Http\Controllers\Team::class, 'updateStaff']);
        Route::get('delete-staff/{id}', [App\Http\Controllers\Team::class, 'deleteStaff']);
    });

    Route::group(['prefix' => 'users'], function(){
        Route::get('list', [App\Http\Controllers\Users::class, 'listUsers']);
        Route::get('create-user', [App\Http\Controllers\Users::class, 'createUser']);
        Route::post('save-user', [App\Http\Controllers\Users::class, 'storeUser']);
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
