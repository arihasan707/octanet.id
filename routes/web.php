<?php

use App\Models\Area;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Agen\BankController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Agen\PelangganController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Agen\PencairanDanaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\PermintaanPelangganBaruController;
use App\Http\Controllers\Admin\PermintaanPencairanDanaController;
use App\Http\Controllers\Agen\DashboardController as AgenDashboard;
use App\Http\Controllers\Admin\PelangganController as adminPelangganController;
use App\Http\Controllers\Agen\PaymentController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaArtikelController;
use App\Http\Controllers\KeagenanController;
use App\Http\Controllers\LayananController;

Route::middleware('guestOnly')->group(function () {
    Route::get('/', BerandaController::class)->name('beranda');

    Route::get('/tentang-kami', function () {
        return view('tentang-kami');
    })->name('tentang');

    Route::get('/layanan-dan-harga', [LayananController::class, 'index'])->name('price');

    Route::get('/berita-dan-artikel', [BeritaArtikelController::class, 'index'])->name('berita-artikel');

    Route::get('/info-keagenan', [KeagenanController::class, 'index'])->name('keagenan');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'agenMiddleware'])->group(function () {
    Route::get('/agen/dashboard', [AgenDashboard::class, 'index'])->name('agen.dashboard');
    //pelanggan
    Route::get('/agen/pelanggan', [PelangganController::class, 'index'])->name('agen.pelanggan');
    Route::post('/agen/pelanggan/cek-nik', [PelangganController::class, 'cekNik']);
    Route::post('/agen/pelanggan/store', [PelangganController::class, 'store'])->name('agen.pelanggan.store');
    Route::get('/agen/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('agen.pelanggan.edit');
    Route::put('/agen/pelanggan/{id}/update', [PelangganController::class, 'update'])->name('agen.pelanggan.update');
    Route::get('/agen/pelanggan/{id}/histori-pembayaran', [PelangganController::class, 'getHistori']);
    //pencairan dana
    Route::middleware('bankMiddleware')->get('/agen/pencairan-dana', [PencairanDanaController::class, 'index'])->name('agen.pencairanDana');
    Route::post('/agen/pencairan-dana/store', [PencairanDanaController::class, 'store'])->name('agen.pencairanDana.store');
    //bank transfer
    Route::get('/agen/bank/', [BankController::class, 'index'])->name('agen.bank');
    Route::post('/agen/bank/store', [BankController::class, 'store'])->name('agen.bank.store');
    Route::post('/agen/bank/{id}/update', [BankController::class, 'update'])->name('agen.bank.update');
    //history pembayaran
    // Route::get('agen/pelanggan/histori-pembayaran', [PaymentController::class])->name('agen.historiPembayaran');
});

Route::middleware(['auth', 'adminMiddleware'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    //produk
    Route::get('/admin/produk', [ProductController::class, 'index'])->name('admin.product');
    Route::post('/admin/produk/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::post('/admin/produk/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::delete('/admin/produk/{id}/delete', [ProductController::class, 'destroy'])->name('admin.product.delete');
    //kategori produk
    Route::get('/admin/produk/kategori', [KategoriController::class, 'index'])->name('admin.product.kategori');
    Route::post('/admin/produk/kategori/store', [KategoriController::class, 'store'])->name('admin.product.kategori.store');
    //area coverage
    Route::get('/admin/area', [AreaController::class, 'index'])->name('admin.area');
    Route::post('/admin/area/store', [AreaController::class, 'store'])->name('admin.area.store');
    Route::post('/admin/area/update', [AreaController::class, 'update'])->name('admin.area.update');
    //permintaan pelanggan baru
    Route::get('/admin/req/pelanggan-baru', [PermintaanPelangganBaruController::class, 'index'])->name('admin.req.pelanggan');
    Route::post('/admin/req/pelanggan-baru/{id}/update', [PermintaanPelangganBaruController::class, 'update'])->name('admin.req.pelanggan.update');
    //permintaan pencairan dana
    Route::get('/admin/req/pencairan-dana', [PermintaanPencairanDanaController::class, 'index'])->name('admin.req.pencairan');
    Route::post('/admin/req/pencairan-dana/{pencairan}/update', [PermintaanPencairanDanaController::class, 'update'])->name('admin.req.pencairan.update');
    //pelanggan
    Route::get('/admin/pelanggan', [adminPelangganController::class, 'index'])->name('admin.pelanggan');
    Route::post('/admin/pelanggan/{id}/update', [adminPelangganController::class, 'update'])->name('admin.pelanggan.update');
    Route::get('/admin/download/{filename}', [adminPelangganController::class, 'download'])->name('admin.download');
    //banner
    Route::get('/admin/banner', [BannerController::class, 'index'])->name('admin.banner');
    Route::post('/admin/banner/store', [BannerController::class, 'store'])->name('admin.banner.store');
    Route::delete('/admin/banner/{id}/delete', [BannerController::class, 'destroy']);
});

require __DIR__ . '/auth.php';
