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

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\TermsController;
use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => 'tipoff.dev',
    'as' => 'front.',
], function() {
    Route::get('', HomeController::class . '@index')->name('index');
    Route::get('company/terms', TermsController::class . '@index')->name('terms');
});
