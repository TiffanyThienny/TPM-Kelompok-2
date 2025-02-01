<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\LeadnonController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembernonController;

Route::get('/', function () {
    return view('home');
});

// Contact Us
Route::get('/contact-us', [PesanController::class, 'getContactUsPage'])->name('getContactUsPage');
Route::post('/contact-us/create', [PesanController::class, 'createMessage'])->name('createMessage');

// Lead Information (Binusian)
Route::get('/Lead-Information', [LeadController::class, 'getLeadInfo'])->name('getLeadInfo');
Route::post('/Lead-Information/create', [LeadController::class, 'createLead'])->name('createLead');

// Lead Information (Non-Binusian)
Route::get('/LeadNonBin', [LeadnonController::class, 'getLeadnonbinInfo'])->name('getLeadnonbinInfo');
Route::post('/LeadNonBin/create', [LeadnonController::class, 'createLeadnonbin'])->name('createLeadnonbin');

// Register
Route::get('/register', [AuthenticationController::class, 'getRegister'])->name('register');
Route::post('/register', [AuthenticationController::class, 'register']);

// Login
Route::get('/login', [AuthenticationController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login']);

// Logout
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::get('/Member', [MemberController::class, 'getmemberInfo'])->name('getmemberInfo');
Route::post('/Member-Info', [MemberController::class, 'createMember'])->name('createMember');

Route::get('/Membernon', [MembernonController::class, 'getmembernonbinInfo'])->name('getmembernonbinInfo');
Route::post('/Member-Infonon', [MembernonController::class, 'createmembernonbin'])->name('createmembernonbin');