<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DanhMucController;

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
    return view('admin.template.master');
});

Route::get('/loai-san-pham/danh-sach', function () {
    return view('admin.loaisanpham.index');
});

// Route::get('/', function () {
//     return view('admin.template.master');
// });

Route::get('/danh-muc', [DanhMucController::class, 'index'])->name('danh-muc.index');
Route::get('/hello-class', [DanhMucController::class, 'xinChao'])->name('danh-muc.xin-chao');

Route::post('/them-danh-muc', [DanhMucController::class, 'store'])->name('danh-muc.store');
Route::get('/danh-muc/danh-sach', [DanhMucController::class, 'danhSach'])->name('danh-muc.danh-sach');
// danh-muc/them-danh-muc
// danh-muc/xu-ly-them-danh-muc
// danh-muc/chinh-sua
//category
Route::get('/category', [CategoryController::class, 'index'])->name('cat.index');
Route::post('/category/add', [CategoryController::class, 'store'])->name('cat.store');
// update: cập nhật
// edit: show record cần cập nhật
// delele: xóa record
