<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita-detail/{slug}', [BeritaController::class, 'detail_berita'])->name('berita.detail');
Route::get('/create-berita', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/create-berita', [BeritaController::class, 'store'])->name('berita.createnew');

Route::get('/register-member', [MemberController::class, 'view_register'])->name('register.member')->middleware('guest');
Route::post('/register-member-proses', [MemberController::class, 'create_member'])->name('register.member.proses');

Route::get('/login-admin', [AdminController::class, 'view_login'])->name('login.admin');
Route::post('/login-admin', [AdminController::class, 'login_verif'])->name('login.admin.load');

Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/berita', [DashboardAdminController::class, 'berita'])->name('dashboard.berita');
Route::get('/dashboard/berita-detail/{slug}', [DashboardAdminController::class, 'berita_detail'])->name('dashboard.berita-detail');
Route::get('/dashboard/berita-create', [DashboardAdminController::class, 'create'])->name('dashboard.berita.create');
Route::post('/dashboard/berita-store', [DashboardAdminController::class, 'store'])->name('dashboard.berita.store');
Route::get('/dashboard/berita-edit/{slug}', [DashboardAdminController::class, 'edit'])->name('dashboard.berita.edit');
Route::put('/dashboard/berita-update/{id}', [DashboardAdminController::class, 'update'])->name('dashboard.berita.update');
Route::delete('/dashboard/berita-delete/{id}', [DashboardAdminController::class, 'destroy'])->name('dashboard.berita.destroy');