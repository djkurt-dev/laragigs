<?php

use App\Http\Controllers\ListingController;

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

//all listings
Route::get('/', [ListingController::class, 'index']);

//Show create listing form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store LIsting data
Route::post('/listings',[ListingController::class, 'store']);

//Update listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//edit submit to update
Route::put('/listings/{listing}',[ListingController::class, 'update']);

//single listing //route model binding
Route::get('/listings/{listing}', [ListingController::class, 'show']);




