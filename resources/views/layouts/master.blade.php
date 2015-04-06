<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
@section('title')
    <title>Sicre</title>
@show
    <meta charset="utf-8" name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--Llamados a CSS y a los Script-->
@section('css')
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->

    <link rel="stylesheet" href="master/style.css" media="screen">
    <link rel="stylesheet" type="master/text/css" href="style1.css" />
    <link rel="stylesheet" href="master/style.responsive.css" media="all">

    <script src="master/jquery.js"></script>
    <script src="master/script.js"></script>
    <script src="master/script.responsive.js"></script>
@show
</head>
<body>

<!--Inicia el menu principal-->

<div id="art-main">
@include('layouts.menu')

<header class="art-header">
<div class="art-slider art-slidecontainerheader" data-width="1920" data-height="255">
<div class="art-slider-inner">
<div class="art-slide-item art-slideheader0">
</div>
<div class="art-slide-item art-slideheader1">
</div>
</div>
</div>
</header>

<div class="art-sheet clearfix">
<div class="art-layout-wrapper">
<div class="art-content-layout">
<div class="art-content-layout-row">
<div class="art-layout-cell art-content">
<article class="art-post art-article">
<div class="art-postcontent art-postcontent-0 clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">

<!--Coloca acá el contenido de tu sitio-->
@yield('contenido')
<h1><center> Sistema Central de Reportes y Requerimientos</center></h1>

<h3><center>Para su mayor comodidad, hemos creado un sistema centralizado para que los servidores públicos de nuestra organización, realicen de manera sencilla los reportes relacionados a fallas en sus computadoras, equipos de oficinas, puntos de red entre otros.
<br>
Ademas de facilitar el acceso a las solicitudes de materiales de oficina, reportar daños en infra-estructura, mantenimiento entre otras.
<br>
Se ha anexado un enlace directo con recursos humanos, para realizar solicitudes de cartas de trabajo, permisos no remunerados, constancias de trabajo.
<br>
Orientados en brindar un servicio acorde a sus necesidades y en pro de la eficacia y la efectividad demandada por el bienestar de nuestros trabajadores.
</center>
</h3>

<div class="art-content-layout">
<div class="art-content-layout-row">
<div class="art-layout-cell layout-item-1" style="width: 100%" >
</div>
</div>
</div>
</div>
</article>
</div>
</div>
</div>
</div>
<footer class="art-footer">
<div style="position:relative;display:inline-block;padding-left:40px;padding-right:40px">
<p>
<a href="#">Contactos</a>
<a href="#">Páginas de Interes</a>
<a href="#">Ubicación</a>
</p>
<p>Acá colocaremos los enlaces de las páginas relacionadas, los números de teléfono, la dirección especifica de la sede, número de rif, etc.</p></div>
</footer>
</div>
<p class="art-page-footer">
    <span id="art-footnote-links">© Design:<a href="http://www.regaze.com.ve/" target="_blank">  Regaze.com.ve</a> </span>
</p>
</div>
</body>
</html>