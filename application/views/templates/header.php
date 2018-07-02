<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css')?>">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/creative.min.css')?>">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

  </head>
   <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
        <p><img src="<?php echo base_url('assets/img/portfolio/polinema.png')?>" width="50px" heigh="50px"> <ba> </ba></p>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#kategori">Kategori</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#datatables">Data Tables</a>
            </li>
            
         
          </ul>
        </div>

         <?php if($this->session->userdata('logged_in') && $this->session->userdata('level') == 1) : ?>
      
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('Datatable/datatables_view')?>">Data User <span class="sr-only"></span></a>
      </li>
      <?php endif; ?>
    </ul>

    <?php if(!$this->session->userdata('logged_in')) : ?>
      <div>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="btn btn-outline-danger" href="<?php echo site_url('uer/register')?>">Register <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="btn btn-outline-success" href="<?php echo site_url('user/login')?>">Login <span class="sr-only"></span></a>
        </li>
      </ul>
      </div>
    <?php endif; ?>

    <?php if($this->session->userdata('logged_in')) : ?>
      <div>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="btn btn-outline-danger" href="<?php echo site_url('user/logout')?>">Logout <span class="sr-only"></span></a>
        </li>
      </ul>
      </div>
    <?php endif; ?>
      </div>
    </nav>
    
     <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>

      <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
            <br>
            <br>
            <br>
              <strong>Welcome To My Blog</strong>
            </h1>
            <hr>
          </div>
        
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">hallo selamat datang di blog saya, disini saya akan sedikit bercerita tentang suka duka menjadi mahasiswa informatika di polinema :) </p>
            <!--<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>-->
             <a class="btn btn-light btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>

        </div>
      </div>
    </header>
  </html>