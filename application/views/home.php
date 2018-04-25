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
    
   
    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css')?>">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/creative.min.css')?>">

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
            
         
          </ul>
        </div>
      </div>
    </nav>

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

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">My Profile</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"> 
            <p>Nama       : Fadila Setyabudi </p>
            <p>Tempat Tgl Lahir : Malang 01 Agustus 1998</p>
            <p>Alamat     : Kepanjen Malang </p>
            <p>Jurusan      : Informatika </p>
            <p>Prodi      : D3 Management Informatika </p></p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#blog">Go My Blog</a>
          </div>
        </div>
      </div>
    </section>

    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">My Blog</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">




<!--<?php foreach ($artikel as $key): ?> 
               

            
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                        <div class="tm-content-box">
                             <h3 class="tm-margin-b-20 tm-gold-text"> <?php echo $key->judul ?></h3>
                                <a href="<?php echo base_url(). 'home/detail/'. $key->id ?>"  style="color: black;">
                                    <img src="<?php echo base_url (). 'Upload/'. $key->image?>" alt="Image" class="tm-margin-b-30 img-fluid"   width="250" height="250">
                                        <br>
                                       <!-- <p class="tm-ma rgin-b-20"><?php echo $key->ctn ?></p> -->
                                        <!--<a href="<?php echo base_url(). 'home/detail/'. $key->id ?>" class="tm-btn text-uppercase">Read More</a>    
                                        <br> 
                                        <br>    
                <a href="<?php echo site_url('home/Form_Edit/'. $key->id); ?>" class="btn btn-sm btn-danger">edit</a>
                <!--<a href='blog/edit/<?php echo $key->id ?>' class='btn btn-sm btn-danger'>edit</a> -->
                <!--<a href="<?php echo base_url(). 'home/delete/' . $key->id ?>" class="btn btn-sm btn-danger">Hapus</a>

                         </div>
                     </div>    
               <?php endforeach ?> -->





            <a href="<?php echo site_url().'Home/detail/1'?>">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Pemrograman</h3>
              <p class="text-muted mb-0"></p>
               <a href="<?php echo site_url('home/tambah'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">insert</a>
                <a href="<?php echo site_url('home/delete'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">Delete</a>
                 <a href="<?php echo site_url('home/update'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">Update</a>
            </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Web</h3>
              <p class="text-muted mb-0"></p>
               <a href="<?php echo site_url('home'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">insert</a>
                <a href="<?php echo site_url('home'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">Delete</a>
                 <a href="<?php echo site_url('home'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">Update</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Basisdata</h3>
              <p class="text-muted mb-0"></p>
               <a href="<?php echo site_url('home'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">insert</a>
                <a href="<?php echo site_url('home'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">Delete</a>
                 <a href="<?php echo site_url('home'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">Update</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Jaringan</h3>
              <p class="text-muted mb-0"></p>
               <a href="<?php echo site_url('home'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">insert</a>
                <a href="<?php echo site_url('home'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">Delete</a>
                 <a href="<?php echo site_url('home'); ?>" class="btn btn-light btn-xl js-scroll-trigger ">Update</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
      
        
                 
    </section>

  

   

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/scrollreveal/scrollreveal.min.js"></script>
    <script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/creative.min.js"></script>

  </body>

</html>
