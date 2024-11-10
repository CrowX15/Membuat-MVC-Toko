<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">

          <title>Input Transaksi</title>
          
     </head>
     <body>
          
          <div class="container">
               <div class="judul my-3">
                    <h2>Masukan Data Trankasi Baru</h2>
                    <hr>
               </div>

               <form method="POST" class ="my-2">
                    
                    <div class="mb-3">
                         <label for="kd_brg" class="form-label fw-bold">Kode Barang</label>
                         <input type="text"  class="form-control" id="kd_brg" name="kd_brg" required>
                    </div>
                    <div class="mb-3">
                         <label for="id_pelanggan" class="form-label fw-bold">ID Pelanggan</label>
                         <input type="text"  class="form-control" id="id_plg" name="id_plg" required>
                    </div>                   
                    <div class="mb-3">
                         <label for="jumlah" class="form-label fw-bold">Jumlah</label>
                         <input type="number"  class="form-control" id="jumlah" name="jumlah" required>
                    </div>                

                    <div class="mb-4">
                         <a href="index.php?pindah=transaksi"      class="btn btn-info btn-sm">Kembali</a>
                         <button type="submit"    class="btn btn-success btn-sm" onclick="return confirm('Pastikan Data Sudah Sesuai Dan Tudak Redudansi !!');">Tambah</button>
                    </div>
               </form>
          </div>
          
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
          crossorigin="anonymous"></script>

     </body>
</html>