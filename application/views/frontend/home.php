<!DOCTYPE html>
<html lang="en">

<head>
  <title>ApKosan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="shorcut icon" type="text/css" href="https://cf.shopee.co.id/file/59510afc4eaa2bc01551e0a751376ac5">
  <link rel="stylesheet" href="style.css">
  <!-- my font -->
  <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
  <!-- my font -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
  .navbar-dark .navbar-nav .nav-link {
  color: rgb(255, 255, 255);
  }

  .nav-link:hover {
  color: #00BCFF; 
  text-decoration: none; 
  font-weight: none;
  animation-delay: 2s;
  }

  .ts__05 {
   transition: all .5s;
  }

  .w__100 {
   width: 100%;
  }
  </style>

</head>

<body>
   <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" class="text-white" style="position: relative; height: 62px; background-color:#00B1B8">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url('front'); ?>">
        <img src="<?php echo base_url('assets/erigo/koskuy.png'); ?>" width="66" height="40" class="d-inline-block align-top" alt="" style="margin-left: -57px;">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 180px; font-size: 12px;">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-left: 20px;">
            <a class="nav-link" href="<?php echo site_url('front'); ?>">Home</a>
          </li>
          <li class="nav-item" style="margin-left: 20px;">  
            <a class="nav-link" href="<?php echo site_url('front/kamar'); ?>">Kamar</a>
          </li>
        </ul>
      </div>
      <div style="margin-left: 130px;">
        <ul class="navbar-nav mx-auto simbol">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('auth/login'); ?>"><img src="<?php echo base_url('assets/erigo/user.png'); ?>" width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="<?php echo base_url('assets/erigo/like.png'); ?>"width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('C_Keranjang'); ?>"><img src="<?php echo base_url('assets/erigo/shop.png'); ?>" width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- slide gambar -->
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/erigo/slide1.jpg'); ?>" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <form class="form-inline md-form mr-auto mb-4" style="margin:160px; padding-bottom: 150px;" > <!--SEARCHING-->
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 600px; height: 50px;">
            </form>
            <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit" style="position: relative; top:-160px; padding-left: 20px; padding-right: 20px;">Search</button>
          </div>
      </div>
  </div>
  <!-- akhir slide gambar -->
  <!-- gambar zoom  -->
  <section class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-offset-1">
          <a href="<?php echo site_url('front/kamar') ?>" id="kotak 1" class="zoom">
            <img src="<?php echo base_url('assets/erigo/kotak1.jpg'); ?>" width="100%" height="96%">
          </a>
        </div>

        <div class="col-sm-6">
          <a href="<?php echo site_url('front/kamar') ?>" class="zoom">
            <img src="<?php echo base_url('assets/erigo/kotak2.jpg'); ?>" width="90%" height="50%">
          </a>

          <div class="mt-4">
            <a href="<?php echo site_url('front/kamar') ?>" class="zoom">
              <img src="<?php echo base_url('assets/erigo/kotak3.jpg'); ?>" width="90%" height="50%">
            </a>

          </div>
        </div>

  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">------NEW ARIVAL-----</h2>
          <p class="text-center">KOSAN TERBARU MINGGU INI</p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/erigo/arival1.jpg'); ?>" alt="Card image cap"></a>
            <div class="card-body">
              <h5 class="card-title">KOSAN YOIIIII</h5>
              <p class="card-text"><strike>Rp 8.000.000/tahun</strike><br>Rp 7.500.000/tahun</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/erigo/arival2.jpg'); ?>" alt="Card image cap"></a>
            <div class="card-body">
              <h5 class="card-title">KOSAN LUCKNUT</h5>
              <p class="card-text"><strike>Rp 8.000.000/tahun</strike><br>Rp 7.500.000/tahun</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/erigo/arival3.jpg'); ?>" alt="Card image cap"></a>
            <div class="card-body">
              <h5 class="card-title">KOSAN GEMING</h5>
              <p class="card-text"><strike>Rp 8.000.000/tahun</strike><br>Rp 7.500.000/tahun</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/erigo/arival4.jpg'); ?>" alt="Card image cap"></a>
            <div class="card-body">
              <h5 class="card-title">KOSAN HIYAHIYA</h5>
              <p class="card-text"><strike>Rp 8.000.000/tahun</strike><br>Rp 7.500.000/tahun</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- akhir new arival -->
  <!-- arival 2 -->
  <section class="mt-5">
    <div class="row">
      <div class="col-sm-6">
        <a href="#"><img class="w__100 ts__05" src="<?php echo base_url('assets/erigo/arival5.jpg'); ?>" alt="FOOTWEAR" width="90%" height="100%"></a>
      </div>
      <div class="col-sm-6">
        <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/erigo/arival6.jpg'); ?>"></a>
      </div>
    </div>
  </section>
  <!-- akhir arival 2 -->
  <!--SHOP BY CATEGORY -->
  <section class="mt-5 kategori">
    <div class="container mt-5 ">
      <h2 class="text-center shop">----Kategori Kosan----</h2>
      <!-- slide 1 -->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-3"><img src="<?php echo base_url('assets/erigo/shop1.JPG'); ?>" class="d-block w-100" alt="..."></div>
              <div class="col-3"><img src="<?php echo base_url('assets/erigo/shop2.JPG'); ?>" class="d-block w-100" alt="..."></div>
              <div class="col-3"><img src="<?php echo base_url('assets/erigo/shop3.JPG'); ?>" class="d-block w-100" alt="..."></div>
              <div class="col-3"><img src="<?php echo base_url('assets/erigo/shop4.JPG'); ?>" class="d-block w-100" alt="..."></div>
            </div>
          </div>
          <!-- slide akhir -->
          <!-- slide 2 -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-3"><img src="<?php echo base_url('assets/erigo/shop5.JPG'); ?>" class="d-block w-100" alt="..."></div>
              <div class="col-3"><img src="<?php echo base_url('assets/erigo/shop6.JPG'); ?>" class="d-block w-100" alt="..."></div>
              <div class="col-3"><img src="<?php echo base_url('assets/erigo/shop7.JPG'); ?>" class="d-block w-100" alt="..."></div>
              <div class="col-3"><img src="<?php echo base_url('assets/erigo/shop8.JPG'); ?>" class="d-block w-100" alt="..."></div>
            </div>
          </div>
          <!-- akhir slide 2 -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <!-- akhir SHOP BY CATEGORY -->
  <!-- bagian akhir -->
  <section class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h2>BEBAS PILIH KURIR</h2>
          <p>Bisa pilih kurir barang sesukamu!</p>
        </div>
        <div class="col-sm-3">
          <h2>SUPPORT 24/7</h2>
          <p>Bisa diakses 24/7 sesukamu!</p>
        </div>
        <div class="col-sm-3">
          <h2>BANYAK DISKON</h2>
          <p>Banyak diskon yang diupdate!</p>
        </div>
        <div class="col-sm-3">
          <h2>100% AMAN</h2>
          <p>Pembayaran dikontrol oleh admin</p>
        </div>

      </div>
    </div>
  </section>
  <!-- end akhir -->
</body>

</html>