<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

$routes->post('/submit', 'Home::submit');

$routes->get('images/(:segment)', 'Home::image/$1');

$routes->group('admin', ['filter' => ['group:admin']], function ($routes) {
    $routes->get('', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');

    // Daftar Barang Routes
    $routes->get('daftar-barang', 'AdminController::daftarBarang');
    $routes->get('daftar-barang/tambah', 'AdminController::daftarBarangTambah');
    $routes->post('daftar-barang/create', 'AdminController::createBarang');
    
    // Edit Barang Routes
    $routes->get('daftar-barang/edit/(:num)', 'AdminController::daftarBarangEdit/$1');
    $routes->post('daftar-barang/change/(:num)', 'AdminController::changeBarang/$1');

    // Hapus Barang Routes
    $routes->get('daftar-barang/hapus/(:num)', 'AdminController::hapusBarang/$1');
    $routes->post('daftar-barang/hapus/(:num)', 'AdminController::hapusBarang/$1');

    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
    $routes->get('transaksi/hapus', 'AdminController::transaksiHapus');

    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('pelanggan/hapus', 'AdminController::pelangganHapus');
});

service('auth')->routes($routes);
