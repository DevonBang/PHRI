<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardMemberController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KemitraanController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\PenawaranController;

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
Route::post('/penawaran-store', [HomeController::class, 'penawaran_store'])->name('penawaran.store');

Route::get('/kemitraan', [HomeController::class, 'kemitraan'])->name('kemitraan');
Route::post('/kemitraan-store', [HomeController::class, 'kemitraan_store'])->name('kemitraan.store');

Route::get('/register-member', [MemberController::class, 'view_register'])->name('register.member');
Route::post('/register-member-proses', [MemberController::class, 'create_member'])->name('register.member.proses');

Route::get('/login', [UserController::class, 'view_login'])->name('login')->middleware('guest:admin,member');
Route::post('/login-proses', [UserController::class, 'login_verif'])->name('login.load');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'view_register'])->name('register')->middleware('guest:admin,member');
Route::post('/register-proses', [UserController::class, 'store_register'])->name('register.load');

Route::group(['middleware' => 'member'], function(){
    Route::get('/dashboard-member', [DashboardMemberController::class, 'dashboard'])->name('dashboard-member.index');
    Route::get('/register-member/pengisian', [DashboardMemberController::class, 'multi_step'])->name('isidata.member');
    Route::post('/register-member/pengisian/store', [DashboardMemberController::class, 'storeData'])->name('store.data');
    Route::post('/register-member/pengisian/store-restoran', [DashboardMemberController::class, 'storeDataResto'])->name('store.data-resto');

    Route::get('/dashboard-member/profile', [DashboardMemberController::class, 'profile'])->name('dashboard-member.profile');
    Route::post('/dashboard-member/profile/img-upd', [DashboardMemberController::class, 'updateImg'])->name('dashboard-member.profile.img');
    Route::post('/dashboard-member/profile/update', [DashboardMemberController::class, 'updProfile']);
});

Route::group(['middleware' => 'admin'], function(){
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.index');

    Route::get('/dashboard/berita', [DashboardAdminController::class, 'berita'])->name('dashboard.berita');
    Route::post('/dashboard/berita-store', [BeritaController::class, 'store_berita']);
    Route::get('/dashboard/berita-edit/{id}', [BeritaController::class, 'edit_berita']);
    Route::post('/dashboard/berita-update/{id}', [BeritaController::class, 'update_berita']);
    Route::delete('/dashboard/berita-delete/{id}', [BeritaController::class, 'destroy_berita'])->name('dashboard.berita.destroy');
    
    Route::get('/dashboard/kemitraan', [DashboardAdminController::class, 'mitra'])->name('dashboard.mitra');
    Route::post('/dashboard/kemitraan/terima/{id}', [KemitraanController::class, 'terima_mitra'])->name('dashboard.mitra.terima');
    Route::post('/dashboard/kemitraan/tolak/{id}', [KemitraanController::class, 'tolak_mitra'])->name('dashboard.mitra.tolak');

    Route::get('/dashboard/member', [DashboardAdminController::class, 'member'])->name('dashboard.member');
    Route::get('/dashboard/member-detail/{id}', [DashboardAdminController::class, 'detail_member'])->name('dashboard.member.detail');
    
    Route::get('/dashboard/master-data/jenis-usaha', [MasterDataController::class, 'jenis'])->name('dashboard.jenis');
    Route::post('/dashboard/jenis-usaha-store', [MasterDataController::class, 'store_jenis']);
    Route::get('/dashboard/jenis-usaha-edit/{id}', [MasterDataController::class, 'edit_jenis']);
    Route::post('/dashboard/jenis-update/{id}', [MasterDataController::class, 'update_jenis']);
    Route::delete('/dashboard/jenis-usaha-delete/{id}', [MasterDataController::class, 'destroy_jenis'])->name('dashboard.jenis.destroy');
    
    Route::get('/dashboard/master-data/klasifikasi-usaha', [MasterDataController::class, 'klasifikasi'])->name('dashboard.klasifikasi');
    Route::post('/dashboard/klasifikasi-usaha-store', [MasterDataController::class, 'store_klasifikasi']);
    Route::get('/dashboard/klasifikasi-usaha-edit/{id}', [MasterDataController::class, 'edit_klasifikasi']);
    Route::post('/dashboard/klasifikasi-update/{id}', [MasterDataController::class, 'update_klasifikasi']);
    Route::delete('/dashboard/klasifikasi-usaha-delete/{id}', [MasterDataController::class, 'destroy_klasifikasi'])->name('dashboard.klasifikasi.destroy');
    
    Route::get('/dashboard/penawaran', [DashboardAdminController::class, 'penawaran'])->name('dashboard.penawaran');
    Route::post('/dashboard/penawaran/terima/{id}', [PenawaranController::class, 'terima_penawaran'])->name('dashboard.penawaran.terima');
    Route::post('/dashboard/penawaran/tolak/{id}', [PenawaranController::class, 'tolak_penawaran'])->name('dashboard.penawaran.tolak');

    Route::get('/dashboard/profile', [DashboardAdminController::class, 'profile'])->name('dashboard.profile');
    Route::post('/dashboard/profile/img-upd', [DashboardAdminController::class, 'updateImg'])->name('dashboard.profile.img');
    Route::post('/dashboard/profile/update', [DashboardAdminController::class, 'updProfile']);
    
    Route::get('/dashboard/superadmin/admin', [SuperAdminController::class, 'admin'])->name('dashboard.admin');
    Route::post('/dashboard/superadmin/admin/add', [SuperAdminController::class, 'add_admin'])->name('dashboard.admin.add');
    Route::delete('/dashboard/superadmin/admin-delete/{id}', [SuperAdminController::class, 'destroy_admin'])->name('dashboard.admin.destroy');

    Route::get('/dashboard/superadmin/mitra', [SuperAdminController::class, 'mitra'])->name('dashboard.superadmin.mitra');
    Route::post('/dashboard/superadmin/mitra/store', [SuperAdminController::class, 'add_mitra']);
    Route::delete('/dashboard/superadmin/mitra-delete/{id}', [SuperAdminController::class, 'destroy_mitra'])->name('dashboard.mitra.destroy');
});