<!DOCTYPE html>
<!--
Website for Carli's Grooming;
Created by: Lee Bennett | www.ldbennett.com
Contact: LDBennett@gmail.com
-->
<html>
  <head>
    <?php 
    $descript = "Carli's Grooming is a small business that aims to make your"
            . "dog look their best! Located at Chow Down Pet Supplies on"
            ."Broadway. I groom both dogs and cats, message me today for a quote! "; 
   $title = "Carli's Grooming";
    include 'comp/_meta_header.php';
    ?>
  </head>
  <body id='page-top'>
    <?php include 'comp/_nav.html';?>
    <div id='header'>
      <a class="btn btn-transparent" data-toggle="modal" data-target="#menuModal"><i class='fa fa-bars fa-3x'></i></a>
      <a class="btn btn-transparent-r page-scroll" href='#page-top'><i class='fa fa-arrow-up fa-3x'></i></a>  
      <img class='img-responsive center-block'src='img/logo_sm.png' alt='Carlis Grooming Logo'/> 
    </div>
    <div class='container-fluid' id='main'>
      <section id='about'>
        <?php include 'about.php';?>
      </section>
      <section id='services'>
        <?php include 'services.php';?>
      </section>
      <section id='gallery'>
        <?php include 'gallery.php';?>
      </section>
    </div>
    <footer id='contact'>
        <?php include 'contact.php';?>
    </footer>
    <!--Javascript Essentials-->
    <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
    <script src="js/page-scroll.js" type="text/javascript"></script>
  </body>
</html>
