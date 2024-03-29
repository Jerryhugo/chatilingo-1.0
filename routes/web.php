<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Features\AddFriendsController;
use App\Http\Controllers\Features\NotificationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::controller(DashboardController::class)->group(function() {
    Route::get('/dashboard', 'PassData')->name('dashboard');
    Route::get('/delete/account', 'DeleteAccount')->name('delete.account');
    Route::post('/update/account', 'UpdateAccount')->name('update.account');
});//end DashboardController

Route::controller(AddFriendsController::class)->group(function() {
    Route::get('/display-friends', 'DisplayAllUsers')->name('display.friends');
    Route::post('/add/friends/', 'AddFriend')->name('add.friend');
});// end AddFriendsController

Route::controller(NotificationController::class)->group(function() {
    Route::get('/Create/Notifcation', 'CreateNotification')->name('create.notification');
});// end NotificationController



});





// Admin all route
// Route::controller(AdminController::class)->group(function() {
//     Route::get('/admin/logout', 'destroy')->name('admin.logout');
//     Route::get('/admin/profile', 'profile')->name('admin.profile');
//     Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
//     Route::post('/store/profile', 'StoreProfile')->name('store.profile');
//     Route::get('/change/password', 'ChangePassword')->name('change.password');
//     Route::post('/update/password', 'UpdatePassword')->name('update.password');
   

// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
