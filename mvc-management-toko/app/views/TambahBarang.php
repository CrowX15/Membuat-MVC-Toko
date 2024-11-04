<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
          <title>Input Barang</title>        
     </head>
     <body>
          
          <div class="container">
               <div class="judul my-3">
                    <h2>Masukan Data Barang</h2>
                    <hr>
               </div>

               <form method="POST" class ="my-2">
                    
                    <div class="mb-3">
                         <label for="kd_brg" class="form-label fw-bold">Kode Barang</label>
                         <input type="text"  class="form-control" id="kd_brg" name="kd_brg" required>
                    </div>
                    <div class="mb-3">
                         <label for="nama_brg" class="form-label fw-bold">Nama Barang</label>
                         <input type="text"  class="form-control" id="nama_brg" name="nama_brg" required>
                    </div>                   
                    <div class="mb-3">
                         <label for="harga" class="form-label fw-bold">Harga</label>
                         <input type="number"  class="form-control" id="harga" name="harga" required>
                    </div>                   
                    <div class="mb-3">
                         <label for="stok" class="form-label fw-bold">Stok</label>
                         <input type="number"  class="form-control" id="stok" name="stok" required>
                    </div>                   

                    <div class="mb-4">
                         <a href="index.php?pindah=barang" class="btn btn-info btn-sm">Kembali</a>
                         <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Periksa Sebelum Mengirim !!');">Tambah</button>
                    </div>
               </form>
          </div>
          
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
          crossorigin="anonymous"></script>

     </body>
</html>