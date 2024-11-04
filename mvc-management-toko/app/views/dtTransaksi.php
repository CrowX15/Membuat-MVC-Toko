<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
          <title>Management Transaksi Toko</title>
     </head>
     <body>

          <nav class="navbar navbar-expand-lg navbar-dark bg-success" id="mainNav">
               <div class="container container-fluid">
                    <a class="navbar-brand fw-bold" href="index.php">HOME</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav">
                         <li class="nav-item">
                              <a class="nav-link ms-5" aria-current="page" href="index.php?pindah=barang">Barang</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link ms-3" href="index.php?pindah=pelanggan">Pelanggan</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link ms-3 active" href="index.php?pindah=transaksi">Transaksi</a>
                         </li>
                         </li>
                         </ul>
                    </div>
               </div>
          </nav>

          <div class="container">

               <div class="judul my-3">
                    <h2>Data List Transaksi</h2>
               </div>

               <a href="index.php?&action_trs=tambah" class="btn btn-success btn-sm">Tambah Data</a>

               <table class="table  table-striped table-hover mt-2 mb-4" border="1">
                    <thead>
                         <tr>
                              <th scope="col" class="col-1">No</th>
                              <th scope="col" class="col-2">Kode Barang</th>
                              <th scope="col" class="col-2">ID Pelanggan</th>
                              <th scope="col" class="col-1">Jumlah</th>
                              <th scope="col" class="col-2">Bayar</th>
                              <th scope="col" class="col-2">Tanggal</th>
                              <th scope="col" class="col-2">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>

                         <?php
                              if(!empty($transaksi)) {
                              $no = 1;
                              foreach ($transaksi as $transaksi) {
                         ?>

                         <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $transaksi['kd_brg'] ?></td>
                              <td><?php echo $transaksi['id_plg'] ?></td>
                              <td><?php echo $transaksi['jumlah'] ?></td>
                              <td><?php echo number_format($transaksi['bayar'], 0, '.', '.')?></td>
                              <td><?php echo $transaksi['tgl_trans'] ?></td>
                              <td>
                                   <a href="index.php?id=<?php echo $transaksi['id_trans']; ?>&action_trs=edit"   class="btn btn-warning btn-sm mx-1">Edit</a>
                                   <a href="index.php?id=<?php echo $transaksi['id_trans']; ?>&action_trs=hapus"  class="btn btn-danger  btn-sm mx-1" onclick="return confirm('Confirmasi : \n Periksa Data Kembali');" >Hapus</a>
                              </td>
                         </tr>

                         <?php
                              }
                          }
                         ?>

                    </tbody>
               </table>
          </div>
          
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
          crossorigin="anonymous"></script>

     </body>
</html>