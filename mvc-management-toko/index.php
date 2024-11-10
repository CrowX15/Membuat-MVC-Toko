<?php

require_once 'config/database.php';
require_once 'app/controllers/BarangController.php';
require_once 'app/controllers/PelangganControllers.php';
require_once 'app/controllers/TransaksiControllers.php';

// Koneksi ke database
$dbConnection = getDBConnection();

// Fungsi untuk mengambil parameter URL dengan default value
function getParam($key, $default = '') 
{
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}

// Membuat instance Controller
$BarangController = new BarangController($dbConnection);
$PelangganControllers = new PelangganController($dbConnection);
$TransaksiControllers = new TransaksiController($dbConnection);

// Mendapatkan parameter dari URL
$pindah     = getParam('pindah');
$action_brg = getParam('action_brg');
$action_plg = getParam('action_plg');
$action_trs = getParam('action_trs');

// Menangani aksi barang
if ($action_brg == 'tambah') 
{
    $BarangController->add();
    exit();  // Hentikan eksekusi untuk mencegah tampilan ganda
} 
else if ($action_brg == 'edit') 
{
    $kd_brg = getParam('kd_brg');
    $BarangController->edit($kd_brg);
    exit();
} 
else if ($action_brg == 'hapus') 
{
    $kd_brg = getParam('kd_brg');
    $BarangController->delete($kd_brg);
    exit();
}

// Menangani aksi pelanggan
if ($action_plg == 'tambah') 
{
    $PelangganControllers->add();
    exit();
} 
else if ($action_plg == 'edit') 
{
    $id_plg = getParam('id_plg');
    $PelangganControllers->edit($id_plg);
    exit();
} 
else if ($action_plg == 'hapus') 
{
    $id_plg = getParam('id_plg');
    $PelangganControllers->delete($id_plg);
    exit();
}

// Menangani aksi transaksi
if ($action_trs == 'tambah') 
{
    $TransaksiControllers->add();
    exit();
} 
else if ($action_trs == 'edit') 
{
    $id_trans = getParam('id_trans');
    $TransaksiControllers->edit($id_trans);
    exit();
} 
else if ($action_trs == 'hapus') 
{
    $id_trans = getParam('id_trans');
    $TransaksiControllers->delete($id_trans);
    exit();
}

// Menentukan halaman utama berdasarkan parameter 'pindah'
if ($pindah == 'barang') 
{
    $BarangController->TampilanBarang();
} 
else if ($pindah == 'pelanggan') 
{
    $PelangganControllers->TampilanPelanggan();
} 
else if ($pindah == 'transaksi') 
{
    $TransaksiControllers->TampilanTransaksi();
} 
else 
{
    require_once 'app/views/home.php';
}
?>
