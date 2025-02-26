<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Auth\Login as AdminLogin;
use App\Livewire\Emp\Auth\Login as EmpLogin;
use App\Livewire\Admin\Announcement\Main as AdminAnnouncement;
use App\Livewire\Admin\Calendar\Main as AdminCalendar;
use App\Livewire\Admin\Download\Main as AdminDownload;
use App\Livewire\Admin\Employee\Main as AdminEmployee;
use App\Livewire\Admin\Service\Main as AdminService;
use App\Livewire\Admin\Dashboard\Main as AdminDashboard;
use App\Livewire\Emp\Dashboard\Main as EmployeeDashboard;

$domain = env('APP_DOMAIN', 'matichonhr.test');

// Route สำหรับ Admin
Route::prefix("admin")->group(function () {
    // ถ้ายังไม่ได้ Login ให้ไปหน้า Login ของ Admin
    Route::middleware('guest')->group(function () {
        Route::get('/login', AdminLogin::class)->name('admin.login');
    });
    // ถ้า Login แล้ว ให้ไปหน้า Dashboard ของ Admin
    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            // dd(Auth::check(), Auth::user(), session()->all());
            return redirect()->route('admin.announcement');
        });

        Route::get('/announcement', AdminAnnouncement::class)->name('admin.announcement');
        Route::get('/calendar', AdminCalendar::class)->name('admin.calendar');
        Route::get('/download', AdminDownload::class)->name('admin.download');
        Route::get('/employee', AdminEmployee::class)->name('admin.employee');
        Route::get('/service', AdminService::class)->name('admin.service');
    });
});

// Route สำหรับ Employee
Route::prefix("/")->group(function () {
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
