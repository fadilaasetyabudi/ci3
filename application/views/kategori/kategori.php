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
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#kategori">Kategori</a>
            </li>
            
         
          </ul>
        </div>
      </div>
    </nav>
    <section class="tm-section">
    <?php if( !empty($categories) ) : ?>
            <div class="container-fluid">
                <a href="<?php echo site_url('kategori/create/'); ?>" class="tm-btn text-uppercase">Tambah Kategori</a>
                <br>
                <br>
                <br>
                
                <div class="row"> 

                    <?php
                       
                        foreach ($categories as $key) :
                    ?>
               
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                        <div class="tm-content-box">
                             <h3 class="tm-margin-b-20 tm-gold-text"> <?php echo $key->cat_name ?></h3>
                                
                                   
                                       
                <a href="<?php echo base_url('kategori/artikel/'.$key->cat_id) ?>" class="btn btn-success">Lihat Artikel</a>    
                                        <br> 
                                        <br>    
                <a href="<?php echo base_url(). 'kategori/edit/' . $key->cat_id ?>" class="btn btn-sm btn-danger">edit</a>
                <!--<a href='blog/edit/<?php echo $key->id ?>' class='btn btn-sm btn-danger'>edit</a> -->
                <a href="<?php echo base_url(). 'kategori/delete/' . $key->cat_id ?>" class="btn btn-sm btn-danger">Hapus</a>

                         </div>
                     </div>    
               <?php endforeach ?> 
                           

                       

                    
                </div> <!-- row -->

            </div>
                    <?php else : ?>
        <p>Belum ada data bosque.</p>
        <?php endif; ?>
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

<div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Ktegori Pemrograman</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"> 
            <p>List Nama Mata Kuliah </p></p>
          </div>
        </div>
      </div>