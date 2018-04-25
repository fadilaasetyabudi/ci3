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
   <!--echo form_open_multipart('home/tambah'); -->
  <?php
       
          
        echo form_open_multipart('home/tambah', array('class' => 'needs-validation', 'novalidate' => ''));
       ?>

      
          
<form>
<?php echo validation_errors(); ?>
  <div class="form-group">
    <label for="exampleFormControlInput1">Judul</label>
    <input type="text" class="form-control" name="input_judul" value="<?php echo set_value('input_judul'); ?>"  placeholder="judul">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control"  value="<?php echo set_value('input_content'); ?>" name="input_content" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Image</label>
    <input type="file" class="form-control" value="<?php echo set_value('input_gambar'); ?>" name="input_gambar" placeholder="image">
  </div>
   <button type="submit" name="simpan" value="simpan" class="tm-btn">Simpan</button>  
    <button><a href="<?php echo site_url('home'); ?>" class="tm-btn ">Back</a></button>
</form>

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
