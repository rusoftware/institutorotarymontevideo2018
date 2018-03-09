<?php
  $pagina = "inscriptos";
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <title>Inscriptos al XLIV Instituto Rotary Montevideo 2018 "Joaquin Serratosa Cibils"</title>
  <meta name="description" content=" ">
  <?php include_once('inc.metatags.php'); ?>

  <!--<link href="google_spreadsheets/dataTables.bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/rowgroup/1.0.2/css/rowGroup.dataTables.min.css" rel="stylesheet">-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowgroup/1.0.2/css/rowGroup.bootstrap.min.css"/>
  <style type="text/css">
    /*.group-start td {
      background-color: #000 !important;
    }*/
    .group-start td:before {
      content: "DISTRITO ";
    }
  </style>

</head>
<body>

<div id="boxedWrapper">

<!-- navbar -->
  <?php include_once('inc.navbar.php'); ?>
<!-- / navbar -->

<!--
<header class="main-header clearfix">
  <div class="container">
    <h1 class="page-title pull-left">INSCRIPTOS</h1>

    <ol class="breadcrumb pull-right">
      <li><a href="index.html">Home</a></li>
      <li class="active">Inscriptos</li>
    </ol>
  </div>
</header>
-->

<section class="content-area brightText" data-bg="images/bg/bg009.jpg" data-topspace="70" data-btmspace="50" data-bg-pos="50% -190px">
  <div class="container">

    <div class="flexslider std-slider center-controls" data-animation="fade" data-loop="true" data-animspeed="600" data-dircontrols="true" data-controls="true">
      <ul class="slides">
        <li>
          <blockquote class="huge text-center">
            <p>
              INSCRIPTOS Y PRE-INSCRIPTOS AL
              <br>
              XLIV INSTITUTO ROTARY MONTEVIDEO 2018
              <br>
              "Joaquin Serratosa Cibils"
            </p>
            <a href="http://www.expopase.com/acreditaciones/acreditese2.php?idevento=644" target="_blank" class="btn btn-rotary btn-lg animated" data-fx="fadeInUp">INSCRIBITE!</a>
          </blockquote>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="content-area">
  <div class="container">
    
    <header class="page-header">
      <h1 class="page-title">Inscriptos y pre-inscriptos al</h1>
      <h2>XLIV INSTITUTO ROTARY MONTEVIDEO 2018<br>
      "Joaquin Serratosa Cibils"</h2>

    </header>

    <div class="row">
      
      <!-- DESCOMENTAR PARA VER RECUENTO POR DISTRITO
      <h3>INSCRIPTOS POR DISTRITO</h3>

      <div id="recuento">
        <div class="col-md-1"></div>
      </div>
      -->

      <div class="col-md-12" id="inscripcionesTabs">
        <h3>INSCRIPTOS POR DISTRITO</h3>
        <div id="inscriptos-container" style="background: #ebebeb"></div>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-md-12">
        <h3>LISTADO DE PRE-INSCRIPTOS</h3>
        <div id="preinscriptos-container" style="background: #ebebeb"></div>
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

<script src="google_spreadsheets/jquery.csv.min.js"></script>
<script src='google_spreadsheets/csv_to_html_table.js'></script>
<!--<script src="google_spreadsheets/jquery.dataTables.min.js"></script>
<script src="google_spreadsheets/dataTables.bootstrap.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.0.2/js/dataTables.rowGroup.min.js"></script>-->

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowgroup/1.0.2/js/dataTables.rowGroup.min.js"></script>


<script>
  init_table({
    /* csv_path: 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQRLnophItBVQdHI1ajk_6ZFfT7_UEQk3yLMd4NGcSJm_sl45J9YFd3LUza5BTv05CPmMcq_tPlnMD5/pub?gid=935600366&single=true&output=csv', */
    csv_path: 'https://docs.google.com/spreadsheets/d/e/2PACX-1vSAD6cZztIfc9U-7pw5XU-LdFTqSnwK_5DxKOEenNjRM88xfdlIPL_w-QNpBclix-nifCcehT3k34Du/pub?gid=317497559&single=true&output=csv',
    element: 'preinscriptos-container', 
    randomId: 'preinscriptos',
    csv_options: {
      startIndex: 11,
      headerIndex: 10,
      requiredCol: 1
    },
    datatables_options: {
      paging: false,
      scrollY: 900,
      searching: false,
      order: [
        [ 1, 'asc' ]
      ],
    }
    // More options go here
  });

  init_table({
    /*csv_path: 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQRLnophItBVQdHI1ajk_6ZFfT7_UEQk3yLMd4NGcSJm_sl45J9YFd3LUza5BTv05CPmMcq_tPlnMD5/pub?gid=1803684958&single=true&output=csv',*/
    csv_path: 'https://docs.google.com/spreadsheets/d/e/2PACX-1vTs1haDUx2tVXgpuEQt54Ymo62EARJMfhJPVvMiCL8P_fyp23jlszkaWXKHJwPC3vSrWnBdrBIqK5an/pub?gid=1935635772&single=true&output=csv',
    element: 'inscriptos-container', 
    randomId: 'inscriptos',
    csv_options: {
      startIndex: 11,
      headerIndex: 10,
      requiredCol: 1
    },
    datatables_options: {
      paging: false,
      scrollY: 900,
      searching: false,
      order: [
        [ 4, 'asc' ], 
        [ 0, 'asc' ]
      ],
      rowGroup: {
          dataSrc: 4
      }
    }
  });

  /* SPREADSHEET UNIFICADO 
  init_table({
    csv_path: 'https://docs.google.com/spreadsheets/d/e/2PACX-1vRSjm9C6lzeIdIJnF7ss6NSveDfs6sInyG1QlITvkOJnBLHu07mu41kaXrRnlp7-fw7eQFENVd5OztD/pub?gid=0&single=true&output=csv', 
    element: 'inscriptos-container', 
    randomId: 'losInscriptos',
    datatables_options: {
      paging: false,
      scrollY: 900,
      searching: false
    }
    // More options go here
  });*/

</script>


</body>
</html>