<?php

session_start();

    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- styleku -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <!-- navbar -->
<nav class="navbar navbar-expand-lg  mx-4">
<div class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <img src="" alt="vokamart">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto"> <!-- Menggunakan ms-auto untuk meratakan ke kanan -->
        <li class="nav-item mx-4">
          <a class="nav-link" href="produk.php">Produk Kami</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="akun.php">Akun</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">Keranjang</a>
        </li>
      </ul>
    </div>
</div>
</nav>
<!-- akhir navbar -->



<div class="card mb-3 border-0 mx-auto" style="max-width: 1140px;">
  <div class="row">
    <div class="offset-md-2 col-md-3 col-img">
    <div class="foto">
                <img src="../images/Frame 16.png" alt="" >
               
            </div>
    </div>
    <div class="col">
      <div class="card-body">
      <div class="boxs">
      <form action="#" method="POST">
                <div class="form-akun">
                    <div class="inputBox">
                        <span>Email</span>
                        <p>nama email</p>
                    </div>
                    <div class="inputBox">
                        <span>Username</span>
                        <p>nama username</p>
                    </div>
                    <div class="inputBox">
                        <span>Alamat <a href="#">ubah</a>
                        </span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                    </div>
                    <div class="inputBox">
                        <span>No.Hp</span>
                        <p>no hp</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div class="inputBx" >
                            <input type="submit" value="Daftar Transaksi" name="">
                        </div>
                        <div class="inputBox " >
                            <input type="submit" value="Ubah Profil" name="">
                        </div>
                    </div>
                </div>
            </form>
      </div>
      </div>
    </div>
  </div>
</div>




<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>