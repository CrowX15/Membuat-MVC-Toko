<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
          <title>Management Barang Toko</title>
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
                                 <a class="nav-link ms-5 active" aria-current="page" href="index.php?pindah=barang">Barang</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link ms-3" href="index.php?pindah=pelanggan">Pelanggan</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link ms-3" href="index.php?pindah=transaksi">Transaksi</a>
                            </li>
                       </ul>
                  </div>
             </div>
        </nav>

          <div class="container">

               <div class="judul my-3">
                    <h2>Data List Barang</h2>
                    <hr>
               </div>

               <a href="index.php?&action_brg=tambah" class="btn btn-success btn-sm">Tambah Data</a>

               <table class="table  table-striped table-hover mt-2 mb-4" border="1">
                    <thead>
                         <tr>
                              <th scope="col" class="col-1">No</th>
                              <th scope="col" class="col-2">Kode Barang</th>
                              <th scope="col" class="col-2">Nama</th>
                              <th scope="col" class="col-2">Harga</th>
                              <th scope="col" class="col-2">Stok</th>
                              <th scope="col" class="col-2">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>

                         <!-- Code PHP untuk mengambil data dari table barang-->
                         <?php
                              if(!empty($barang)) {
                              $nomer = 1;
                              foreach ($barang as $barang) {
                         ?>

                         <tr>
                              <th scope="row"><?php echo $nomer++ ?></th>
                              <td><?php echo $barang['kd_brg'] ?></td>
                              <td><?php echo $barang['nama_brg'] ?></td>
                              <td><?php echo number_format($barang['harga'], 0, '.', '.') ?></td>
                              <td><?php echo $barang['stok'] ?></td>
                              <td>
                                   <a href="index.php?kode=<?php echo $barang['kd_brg']; ?>&action_brg=edit"   class="btn btn-warning btn-sm mx-1">Edit</a>
                                   <a href="index.php?kode=<?php echo $barang['kd_brg']; ?>&action_brg=hapus"  class="btn btn-danger  btn-sm mx-1" onclick="return confirm('Cek Kembali Sebelum dihapus ');" >Hapus</a>
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