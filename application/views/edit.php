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
       <section class="tm-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">

                       <?php if ($update_data){
                        $a = $update_data->id;
                        $judul = $update_data->judul;
                        $content = $update_data->content;
                        $image = $update_data->image;

                    }else{
                        $judul = "";
                        $content = "";
                        $image = "";
                }
                ?> 
                <section>
                            <h3 class="tm-gold-text tm-form-title">Edit Data</h3>
                            <?php echo site_url('home/update/'.$a) ?>


                <form action="" method="POST" class="tm-contact-form">
                                                            

                                <div class="form-group">
                                    <input type="text" name="judul" value="<?php echo $judul ?>" class="form-control" placeholder="Judul"  required/>
                                    
                                </div>


                                <div class="form-group">
                                    <textarea type="text" name="content" value="<?php echo $content ?>"  class="form-control" rows="6" placeholder="Content" required></textarea>
                                    
                                </div>

                                <div class="form-group">
                                    <input type="file" name="image" value="<?php echo $image ?>" class="form-control" placeholder="Choose file"  required/>
                                </div>
                            
                                <button type="submit" name="simpan" value="simpan" class="tm-btn">Simpan</button>       

  
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
