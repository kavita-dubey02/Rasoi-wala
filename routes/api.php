<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChefAuthController;
use App\Http\Controllers\Api\UserAuthController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Chef Authentication
Route::prefix('chef')->group(function () {
    Route::post('/register', [ChefAuthController::class, 'register']);
    Route::post('/login', [ChefAuthController::class, 'login']);
      Route::post('/send-otp', [ChefAuthController::class, 'sendOtp']);
    Route::post('/verify-otp', [ChefAuthController::class, 'verifyOtp']);
});




Route::middleware(['auth:sanctum', 'role:chef'])->prefix('chef')->group(function () {

    Route::post('/logout', [ChefAuthController::class, 'logout']);

    Route::get('/profile',[ChefAuthController::class, 'profile']);
    Route::get('/events', [ChefAuthController::class, 'eventList']);
    Route::get('/bookingsrequest', [ChefAuthController::class, 'bookingRequests']);
    Route::post('/Chef-availability', [ChefAuthController::class, 'toggleAvailability']);
    Route::post('/booking-status-update', [ChefAuthController::class, 'updateStatus']);
    Route::post('/profile-update', [ChefAuthController::class, 'updateProfilechef']);
    Route::post('/profile-personal-detailupdate', [ChefAuthController::class, 'updatepersonalProfile']);
    Route::post('/profile-address-update', [ChefAuthController::class, 'updateProfileAddress']);
    Route::get('/profile-bookingdetail', [ChefAuthController::class, 'chefBookingCount']);
    

});

// User Authentication
Route::prefix('user')->group(function () {
    Route::post('/register', [UserAuthController::class, 'register']);
    Route::post('/login', [UserAuthController::class, 'login']);
      Route::post('/send-otp', [UserAuthController::class, 'sendOtp']);
    Route::post('/verify-otp', [UserAuthController::class, 'verifyOtp']);
    

});



// Logout only needs auth — no role check (any authenticated user can log out)
Route::middleware(['auth:sanctum'])->prefix('user')->group(function () {
    Route::post('/logout', [UserAuthController::class, 'logout']);
});

Route::middleware(['auth:sanctum', 'role:customer'])->prefix('user')->group(function () {

    Route::get('/profile',[UserAuthController::class, 'profile']);
    Route::post('/book-chef', [UserAuthController::class, 'store']);
    
    Route::post('/address', [UserAuthController::class, 'addressstore']);
    Route::get('/address-get', [UserAuthController::class, 'addressGet']);
    Route::get('/chefs', [UserAuthController::class, 'chefList']);
     Route::put('/updateaddresse/{id}', [UserAuthController::class, 'addressupdate']);
    Route::delete('/deleteaddresses/{id}', [UserAuthController::class, 'addressdestroy']);
    Route::get('/bookings', [UserAuthController::class, 'myBookings']);
    Route::get('/User-Profile-show', [UserAuthController::class, 'getProfile']);
    Route::post('/User-Profile-update', [UserAuthController::class, 'UserProfileupdate']);

    
});

//admin dashboard 

Route::middleware(['auth:sanctum', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return response()->json(['message' => 'Welcome Admin']);
    });
});

Route::middleware(['auth:sanctum', 'role:customer'])->prefix('customer')->group(function () {

    Route::get('/profile', function (Request $request) {
        return response()->json([
            'user' => $request->user()
        ]);
    });

});
