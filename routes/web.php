<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\DashboardAdminController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita-detail/{slug}', [BeritaController::class, 'detail_berita'])->name('berita.detail');

Route::get('/register-member', [MemberController::class, 'view_register'])->name('register.member');
Route::post('/register-member-proses', [MemberController::class, 'create_member'])->name('register.member.proses');

Route::get('/login-admin', [AdminController::class, 'view_login'])->name('login.admin');
Route::post('/login-admin-proses', [AdminController::class, 'login_verif'])->name('login.admin.load');

Route::group(['middleware' => 'admin'], function(){
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/berita', [DashboardAdminController::class, 'berita'])->name('dashboard.berita');
    Route::get('/dashboard/berita-detail/{slug}', [DashboardAdminController::class, 'berita_detail'])->name('dashboard.berita-detail');
    Route::get('/dashboard/berita-create', [DashboardAdminController::class, 'create_berita'])->name('dashboard.berita.create');
    Route::post('/dashboard/berita-store', [DashboardAdminController::class, 'store_berita'])->name('dashboard.berita.store');
    Route::get('/dashboard/berita-edit/{id}', [DashboardAdminController::class, 'edit_berita'])->name('dashboard.berita.edit');
    Route::post('/dashboard/berita-update/{id}', [DashboardAdminController::class, 'update_berita'])->name('dashboard.berita.update');
    Route::delete('/dashboard/berita-delete/{id}', [DashboardAdminController::class, 'destroy_berita'])->name('dashboard.berita.destroy');
    Route::get('/dashboard/kemitraan', [DashboardAdminController::class, 'mitra'])->name('dashboard.mitra');
    Route::get('/dashboard/member', [DashboardAdminController::class, 'member'])->name('dashboard.member');
    Route::get('/dashboard/admin', [SuperAdminController::class, 'admin'])->name('dashboard.admin');
    Route::post('/dashboard/admin/add', [SuperAdminController::class, 'add_admin'])->name('dashboard.admin.add');
    Route::delete('/dashboard/admin-delete/{id}', [SuperAdminController::class, 'destroy_admin'])->name('dashboard.admin.destroy');
});