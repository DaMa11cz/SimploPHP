<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerRelationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/


//customer
Route::post('/customer/new', [CustomerController::class, 'store']);
Route::get('/customer/{id}', [CustomerController::class, 'show']);

//Creating Relations customer-customerGroups
Route::post('/customerRelation/new', [CustomerRelationController::class, 'store']);
