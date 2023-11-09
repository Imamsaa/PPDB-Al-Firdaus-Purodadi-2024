<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/daftar', 'Daftar::index');
$routes->post('/daftar/siswa', 'Daftar::daftar');

$routes->get('/seleksi', 'Seleksi::index');
$routes->get('/info', 'Info::index');
$routes->get('/kontak', 'Kontak::index');
$routes->get('/success', 'Success::index');
$routes->get('/upload/(:segment)', 'Upload::index/$1');
$routes->post('/bukti', 'Upload::upload');

$routes->get('/sekolah', 'Admin\Dashboard::index');
$routes->get('/sekolah/siswa', 'Admin\Siswa::index');
$routes->post('/sekolah/siswa/edit', 'Admin\Siswa::setEdit');
$routes->get('/sekolah/siswa/(:segment)', 'Admin\Siswa::edit/$1');
$routes->get('/sekolah/cetaksiswa/(:segment)', 'Admin\Siswa::cetak/$1');

$routes->get('/sekolah/sekolah', 'Admin\Sekolah::index');
$routes->get('/sekolah/upload', 'Admin\Upload::setting');

$routes->get('/sekolah/program', 'Admin\Program::index');
$routes->get('/sekolah/program/tambah', 'Admin\Program::tambah');

$routes->get('/sekolah/info', 'Admin\Info::index');
$routes->get('/sekolah/info/tambah', 'Admin\Info::tambah');

$routes->get('/sekolah/pengumuman', 'Admin\Pengumuman::index');
$routes->get('/sekolah/pengumuman/tambah', 'Admin\Pengumuman::tambah');

$routes->get('/sekolah/alumni', 'Admin\Alumni::index');
$routes->get('/sekolah/alumni/tambah', 'Admin\Alumni::tambah');

$routes->get('/sekolah/gallery', 'Admin\Gallery::index');
$routes->get('/sekolah/gallery/tambah', 'Admin\Gallery::tambah');

$routes->get('/sekolah/laporan', 'Admin\Laporan::index');

$routes->get('/sekolah/panitia', 'Admin\Panitia::index');
$routes->get('/sekolah/panitia/tambah', 'Admin\Panitia::tambah');

$routes->get('/sekolah/pesan', 'Admin\Pesan::index');

$routes->get('/sekolah/pembayaran', 'Admin\Pembayaran::index');
$routes->post('/sekolah/pembayaran/acc', 'Admin\Pembayaran::acc');
$routes->DELETE('/sekolah/pembayaran/delete/(:segment)', 'Admin\Pembayaran::delete/$1');

$routes->get('/sekolah/whastapp', 'Admin\Whastapp::index');

$routes->get('/sekolah/akun', 'Admin\Akun::index');
$routes->get('/sekolah/akun/(:segment)', 'Admin\Akun::edit');