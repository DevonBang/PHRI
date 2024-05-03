<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\DashboardAdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/berita', [HomeController::class, 'berita'])->name('berita');

Route::get('/informasi', [HomeController::class, 'informasi'])->name('informasi');

Route::get('/kemitraan', [HomeController::class, 'kemitraan'])->name('kemitraan');
Route::post('/kemitraan-store', [HomeController::class, 'kemitraan_store'])->name('kemitraan.store');

Route::get('/register-member', [MemberController::class, 'view_register'])->name('register.member');
Route::post('/register-member-proses', [MemberController::class, 'create_member'])->name('register.member.proses');

Route::get('/login', [UserController::class, 'view_login'])->name('login');
Route::post('/login-proses', [UserController::class, 'login_verif'])->name('login.load');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'view_register'])->name('register');
Route::post('/register-proses', [UserController::class, 'store_register']);

Route::group(['middleware' => 'admin'], function(){
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.index');

    Route::get('/dashboard/berita', [DashboardAdminController::class, 'berita'])->name('dashboard.berita');
    Route::post('/dashboard/berita-store', [DashboardAdminController::class, 'store_berita']);
    Route::get('/dashboard/berita-edit/{id}', [DashboardAdminController::class, 'edit_berita']);
    Route::post('/dashboard/berita-update/{id}', [DashboardAdminController::class, 'update_berita']);
    Route::delete('/dashboard/berita-delete/{id}', [DashboardAdminController::class, 'destroy_berita'])->name('dashboard.berita.destroy');

    Route::get('/dashboard/kemitraan', [DashboardAdminController::class, 'mitra'])->name('dashboard.mitra');

    Route::get('/dashboard/member', [DashboardAdminController::class, 'member'])->name('dashboard.member');
    
    Route::get('/dashboard/master-data/jenis-usaha', [DashboardAdminController::class, 'jenis'])->name('dashboard.jenis');
    Route::post('/dashboard/jenis-usaha-store', [DashboardAdminController::class, 'store_jenis']);
    Route::get('/dashboard/jenis-usaha-edit/{id}', [DashboardAdminController::class, 'edit_jenis']);
    Route::post('/dashboard/jenis-update/{id}', [DashboardAdminController::class, 'update_jenis']);
    Route::delete('/dashboard/jenis-usaha-delete/{id}', [DashboardAdminController::class, 'destroy_jenis'])->name('dashboard.jenis.destroy');

    Route::get('/dashboard/master-data/klasifikasi-usaha', [DashboardAdminController::class, 'klasifikasi'])->name('dashboard.klasifikasi');
    Route::post('/dashboard/klasifikasi-usaha-store', [DashboardAdminController::class, 'store_klasifikasi']);
    Route::get('/dashboard/klasifikasi-usaha-edit/{id}', [DashboardAdminController::class, 'edit_klasifikasi']);
    Route::post('/dashboard/klasifikasi-update/{id}', [DashboardAdminController::class, 'update_klasifikasi']);
    Route::delete('/dashboard/klasifikasi-usaha-delete/{id}', [DashboardAdminController::class, 'destroy_klasifikasi'])->name('dashboard.klasifikasi.destroy');

    Route::get('/dashboard/profile', [DashboardAdminController::class, 'profile'])->name('dashboard.profile');
    Route::post('/dashboard/profile/img-upd', [DashboardAdminController::class, 'updateImg']);
    Route::post('/dashboard/profile/update', [DashboardAdminController::class, 'updProfile']);

    Route::get('/dashboard/superadmin/admin', [SuperAdminController::class, 'admin'])->name('dashboard.admin');
    Route::post('/dashboard/superadmin/admin/add', [SuperAdminController::class, 'add_admin']);
    Route::delete('/dashboard/superadmin/admin-delete/{id}', [SuperAdminController::class, 'destroy_admin'])->name('dashboard.admin.destroy');
    
    Route::get('/dashboard/superadmin/mitra', [SuperAdminController::class, 'mitra'])->name('dashboard.superadmin.mitra');
    Route::post('/dashboard/superadmin/mitra/store', [SuperAdminController::class, 'add_mitra']);
    Route::delete('/dashboard/superadmin/mitra-delete/{id}', [SuperAdminController::class, 'destroy_mitra'])->name('dashboard.mitra.destroy');

});