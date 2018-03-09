<?php
  $pagina = "galeria";
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="description" content="Galería de fotos del Instituto Rotary Montevideo 2018">
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

<section class="content-area brightText" data-bg="./images/bg/bg012.jpg" data-topspace="70" data-btmspace="50" data-bg-pos="center 72%">
  <div class="container">

    <div class="flexslider std-slider center-controls" data-animation="fade" data-loop="true" data-animspeed="600" data-dircontrols="true" data-controls="true">
      <ul class="slides">
        <li>
          <blockquote class="huge text-center">
            <p>
              GALERÍA FOTOGRÁFICA
            </p>
          </blockquote>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="content-area bg1">
  <div class="container">

    <div id="blog-list" class="clearfix withMasonry">
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/001.jpg" class="imgpopup"><img src="images/galeria/001.jpg" alt=" "></a>
        </div>
      </article>
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/002.jpg" class="imgpopup"><img src="images/galeria/002.jpg" alt=" "></a>
        </div>
      </article>
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/003.jpg" class="imgpopup"><img src="images/galeria/003.jpg" alt=" "></a>
        </div>
      </article>
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/004.jpg" class="imgpopup"><img src="images/galeria/004.jpg" alt=" "></a>
        </div>
      </article>
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/006.jpg" class="imgpopup"><img src="images/galeria/006.jpg" alt=" "></a>
        </div>
      </article>
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/007.jpg" class="imgpopup"><img src="images/galeria/007.jpg" alt=" "></a>
        </div>
      </article>
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/008.jpg" class="imgpopup"><img src="images/galeria/008.jpg" alt=" "></a>
        </div>
      </article>
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/009.jpg" class="imgpopup"><img src="images/galeria/009.jpg" alt=" "></a>
        </div>
      </article>
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/010.jpg" class="imgpopup"><img src="images/galeria/010.jpg" alt=" "></a>
        </div>
      </article>
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/011.jpg" class="imgpopup"><img src="images/galeria/011.jpg" alt=" "></a>
        </div>
      </article>
      <article class="blog-item item-bigger">
        <div class="blog-thumbnail">
          <a href="images/galeria/005.jpg" class="imgpopup"><img src="images/galeria/005.jpg" alt=" "></a>
        </div>
      </article>
    </div>
    <!-- / blog-list -->
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