<?php
require_once 'app/models/pelanggan.php';
class PelangganController
{
    private $db;
    private $pelangganModel;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
        $this->pelangganModel = new Pelanggan($dbConnection);
    }

    public function TampilanPelanggan()
    {
        $pelanggan = $this->pelangganModel->TampilanPelanggan();
        require_once 'app/views/dtPelanggan.php';
    }
    
    // Function tambah data pelanggan
    public function add()
    {
         // Jika data dari Form tambah sudah di isi
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              // Mengambil data dari form
              $id_plg     = $_POST['id_plg'];
              $nama_plg   = $_POST['nama_plg'];
              $alamat = $_POST['alamat'];
      
              // Memanggil metode insert pelanggan dari model
              $this -> pelangganModel -> insert($id_plg, $nama_plg, $alamat);
              header("Location: index.php?pindah=pelanggan");
         }
         // Memuat file Pelanggan_Tambah.php
         require_once 'app/views/TambahPelanggan.php';
    }
    
    // Function edit data pelanggan
    public function edit($id_plg)
    {
         // Mengambil data pelanggan tergantung id
         $pelanggan = $this -> pelangganModel -> getPelangganByid($id_plg);
    
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              // Mengambil data dari form
              $nama_plg   = $_POST['nama_plg'];
              $alamat = $_POST['alamat'];
      
              // Memanggil metode update pelanggan dari model
              $this -> pelangganModel -> update($id_plg, $nama_plg, $alamat);
              header("Location: index.php?pindah=pelanggan");
         }
         // Memuat file FormEditUser.php
         require_once 'app/views/EditPelanggan.php';
    }
    
    // Funtion delete pelanggan
    public function delete($id_plg)
    {
         $this -> pelangganModel -> delete($id_plg);
         header('location: index.php?pindah=pelanggan');
    }
}