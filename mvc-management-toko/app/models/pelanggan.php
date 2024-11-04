<?php
class Pelanggan
{
    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function TampilanPelanggan()
    {
        $stmt = $this->db->prepare("SELECT * FROM pelanggan");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPelangganById($id_plg)
    {
        $stmt = $this->db->prepare("SELECT * FROM pelanggan WHERE id_plg = :id_plg");
        $stmt->bindParam(":id_plg", $id_plg);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

         // Function insert pelanggan
         public function insert($id_plg, $nama_plg, $alamat)
         {
              $stmt = $this -> db -> prepare("INSERT INTO pelanggan VALUES(:id_plg,:nama_plg,:alamat)");
              $stmt -> bindParam(':id_plg', $id_plg);
              $stmt -> bindParam(':nama_plg', $nama_plg);
              $stmt -> bindParam(':alamat', $alamat);
              $stmt -> execute();
         }

         // Function update pelanggan
         public function update($id_plg, $nama_plg, $alamat)
         {
              $stmt = $this -> db -> prepare("UPDATE pelanggan SET nama_plg = :nama_plg, alamat = :alamat WHERE id_plg = :id_plg");
              $stmt -> bindParam(':id_plg', $id_plg);
              $stmt -> bindParam(':nama_plg', $nama_plg);
              $stmt -> bindParam(':alamat', $alamat);
              $stmt -> execute();
         }

         // Function hapus pelanggan
         public function delete($id_plg)
         {
              $stmt = $this -> db -> prepare("DELETE FROM pelanggan WHERE id_plg = :id_plg");
              $stmt -> bindParam(':id_plg', $id_plg);
              $stmt -> execute();
              return $stmt -> fetchAll(PDO::FETCH_ASSOC);
         }

}
?>
