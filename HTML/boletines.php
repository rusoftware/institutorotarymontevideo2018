<?php
  $pagina = "boletines";
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="description" content="Boletines del Instituto Rotary Montevideo 2018">
  <?php include_once('inc.metatags.php'); ?>

</head>
<body>

<div id="boxedWrapper">

  <!-- navbar -->
  <?php include_once('inc.navbar.php'); ?>
  <!-- / navbar -->

<!--<header class="main-header clearfix">
  <div class="container">
    <h1 class="page-title pull-left">Galería fotográfica</h1>

    <ol class="breadcrumb pull-right">
      <li><a href="index.html">Home</a></li>
      <li class="active">Galería</li>
    </ol>
  </div>
</header>-->

<section class="content-area brightText" data-bg="./images/bg/bg007.jpg" data-topspace="70" data-btmspace="50" data-bg-pos="center 72%">
  <div class="container">

    <div class="flexslider std-slider center-controls" data-animation="fade" data-loop="true" data-animspeed="600" data-dircontrols="true" data-controls="true">
      <ul class="slides">
        <li>
          <blockquote class="huge text-center">
            <p>
              BOLETINES
            </p>
          </blockquote>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="content-area bg1">
  <div class="container">

    <div class="row">
      <div class="col-md-3">
        <article class="blog-item">
          <div class="blog-thumbnail">
            <a href="files/InstitutoRotaryMontevideo2018BoletinNro1.pdf" target="_blank"><img src="images/boletin1.png" alt=" "></a>
          </div>
          <div class="entry-meta">
            <span class="entry-date">10 de Diciembre de 2017</span>
            <!--<span class="entry-comments"><a href="#">Boletín N° 1</a></span>-->
          </div>
          <h4 class="entry-title"><a href="files/InstitutoRotaryMontevideo2018BoletinNro1.pdf" target="_blank">Primer boletín del XLIV Instituto Rotary Montevideo 2018</a></h4>
        </article>
        <!-- / blog-item -->
      </div>

      <div class="col-md-3">
        <article class="blog-item">
          <div class="blog-thumbnail">
            <a href="files/InstitutoRotaryMontevideo2018BoletinNro2.pdf" target="_blank"><img src="images/boletin2.png" alt=" "></a>
          </div>
          <div class="entry-meta">
            <span class="entry-date">12 de Enero de 2018</span>
            <!--<span class="entry-comments"><a href="#">Boletín N° 1</a></span>-->
          </div>
          <h4 class="entry-title"><a href="files/InstitutoRotaryMontevideo2018BoletinNro2.pdf" target="_blank">Segundo boletín del XLIV Instituto Rotary Montevideo 2018</a></h4>
        </article>
      </div>

      <div class="col-md-3">
        <article class="blog-item">
          <div class="blog-thumbnail">
            <a href="files/InstitutoRotaryMontevideo2018BoletinNro3.pdf" target="_blank"><img src="images/boletin3.png" alt=" "></a>
          </div>
          <div class="entry-meta">
            <span class="entry-date">18 de Febrero de 2018</span>
            <!--<span class="entry-comments"><a href="#">Boletín N° 1</a></span>-->
          </div>
          <h4 class="entry-title"><a href="files/InstitutoRotaryMontevideo2018BoletinNro3.pdf" target="_blank">Tercer boletín del XLIV Instituto Rotary Montevideo 2018</a></h4>
        </article>
      </div>

      <div class="col-md-3">
        <!--
        <article class="blog-item format-video">
          <div class="blog-thumbnail">
            <a href="http://www.youtube.com/watch?v=HJ2F7eptn_A" class="popup-iframe"><img src="images/content/home-v1-blog-03.jpg" alt=" "></a>
          </div>
          <div class="entry-meta">
            <span class="entry-date">November 30, 2013</span>
            <span class="entry-comments"><a href="#">6 comment</a></span>
          </div>
          <h4 class="entry-title"><a href="#">This is a video post</a></h4>

        </article>
        -->
      </div>
    </div>

  </div>
</section>

<footer>
  <?php include_once('inc.footer.php'); ?>
</footer>


</div>
<!-- / boxedWrapper -->

<a href="#" id="toTop"><i class="fa fa-angle-up"></i></a>

<?php include_once('inc.js_manifest.php'); ?>

</body>
</html>