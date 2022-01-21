<?php
date_default_timezone_get();

require "function.php";
$camaba = query("SELECT * FROM calon_mhs");
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
            <a class="nav-link active" aria-current="page" href="in"><i class="fab fa-dashcube"></i> DASHBOARD</a>
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
          <h3><i class="fas fa-address-card"></i> Daftar Calon Mahasiswa</h3>
          <table class="table  table-dark table-hover table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Foto Maba</th>
              <th scope="col">OPSI</th>

            </tr>
          </thead>
          <tbody>
              <?php $no=1;?>
            <?php foreach ($camaba as $cmb) : ?>
           
            <tr >
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $cmb['id']; ?></td>
              <td><?php echo $cmb['nama']; ?></td>
              <td><img src="image/<?php echo $cmb['foto maba']; ?> " width = 75  alt="" srcset=""></td>
              <td><a href="detail.php?id=<?= $cmb['id']; ?>" class ="btn btn-warning" role="button">detail</a></td>
            </tr >
            <?php $no++ ?>
            <?php endforeach  ?>
          </tbody>
        </table>

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