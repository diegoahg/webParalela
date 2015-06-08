<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Contacto</title>
	<meta name="description" content="SEATTLE is a One Page Bootstrap 3 Premium website Template, using nice Paralax effect, HTML5, CSS3 and Twitter Bootstrap 3">
	<meta name="author" content="Little NEKO">
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
	================================================== -->
	<!-- Bootstrap  -->
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- web font  -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<!-- plugin css  -->
	<link rel="stylesheet" type="text/css" href="js-plugin/animation-framework/animate.css" />
	<!-- Pop up-->
	<link rel="stylesheet" type="text/css" href="js-plugin/magnific-popup/magnific-popup.css" />
	<!-- Flex slider-->
	<link rel="stylesheet" type="text/css" href="js-plugin/flexslider/flexslider.css" />
	<!-- Owl carousel-->
	<link rel="stylesheet" href="js-plugin/owl.carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="js-plugin/owl.carousel/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="js-plugin/owl.carousel/owl-carousel/owl.theme.css">
	<!-- icon fonts -->
	<link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons.css">
	<link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons-ie7.css">
	<!-- nekoAnim-->
	<link rel="stylesheet" type="text/css" href="js-plugin/appear/nekoAnim.css">
	<!-- Custom css -->
	<link type="text/css" rel="stylesheet" href="css/layout.css">
	<link type="text/css" id="colors" rel="stylesheet" href="css/light.css">
	<link type="text/css" rel="stylesheet" href="css/coffee.css">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<script src="js/modernizr-2.6.1.min.js"></script>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
</head>
<body class="activateAppearAnimation">
	<!-- Primary Page Layout 
	================================================== -->
	<!-- globalWrapper -->
	<div id="globalWrapper">
		<!-- header -->
		<header class="navbar-fixed-top">
			<div id="mainHeader" role="banner">
				<div class="container">
					<nav class="navbar navbar-default scrollMenu" role="navigation">
						<div class="navbar-header">
							<!-- responsive navigation -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Logo -->
							<a class="navbar-brand" href="index.html"><img src="images/main-logo.png" alt="SEATTLE website template"/></a>
						</div>
						<div class="collapse navbar-collapse" id="mainMenu">
							<!-- Main navigation -->
							<ul class="nav navbar-nav pull-right">
								<li class="primary">
									<a href="index.php" class="firstLevel hasSubMenu" >Home</a>
								</li>
								<li class="sep"></li>
								<li class="primary"> 
									<a href="codigos.php" class="firstLevel hasSubMenu" >Codigos</a>
									<ul class="subMenu">
										<li><a href="percolacion.php">Perocolación</a></li>
										<li><a href="fasta.php">Fasta</a></li>
										<li><a href="biblia.php">Codigo de la Biblia</a></li>
									</ul>
								</li>
								<li class="sep"></li>
								<li id="lastMenu" class="last"><a href="contacto.php" class="firstLevel active last">Contacto</a></li>
							</ul>
							<!-- End main navigation -->
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- header -->
		<!-- ======================================= content ======================================= -->
		<section id="page">
			<header class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Contáctenos</h1>
						</div>
					</div>
				</div>
			</header>
			<section id="content" class="mt30">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<h4>Dirección:</h4>
							<address>
								Principe de Gales 6716<br/>
								La Reina<br/>
							</address>
							<h4>Teléfono:</h4>
							<address>
								(569) 63421923<br/>
							</address>
						</div>
						<form method="post" action="js-plugin/neko-contact-ajax-plugin/php/form-handler.php" id="contactfrm" role="form">
							<div class="col-sm-4"> 
								<div class="form-group">
									<label for="name">Nombre</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Ingrese su nombre"  title="Ingrese su nombre (con al menos 2 letras)"/>
								</div>
								<div class="form-group">
									<label for="email">Correo electrónico</label>
									<input type="email" class="form-control" name="email" id="email" placeholder="ingrese su correo" title="Por favor ingresar una dirrección de correo válida"/>
								</div>
								<div class="form-group">
									<label for="phone">Teléfono</label>
									<input name="phone" class="form-control required digits" type="tel" id="phone" size="30" value="" placeholder="Ingrese su número telefónico" title="Por favor ingrese un número de teléfono válido (al menos 10 caracteres)">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="comments">Comentarios</label>
									<textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Ingrese su mensaje…" title="Por favor ingrese su mensaje (at least 10 characters)"></textarea>
								</div>
								<fieldset class="clearfix securityCheck">
									<h3>Seguridad</h3>
									<div class="form-group">
										<img src="js-plugin/neko-contact-ajax-plugin/php/image.php" alt="Imagen de verificación"/>
										<input class="required form-control"  id="verify" name="verify" type="text" >
									</div>
								</fieldset>
							</div>                        
							<div class="col-md-8 col-md-offset-4">
								<div class="result"></div>
								<button name="submit" type="submit" class="btn btn-lg" id="submit"> Enviar</button>
							</div>
						</form>
					</div>
				</div>
				<div id="mapWrapper" class="mt30"></div>
			</section>
		</section>
		<!-- content -->
		<!-- footer -->
		
		</div>
		<!-- global wrapper -->
	<!-- End Document 
	================================================== -->
	<script type="text/javascript" src="js-plugin/respond/respond.min.js"></script>
	<script type="text/javascript" src="js-plugin/jquery/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
	<!-- third party plugins  -->
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="js-plugin/easing/jquery.easing.1.3.js"></script>
	<!-- carousel -->
	<script type="text/javascript" src="js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
	<!-- pop up -->
	<script type="text/javascript" src="js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- form -->
	<script type="text/javascript" src="js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
	<script type="text/javascript" src="js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>
	<!-- appear -->
	<script type="text/javascript" src="js-plugin/appear/jquery.appear.js"></script>
	<!-- Custom  -->
</body>
</html>
