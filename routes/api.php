<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\BankAccountController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => ['api']
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
/***
 * jwt.validate middleware the validate request before going to controller
 * app/Http/Middleware/JwtMiddleware.php
 */
    Route::group(['middleware' => ['jwt.validate']], static function ($router) {
        //=================Bank===========================================
        Route::get('hospitals/get_hospitals', [HospitalController::class, 'getAllHospitals']);
        //=================Verify beneficiary Account=================================
       
        //==================User Logout====================================
        Route::post('logout', [AuthController::class, 'logout']);
    });
});
