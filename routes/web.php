<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;


// Route is a path for your application to respond to a specific HTTP request.
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
}); 

// For redirect
//Route::redirect('/home', '/about/Ankit');

// We can write routes in many different ways, this is just a basic example.
//Route::view('/home', 'home');
// Route::get('/about/{name}', function($name){
//     //echo $name;
//     return view('about',['name'=>$name]);
// });

// Route::get('/user', [UserController::class, 'getUser']);
// Route::get('/userName/{name}', [UserController::class, 'getUserName']);
// Route::get('/showUser/{name}', [UserController::class, 'showUserName']);
// Route::get('/about/{name}/{email}', [UserController::class, 'showUserDetails']);
// Route::get('/contact-us', [UserController::class, 'contactUs']);
// Route::post('/contactform', [UserController::class, 'contactform']);
 Route::view('/blog', 'blog')->name('blognamedroute');
// Route::post('/submit-comment',[UserController::class, 'submitComment']);

// Create a route for Signup page
Route::view('sign-up', 'sign-up');
// We can define this User Controller as Route Group Controller
Route::controller(UserController::class)->group(function(){
    Route::get('/user', 'getUser');
    Route::get('/userName/{name}', 'getUserName');
    Route::get('/showUser/{name}', 'showUserName');
    Route::get('/about/{name}/{email}', 'showUserDetails');
    Route::get('/contact-us', 'contactUs');
    Route::post('/contactform', 'contactform');
    Route::post('/submit-comment', 'submitComment');
    Route::post('/signup', 'signupForm');
    Route::get('/delete/{id}', 'deleteUser');
    Route::get('/edit/{id}', 'editUser');
    Route::put('/update-user/{id}', 'updateUser');
    Route::get('/search-users', 'searchUsers');
});

Route::get('getSeller', [SellerController::class,'getSeller']);
Route::get('getSellerWithProduct',[SellerController::class,'getSellerWithProduct']);
Route::get('getSellerWithProductDetails',[SellerController::class,'getSellerWithProductDetails']);