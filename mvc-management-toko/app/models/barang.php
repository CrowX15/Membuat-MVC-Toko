<?php

    class Barang
    {
        private $db;

        public function __construct($dbConnection)
        {
            $this->db = $dbConnection;
        }

        // Fuction yang berfungsi sebagai Penampil semua data dari table users databases
        public function TampilanBarang() 
        {
            $stmt = $this->db->prepare("SELECT * FROM barang");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getBarangById($kd_brg)
        {
            $stmt = $this->db->prepare("SELECT * FROM barang WHERE kd_brg = :kd_brg");
            $stmt->bindParam(":kd_brg", $kd_brg);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        // Function tambah barang
        public function insert($kd_brg, $nama_brg, $harga, $stok)
        {
             $stmt = $this -> db -> prepare("INSERT INTO barang VALUES(:kd_brg, :nama_brg, :harga, :stok)");
             $stmt -> bindParam(':kd_brg', $kd_brg);
             $stmt -> bindParam(':nama_brg', $nama_brg);
             $stmt -> bindParam(':harga', $harga);
             $stmt -> bindParam(':stok', $stok);
             $stmt -> execute();
        }

        // Function update barang
        public function update($kd_brg, $nama_brg, $harga, $stok)
        {
             $stmt = $this -> db -> prepare("UPDATE barang SET nama_brg = :nama_brg, harga = :harga, stok = :stok WHERE kd_brg = :kd_brg");
             $stmt -> bindParam(':kd_brg', $kd_brg);
             $stmt -> bindParam(':nama_brg', $nama_brg);
             $stmt -> bindParam(':harga', $harga);
             $stmt -> bindParam(':stok', $stok);
             $stmt -> execute();
        }

        // Function hapus barang
        public function delete($kd_brg)
        {
             $stmt = $this -> db -> prepare("DELETE FROM barang WHERE kd_brg = :kd_brg");
             $stmt -> bindParam(':kd_brg', $kd_brg);
             $stmt -> execute();
        }

    }
