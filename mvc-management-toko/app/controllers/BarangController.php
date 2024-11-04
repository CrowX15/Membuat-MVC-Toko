<?php
require_once 'app/models/barang.php';

    class BarangController
    {
        private $barangModel;

        public function __construct($dbConnection)
        {
            $this->barangModel = new Barang ($dbConnection);
        }

         // Function yang gunannya menampilkan Semua data Users pada databases

         public function TampilanBarang()
         {
             $barang = $this->barangModel->TampilanBarang();
             include 'app/views/dtbarang.php'; 
         }
     
         // Function menampilkan data barang berdasarkan kode
         public function show($kd_brg)
         {
              // Mengambil data dari model
              $barang = $this -> barangModel -> getBarangById($kd_brg);

              // Membuat view dan meneruskan data pengguna
              require_once 'app/views/View.php';
         }

         // Function tambah barang
         public function add()
         {
              // Jika data dari Form tambah sudah di isi
              if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                   // Mengambil data dari form
                   $kd_brg  = $_POST['kd_brg'];
                   $nama_brg  = $_POST['nama_brg'];
                   $harga = $_POST['harga'];
                   $stok  = $_POST['stok'];
           
                   // Memanggil metode update barang dari model
                   $this -> barangModel -> insert($kd_brg, $nama_brg, $harga, $stok);
                   header("Location: index.php?pindah=barang");
              }
              // Memuat file Barang_Tambah.php
              require_once 'app/views/TambahBarang.php';
         }

         // Function edit barang
         public function edit($kd_brg)
         {
              // Mengambil data barang tergantung kode
              $barang = $this -> barangModel -> getBarangById($kd_brg);

              if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                   // Mengambil data dari form
                   $nama_brg  = $_POST['nama_brg'];
                   $harga = $_POST['harga'];
                   $stok  = $_POST['stok'];
           
                   // Memanggil metode update barang dari model
                   $this -> barangModel -> update($kd_brg, $nama_brg, $harga, $stok);
                   header("Location: index.php?pindah=barang");
              }
              // Memuat file FormEditUser.php
              require_once 'app/views/EditBarang.php';
         }

         // Funtion delete barang
         public function delete($kd_brg)
         {
              $this -> barangModel -> delete($kd_brg);
              header('location: index.php?pindah=barang');
         }
    }