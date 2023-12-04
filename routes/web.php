<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\additionalPInfoController;
use App\Http\Controllers\roleInsertionController;
use App\Http\Controllers\doctorAppointmentController;
use App\Http\Controllers\adminNavigationController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\DoctorHomeController;
use App\Http\Controllers\caregiverHomeController;
use App\Http\Controllers\FamilyMemberHomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;



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

Route::get('/register',[registerController::class,'register'])->name('register');

Route::post('/register-submit', [registerController::class, 'registerUser'])->name('register.submit');

Route::get('/login',[loginController::class,'login'])->name('login');

Route::post('/validateLogin', [loginController::class, 'validateLogin'])->name('validateLogin');


Route::get('/additionalPInfo',[additionalPInfoController::class,'additionalPInfo'])->name('additionalPInfo');

Route::get('/roleInsertion',[roleInsertionController::class,'roleInsertion'])->name('roleInsertion');

Route::get('/doctorAppointment',[doctorAppointmentController::class,'doctorAppointment'])->name('doctorAppointment');

Route::get('/adminNavigation',[adminNavigationController::class,'adminNavigation'])->name('adminNavigation');

// Route::get('/roster/create', [RosterController::class, 'create'])->name('roster.create');

// Route::post('/roster/store', [RosterController::class, 'store'])->name('roster.store');

// Route::middleware(['auth', 'doctor'])->group(function () {
//     Route::get('/doctor/home', [DoctorHomeController::class, 'index'])->name('doctor.home');
//     Route::post('/doctor/submit-till-date', [DoctorHomeController::class, 'submitTillDate'])->name('doctor.submit-till-date');
// });

// Route::middleware(['auth', 'caregiver'])->group(function () {
//     Route::get('/caregiver/home', [caregiverHomeController::class, 'index']);
//     Route::post('/caregiver/update-details', [caregiverHomeController::class, 'updateDetails']);
// });

// Route::middleware(['auth', 'family_member'])->group(function () {
//     Route::get('/family-member/home', [FamilyMemberHomeController::class, 'index']);
//     Route::post('/family-member/update-details', [FamilyMemberHomeController::class, 'updateDetails']);
// });

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/report', [AdminController::class, 'index']);
//     Route::get('/admin/show-missed-activity', [AdminController::class, 'showMissedActivity']);
// });

// Route::middleware(['auth', 'patient'])->group(function () {
//     Route::get('/appointment/create', [AppointmentController::class, 'create']);
//     Route::post('/appointment/store', [AppointmentController::class, 'store']);
// });

// Route::get('/logInRoute', [LoginController::class, 'showLoginForm'])->name('logIn');

// Route::post('/logInRoute', [LoginController::class, 'logIn'])->name('logIn.submit');

// Route::get('/dashboardRoute', [dashboardController::class, 'showdashboard'])->name('dashboard');
