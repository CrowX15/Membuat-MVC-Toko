<?php
require_once 'app/models/Transaksi.php';

     class TransaksiController
     {
          private $transaksiModel;

          public function __construct($dbConnection)
          {
               $this -> transaksiModel = new Transaksi($dbConnection);
          }

          // Function menampilkan semua data kode
          public function TampilanTransaksi()
          {
               $transaksi = $this -> transaksiModel -> TampilanTransaksi();
               require_once 'app/views/dtTransaksi.php';
          }

          // Function tambah data pelanggan
          public function add()
          {
               // Jika data dari Form tambah sudah di isi
               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Mengambil data dari form
                    $kd_brg   = $_POST['kd_brg'];
                    $id_plg     = $_POST['id_plg'];
                    $jumlah   = $_POST['jumlah'];
            
                    // Memanggil metode insert pelanggan dari model
                    $this -> transaksiModel -> insert($kd_brg, $id_plg, $jumlah);
                    header("Location: index.php?pindah=transaksi");
               }

               require_once 'app/views/TambahTransaksi.php';
          }

          // Function edit data pelanggan
          public function edit($id_trans)
          {
               // Mengambil data pelanggan tergantung id
               $transaksi = $this -> transaksiModel -> getTransaksiById($id_trans);

               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Mengambil data dari form
                    $kd_brg   = $_POST['kd_brg'];
                    $id_plg     = $_POST['id_plg'];
                    $jumlah   = $_POST['jumlah'];
            
                    // Memanggil metode update pelanggan dari model
                    $this -> transaksiModel -> update($id_trans, $kd_brg, $id_plg, $jumlah);
                    header("Location: index.php?pindah=transaksi");
               }
               // Memuat file FormEditUser.php
               require_once 'app/views/EditTransaksi.php';
          }

          // Funtion delete pelanggan
          public function delete($id_trans)
          {
               error_log("Aksi delete dijalankan untuk ID Transaksi: " . $id_trans); //
               $this -> transaksiModel -> delete($id_trans);
               header('location: index.php?pindah=transaksi');
          }

     }

?>