<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;

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
    return view('home');
});



// Call Github SignIn Page
Route::get('/CallGithubSignInPage',[SocialController::class,'CallGithubSignInPage']);



// Github Call Back With Data
Route::get('/GithubCallback',[SocialController::class,'GithubCallback']);



// User Dashboard
Route::get('/dashboard',[SocialController::class,'dashboard'])->middleware('SocialLoginCheck');




// User Logout 
Route::get('/logout',[SocialController::class,'logout']);