<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route default ke dashboard home
$routes->get('/', 'Dashboard::index');

// Route untuk halaman jadwal
$routes->get('jadwal', 'Dashboard::jadwal');

// Route untuk halaman beli tiket
$routes->get('beli', 'Dashboard::beli');

// Route untuk halaman login (GET dan POST)
$routes->get('login', 'Auth::login');           // Menampilkan halaman login
$routes->post('login', 'Auth::process');        // Memproses data login

// Route untuk logout
$routes->get('logout', 'Auth::logout');         // Proses logout

// Route untuk halaman registrasi (GET dan POST)
$routes->get('register', 'Auth::register');     // Menampilkan halaman registrasi
$routes->post('register', 'Auth::registerProcess'); // Memproses data registrasi

// Route untuk halaman dashboard admin
$routes->get('admin', 'AdminController::index', ['filter' => 'authAdmin']); // Dashboard admin
$routes->get('admin/kelola-user', 'AdminController::kelolaUser', ['filter' => 'authAdmin']); // Kelola User
$routes->get('admin/jadwal', 'AdminController::jadwal', ['filter' => 'authAdmin']); // Jadwal Pertandingan
$routes->get('admin/status-pemesanan', 'AdminController::statusPemesanan', ['filter' => 'authAdmin']); // Status Pemesanan
$routes->get('admin/konfirmasi-pesanan', 'AdminController::konfirmasiPesanan', ['filter' => 'authAdmin']); // Konfirmasi Pesanan
$routes->get('admin/laporan-penjualan', 'AdminController::laporanPenjualan', ['filter' => 'authAdmin']); // Laporan Penjualan

// Route untuk halaman dashboard customer
$routes->get('customer', 'CustomerController::index', ['filter' => 'authCustomer']); // Dashboard customer
$routes->get('customer/jadwal', 'CustomerController::jadwal', ['filter' => 'authCustomer']); // Melihat Jadwal Pertandingan
$routes->post('customer/pemesanan', 'CustomerController::pemesanan', ['filter' => 'authCustomer']); // Pemesanan Tiket
$routes->post('customer/upload-bukti', 'CustomerController::uploadBukti', ['filter' => 'authCustomer']); // Upload Bukti Pembayaran
