<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\BookingController;



Route::get('/', function () {
    return view('index');
})->name('index');
//user login 
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showUserRegister'])->name('register');
Route::post('/register', [AuthController::class, 'saveUserRegister'])->name('register.user');

//admin login
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/register', [AdminAuthController::class, 'showAdminRegister'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'saveAdminRegister'])->name('admin.register.save');

    
Route::middleware(['auth'])->prefix('web-admin')->as('web-admin.')->group(function(){
    Route::get('dashboard',function(){
        return view('admin.index');
    })->name('dashboard');
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
    //Admin chef
    Route::get('chefadd',[ChefController::class,'chefadd'])->name('chefadd');
    Route::post('chefstore',[ChefController::class,'chefstore'])->name('chefstore');
    Route::get('cheflist',[ChefController::class,'cheflist'])->name('cheflist');
    Route::get('chefedit/{id}', [ChefController::class, 'chefedit'])->name('chefedit');
    Route::post('chefupdate/{id}', [ChefController::class, 'chefupdate'])->name('chefupdate');
    Route::delete('chefdelete/{id}', [ChefController::class, 'destroy'])->name('chefdelete');
    Route::get('cheftoggle/{id}/toggle-availability',[ChefController::class, 'toggleAvailability']
)->name('toggleAvailability');


    //User
    Route::get('useradd',[UserController::class,'useradd'])->name('useradd');
    Route::post('userstore',[UserController::class,'userstore'])->name('userstore');
    Route::get('userlist',[UserController::class,'userlist'])->name('userlist');
    Route::get('useredit/{id}', [UserController::class, 'useredit'])->name('useredit');
    Route::post('userupdate/{id}', [UserController::class, 'userupdate'])->name('userupdate');
    Route::delete('userdelete/{id}', [UserController::class, 'destroy'])->name('delete');

    //event
     Route::get('eventadd',[EventController::class,'eventadd'])->name('eventadd');
    Route::post('eventstore',[EventController::class,'eventstore'])->name('eventstore');
    Route::get('eventlist',[EventController::class,'eventlist'])->name('eventlist');
    Route::get('eventedit/{id}', [EventController::class, 'eventedit'])->name('eventedit');
    Route::post('eventupdate/{id}', [EventController::class, 'eventupdate'])->name('eventupdate');
    Route::delete('userdelete/{id}', [EventController::class, 'destroy'])->name('eventdelete');
  //category
    Route::get('categoryadd',[EventController::class,'categoryadd'])->name('categoryadd');
    Route::post('categorystore',[EventController::class,'categorystore'])->name('categorystore');
    Route::get('categorylist',[EventController::class,'categorylist'])->name('categorylist');
    Route::get('categoryedit/{id}', [EventController::class, 'categoryedit'])->name('categoryedit');
    Route::post('categoryupdate/{id}', [EventController::class, 'categoryupdate'])->name('categoryupdate');
    Route::delete('categorydelete/{id}', [EventController::class, 'categorydestroy'])->name('categorydelete');
    //dishesh
    Route::get('dishadd',[DishController::class,'dishadd'])->name('dishadd');
    Route::post('dishstore',[DishController::class,'dishstore'])->name('dishstore');
    Route::get('dishlist',[DishController::class,'dishlist'])->name('dishlist');
    Route::get('dishedit/{id}', [DishController::class, 'dishedit'])->name('dishedit');
    Route::post('dishupdate/{id}', [DishController::class, 'dishupdate'])->name('dishupdate');
    Route::delete('dishdelete/{id}', [DishController::class, 'dishdestroy'])->name('dishdelete');
    //booking
    Route::get('/bookings', [BookingController::class, 'bookinglist'])->name('bookinglist');
    Route::get('/booking/add', [BookingController::class, 'create'])->name('bookingadd');
Route::post('/booking/store', [BookingController::class, 'store'])->name('bookingstore');
Route::get('/bookingedit/{id}', [BookingController::class, 'edit'])->name('bookingedit');
Route::post('/bookingupdate/{id}', [BookingController::class, 'update'])->name('bookingupdate');
Route::delete('/bookingdelte/{id}', [BookingController::class, 'delete'])->name('bookingdelete');




});

//dashboard
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/chefparty', function () {
    return view('chefparty');
})->name('chefparty');

Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');

Route::get('/cooksnearme', function () {
    return view('cooksnearme');
})->name('cooksnearme');

Route::get('/onetimecooks', function () {
    return view('onetimecooks');
})->name('onetimecooks');

Route::get('/RasoiwalaSe', function () {
    return view('RasoiwalaSe');
})->name('RasoiwalaSe');

Route::get('/firstTimeCook', function () {
    return view('firstTimeCook');
})->name('firstTimeCook');

Route::get('/ChefForParty', function () {
    return view('ChefForParty');
})->name('ChefForParty');

Route::get('/privacy-policy', function () {
    return view('privacypolicy');
})->name('privacypolicy');

Route::get('/term-&-condition', function () {
    return view('termcondition');
})->name('termcondition');

Route::get('/shipping-&-devlivery-policy', function () {
    return view('shippingdevlivery');
})->name('shippingdevlivery');

Route::get('/cancellation-&-refund-policy', function () {
    return view('cancellation');
})->name('cancellation');


Route::get('/Homevisit', function () {
    return view('Homevisit');
})->name('Homevisit');

Route::get('/RasoiwalaAddForm', function () {
    return view('RasoiwalaAddForm');
})->name('RasoiwalaAddForm');