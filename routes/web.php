<?php

use App\Models\Listing;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//single listing //route model binding
Route::get('/listings/{listing}', [ListingController::class, 'show']);



//Show Register/Create User Form
Route::get('/register', [UserController::class, 'create']);

//create new user
Route::post('/users', [UserController::class, 'store']);

//Log User Out 
Route::post('/logout', [UserController::class, 'logout']);
