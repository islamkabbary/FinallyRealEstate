<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ApartmentDetailsController;

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
Auth::routes();
Route::middleware(['lang'])->group(function () {
    Route::get('/lang/{lang}', function ($lang) {
        Session::put('locale', $lang);
        return redirect()->back();
    })->name('lang');
    Route::get('/', function () {
        return view('web.home');
    });
    Route::get('/about-me', function () {
        return view('web.about');
    })->name('aboutMe');
    Route::get('/map', function () {
        return view('web.showMap');
    })->name('map');
    Route::get('/details', [ApartmentDetailsController::class, 'index'])->name('form-details');;
    Route::post('/create-details', [ApartmentDetailsController::class, 'createDetails']);
});
Route::group(['middleware' => ['auth','lang'], 'prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');
});
