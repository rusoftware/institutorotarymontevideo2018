<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="images/logo-web-instituto.png" alt="XLIV Instituto Rotary Montevideo 2018 - Rotary International"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li <?php echo ($pagina=='home') ? 'class="active"' : ''; ?>><a href="index.html">Home</a></li>
        
        <li <?php echo ($pagina=='mensajes') ? 'class="active"' : ''; ?>><a href="mensajes.html">Mensajes</a></li>
        
        <li <?php echo ($pagina=='quienes_somos' || $pagina=='comision' || $pagina=='boletines' || $pagina=='joaquin') ? 'class="dropdown active"' : 'class="dropdown"'; ?>>
          <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">Quiénes Somos</a>
          <ul class="dropdown-menu">
            <li <?php echo ($pagina=='quienes_somos') ? 'class="active"' : ''; ?>><a href="quienes-somos.html">Rotary International</a></li>
            <li <?php echo ($pagina=='comision') ? 'class="active"' : ''; ?>><a href="comision.html">Comisión Organizadora</a></li>
            <li <?php echo ($pagina=='joaquin') ? 'class="active"' : ''; ?>><a href="joaquin-serratosa-cibils.html">Joaquín Serratosa Cibils</a></li>
            <li <?php echo ($pagina=='boletines') ? 'class="active"' : ''; ?>><a href="boletines.html">Boletines</a></li>
          </ul>
        </li>

        <li <?php echo ($pagina=='programa') ? 'class="active"' : ''; ?>><a href="programa.html">Programa</a></li>
        <li <?php echo ($pagina=='inscriptos') ? 'class="active"' : ''; ?>><a href="inscriptos.html">Inscriptos</a></li>
        
        <li><a href="galeria.html" class="local">Galería</a></li>

        <li <?php echo ($pagina=='hoteles') ? 'class="dropdown active"' : 'class="dropdown"'; ?>>
          <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">Hoteles</a>
          <ul class="dropdown-menu">
            <li <?php echo ($pagina=='hoteles') ? 'class="active"' : ''; ?>><a href="hoteles.html">Hoteles y Tarifas</a></li>
            <li <?php echo ($pagina=='turismo') ? 'class="active"' : ''; ?>><a href="turismo.html">Turismo</a></li>
            <li <?php echo ($pagina=='como_llego') ? 'class="active"' : ''; ?>><a href="como-llego.html">Cómo Llego</a></li>
          </ul>
        </li>

        <!--<li><a href="index.html#contact" class="local"><i class="fa fa-envelope-o"></i></a></li>-->
      </ul>
    </div>
  </div>
</nav>