<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// first static API route
Route::get('/hello', function(){
    return [
        'id' => 1,
        'name' => 'Ankit',
        'email' => 'ankit@example.com',
        'phone' => '1234567890',
        'address' => '123 Main St, City, Country',
        'status' => 'active',
        'role' => 'admin',
        'created_at' => '2024-01-01 12:00:00',
        'updated_at' => '2024-01-10 15:30:00',
        'email_verified_at' => '2024-01-05 10:00:00',
        'profile_photo_url' => 'https://example.com/profile_photos/ankit.jpg'
    ];
});

// API route to get all users using UserController
Route::get('/users',[UserController::class,'getAllUser']);
Route::post('/add_Student',[UserController::class,'addStudent']);
