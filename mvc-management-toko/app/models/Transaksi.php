<?php

     class Transaksi {

          private $db;

          public function __construct($dbConnection)
          {
               $this -> db = $dbConnection;
          }

          // Function tampil data
          public function TampilanTransaksi()
          {
               $stmt = $this -> db -> prepare("SELECT * FROM transaksi");
               $stmt -> execute();
               return $stmt -> fetchAll(PDO::FETCH_ASSOC);
          }

          // Function menampilkan data berdasarkan id Transaksi
          public function getTransaksiById($id_trans)
          {
               $stmt = $this -> db -> prepare("SELECT * FROM transaksi WHERE id_trans = :id_trans");
               $stmt -> bindParam(':id_trans', $id_trans);
               $stmt -> execute();
               return $stmt -> fetch(PDO::FETCH_ASSOC);
          }

          // Function insert transaksi
          public function insert($kd_brg, $id_plg, $jumlah)
          {
               $stmt = $this -> db -> prepare("INSERT INTO transaksi VALUES(NULL, :kd_brg, :Kd_brg, :jumlah, jumlah * (SELECT harga FROM barang WHERE barang.kd_brg = :kode_brg), NOW())");
               $stmt -> bindParam(':kd_brg', $kd_brg);
               $stmt -> bindParam(':id_plg', $id_plg);
               $stmt -> bindParam(':jumlah', $jumlah);
               $stmt -> execute();
          }

          // Function update transaksi
          public function update($id_trans, $kd_brg, $id_plg, $jumlah)
          {
               $stmt = $this -> db -> prepare("UPDATE transaksi SET kode_barang = :kode, id_pelanggan = :id_p, jumlah = :jumlah, bayar = jumlah * (SELECT harga FROM barang WHERE barang.kode = :kode), tanggal = NOW() WHERE id_transaksi = :id");
               $stmt -> bindParam(':id_trans', $id_trans);
               $stmt -> bindParam(':kd_brg', $kd_brg);
               $stmt -> bindParam(':id_plg', $id_plg);
               $stmt -> bindParam(':jumlah', $jumlah);
               $stmt -> execute();
          }

          // Function hapus pelanggan
          public function delete($id_trans)
          {
               $stmt = $this -> db -> prepare("DELETE FROM transaksi WHERE id_trans = :id_trans");
               $stmt -> bindParam(':id_trans', $id_trans);
               $stmt -> execute();
               return $stmt -> fetchAll(PDO::FETCH_ASSOC);
          }

     }

?>