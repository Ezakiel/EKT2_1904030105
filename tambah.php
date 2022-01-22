<?php
date_default_timezone_get();

require "function.php";

if(isset($_POST['tambah'])){
  if (tambah($_POST)>0){
    echo
    "<script>
    alert('data berhasil di tambah');
    document.location.href = 'index.php';
    </script>";
  }else{
    "<script>
    alert('data tidak berhasil di tambah');
    </script>";
  }

  }





?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="tema/bootstrap/css/bootstrap.min.css">
   <!-- font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
     <!-- Fontawesome JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <title>CRUD</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SPMB || KAMPUS KITA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      </ul>
      <div class="text-white" >
          <?php echo date("l, d-m-Y"); ?>
      </div>  
        </div>
      </div>
</nav>
<hr>
 <!-- sidebar end -->
 <div class="row mt-5 ">
          <div class="col-md-2 bg-dark">
        <!-- menu end -->
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fab fa-dashcube"></i> DASHBOARD</a>
        </li> <hr>
        <li class="nav-item">
            <a class="nav-link text-white" href="index.php"><i class="fas fa-users"></i> Calon Mahasiswa</a>
        </li> <hr>
        <li class="nav-item">
            <a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-plus"></i> Input CaMaBar</a>
        </li> <hr>
        <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a>
        </li><hr>
        <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-calendar-week"></i> Jadwal Kuliah</a>
        </li><hr>
        </ul>
        </div>
      <div class = "col-md-10">
          <!-- content end -->
          <h3><i class="fas fa-address-card"></i> Detail Calon Mahasiswa</h3>
         <hr>
         <form method="post" action="">
         
        <div class="mb-3">
            <label for="nama" class="form-label">Nama : </label>
            <input type="text" class="form-control" id="nama" placeholder="nama lengkap" name="nama" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat : </label>
            <input type="text" class="form-control" id="alamat" placeholder="alama lengkap" name="alamat" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin : </label>
            <input type="text" class="form-control" id="jenis kelamin" placeholder="nama lengkap" name="jenis_kelamin" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama : </label>
            <input type="text" class="form-control" id="agama" placeholder="agama" name="agama" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="sekolah_asal" class="form-label">Sekolah Asal : </label>
            <input type="text" class="form-control" id="sekolah_asal" placeholder="sekolah asal" name="sekolah_asal" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="foto_maba" class="form-label">foto :</label>
            <input type="text" class="form-control" id="foto_maba" placeholder="foto" name="foto_maba" required autocomplete="off">
        </div>
        

        <button type="submit" class="btn btn-primary" name = 'tambah'>Submit</button>
        </form>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>