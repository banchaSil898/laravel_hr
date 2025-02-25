<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Auth\Login as AdminLogin;
use App\Livewire\Emp\Auth\Login as EmpLogin;
use App\Livewire\Admin\Dashboard\Main as AdminDashboard;
use App\Livewire\Emp\Dashboard\Main as EmployeeDashboard;

$domain = env('APP_DOMAIN', 'matichonhr.test');

// Route สำหรับ Admin
Route::domain("admin.$domain")->group(function () {
    // ถ้ายังไม่ได้ Login ให้ไปหน้า Login ของ Admin
    Route::middleware('guest')->group(function () {
        Route::get('/login', AdminLogin::class)->name('admin.login');
    });
    // ถ้า Login แล้ว ให้ไปหน้า Dashboard ของ Admin
    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            // dd(Auth::check(), Auth::user(), session()->all());
            return redirect()->route('admin.dashboard');
        });

        Route::get('/dashboard', AdminDashboard::class)->name('admin.dashboard');
    });
});

// Route สำหรับ Employee
Route::domain("employee.$domain")->group(function () {
    // ถ้ายังไม่ได้ Login ให้ไปหน้า Login ของ Employee
    Route::middleware('guest')->group(function () {
        Route::get('/login', EmpLogin::class)->name('emp.login');
    });

    // ถ้า Login แล้ว ให้ไปหน้า Dashboard ของ Employee
    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            return redirect()->route('employee.dashboard');
        });

        Route::get('/dashboard', EmployeeDashboard::class)->name('employee.dashboard');
    });
});

// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

// Route::get('/admin/login', AdminLogin::class)->name('admin.login');
// Route::get('/employee/login', EmpLogin::class)->name('emp.login');

require __DIR__.'/auth.php';
