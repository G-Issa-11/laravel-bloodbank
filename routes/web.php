<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\RecipientController;
use App\Http\Controllers\BloodGroupController;

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
    return view('welcome');
});

//donor related routes
Route::get('/donor-records', [DonorController::class, 'index'])->name('donor.records');
Route::post('/donors/store', [DonorController::class, 'store'])->name('donor.store');
Route::delete('/donors/delete/{donor}', [DonorController::class, 'deleteDonor'])->name('donor.delete');
Route::get('/edit-donor/{donor}', [DonorController::class, 'showEditScreen']);
Route::put('/edit-donor/{donor}', [DonorController::class, 'actuallyUpdateDonorInfo']);
Route::get('/donors/reset', [DonorController::class, 'clearTable'])->name('donor.reset');

// Recipient related routes
Route::get('/recipient-records', [RecipientController::class, 'index'])->name('recipient.records');
Route::post('/recipient/store', [RecipientController::class, 'store'])->name('recipient.store');
Route::delete('/recipient/delete/{recipient}', [RecipientController::class, 'deleteRecipient'])->name('recipient.delete');
Route::get('/recipients/reset', [RecipientController::class, 'clearTable'])->name('recipient.reset');

// Donations related routes
Route::get('/donation-records', [DonationController::class, 'index'])->name('donation.records');
Route::get('/donations/reset', [DonationController::class, 'clearTable'])->name('donation.reset');

// Staff related routes
Route::get('/staff-records', [StaffController::Class, 'index'])->name('staff.records');
Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');
Route::delete('/staff/delete/{staff}' , [StaffController::class, 'deleteStaffMember'])->name('staff.delete');
Route::get('/staff/reset', [StaffController::class, 'clearTable'])->name('staff.reset');

//blood groups related routes
Route::get('/bloodgroups-records', [BloodGroupController::class, 'index'])->name('bloodgroup.records');