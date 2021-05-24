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
            <a class="nav-link" href="<?php echo site_url('transaksi/index'); ?>"><img src="<?php echo base_url('assets/erigo/shop.png'); ?>" width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


    <section>
    <div class="container">
      <br><br>
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Daftar Kamar</h2>
          <p class="text-center"></p>
        </div>

      </div><br>

 
      <div class="row">

      <?php 
      $kamar = $this->db->get('kamar')->result();
      foreach ($kamar as $key) : ?>

        <div class="col-sm-3">
          <div class="card">
            <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/erigo/arival1.jpg'); ?>" alt="Card image cap"></a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $key->name ; ?></h5>
              <p class="card-text"><strike>Rp. <?php echo $key->harga ; ?></strike>
                <br><?php echo $key->fasilitas ; ?></p>
                <p><?php echo $key->status_sewa ; ?></p>
            </div>
          </div>
        </div>

      <?php endforeach ; ?>

      </div>
    </div>
  </section>









  </body>

</html>
  
