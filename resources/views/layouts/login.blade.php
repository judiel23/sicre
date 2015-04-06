<!DOCTYPE HTML>
<html>
	<head>
	@section('title')
		<title>SICRE (Sistema Central de Reportes)</title>
	@show
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		@section('estilo')
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->

		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		@show
	</head>

	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">
<header id="header">
	@yield('contenido')
</header>
				<!-- Footer -->
				<!-- Footer -->
				@show
					<footer id="footer">
						<span class="copyright"><center>&copy;Design: <a href="http://regaze.com.ve">Regaze.com.ve</a>.</center></span>
					</footer>

			</div>
		</div>
	</body>
</html>