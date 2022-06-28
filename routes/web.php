<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\PatientAuthController;


// Frontend Controller

Route::get('/', [FrontendController::class, 'ShowHomePage'] ) -> name('home.page');
Route::get('/login-page', [FrontendController::class, 'ShowLoginPage'] ) -> name('login.page');

// Patient pages
Route::get('/patient-register', [FrontendController::class, 'ShowPatientRegisterPage'] ) -> name('patient.reg.page');
Route::get('/patient-dashboard', [FrontendController::class, 'ShowPatientDashPage'] ) -> name('patient.dash.page');
Route::post('/patient-register', [PatientAuthController::class, 'register'] ) -> name('patient.register');
Route::post('/patient-login', [PatientAuthController::class, 'login'] ) -> name('patient.login');
Route::get('/patient-logout', [PatientAuthController::class, 'logout'] ) -> name('patient.logout');

// Doctor pages
Route::get('/doctor-register', [FrontendController::class, 'ShowDoctorRegisterPage'] ) -> name('doctor.reg.page');
Route::get('/doctor-dashboard', [FrontendController::class, 'ShowDoctorDashPage'] ) -> name('doctor.dash.page');