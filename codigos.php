<?php
	error_reporting(E_ALL);
	ini_set('display_errors','on');	
	include("simpleql/class.simpleql.php");
	session_start();
	require_once("function.php");
	EsUsuario();

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<!--<![endif]-->
<?php require_once("head.php"); ?>
<body class="activateAppearAnimation">
	<!-- Primary Page Layout 
	================================================== -->
	<!-- globalWrapper -->
	<div id="globalWrapper">
		<header class="navbar-fixed-top">
			<!-- header -->
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
							<a class="navbar-brand" href="index.php"><img src="images/main-logo.png" alt="SEATTLE website template"/></a>
						</div>
						<div class="collapse navbar-collapse" id="mainMenu">
							<!-- Main navigation -->
							<ul class="nav navbar-nav pull-right">
								<li class="primary">
									<a href="index.php" class="firstLevel active hasSubMenu" >Home</a>
								</li>
								<li class="sep"></li>
								<li class="primary"> 
									<a href="codigos.php" class="firstLevel hasSubMenu" >Servicios</a>
									<ul class="subMenu">
										<li><a href="enfermedades.php">Enfermedades</a></li>
										<li><a href="incendios.php">Incendios</a></li>
										<li><a href="explicito.php">Busqueda Explicita</a></li>
										<li><a href="implicito.php">Busqueda Implicita</a></li>
										<li><a href="adn.php">ADN</a></li>
										<li><a href="proteinas.php">Proteinas</a></li>
									</ul>
								</li>
								<li class="sep"></li>
								<li id="lastMenu" class="last"><a href="resultados.php" class="firstLevel last">Resultados</a></li>
								<li id="lastMenu" class="last"><a href="contacto.php" class="firstLevel last">Contacto</a></li>
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
							<h1>Codigos</h1>
							<p>Computación Paralela Primer Semestre 2015</p>
							
							<ul class="breadcrumb visible-md visible-lg">
								<li><a href="index.php">Home</a></li>
								<li><a href="codigos.php">Codigos</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<section id="content">
				<section class="pt30 pb30"> 
					<div class="container clearfix">
						<div class="row">
							<div class="portfolio-items  isotopeWrapper clearfix imgHover" id="3">
								<!-- portfolio item -->
								<article class="col-sm-4 isotopeItem women">
									<div class="pinBox">
										<img alt="" src="images/portfolio/percolacion.png" class="img-responsive">
										<div class="mediaHover">
											<div class="mask"></div>
											<div class="iconLinks"> 
												<a href="percolacion.php" title="link">
													<i class="icon-link iconRounded iconMedium"></i>
													<span>link</span>
												</a>
											</div>
										</div>
										<section class="boxContent">
											<h3>Percolación</h3>
											<p> La percolación se refiere al paso lento de fluidos a través de materiales porosos. Ejemplos de este proceso son la filtración y la lixiviación. <br />
												<!--<a href="percolacion.php" class="moreLink">&rarr; read more</a>-->
											</p>
										</section>
									</div>
								</article>
								<!-- portfolio item -->
								<!-- portfolio item -->
								<article class="col-sm-4 isotopeItem cats">
									<div class="pinBox">
										<img alt="" src="images/portfolio/fasta.png" class="img-responsive">
										<div class="mediaHover">
											<div class="mask"></div>
											<div class="iconLinks"> 
												<a href="fasta.php" title="link" class="portfolioSheet sizer">
													<i class="icon-link iconRounded iconMedium"></i>
													<span>link</span>
												</a>
											</div>   
										</div>
										<section class="boxContent">
											<h3>Fasta</h3>
											<p> El paquete actual de FASTA incluye programas para búsquedas del tipo proteína/proteína, ADN/ADN, proteína/ADN traducido (con cambios del marco de lectura), y búsqueda ordenada y desordenadas de péptidos. Las versiones recientes incluyen un algoritmo para manejar errores de desplazamiento del marco de lectura, las cuales las búsquedas que traducen los seis marcos suelen tener problemas) cuando compara datos de secuencia de proteínas con los nucleotidos. <br>
												<!--<a href="portfolio-project-fullwidth-video.html" class="moreLink">&rarr; read more</a> </p>-->
											</section>
										</div>
									</article>
									<!-- portfolio item -->
									<!-- portfolio item -->
									<article class="col-sm-4 isotopeItem graphics">
										<div class="pinBox">
											<img alt="" src="images/portfolio/torah.png" class="img-responsive">
											<div class="mediaHover">
												<div class="mask"></div>
												<div class="iconLinks"> 
													<a href="biblia.php" title="link">
														<i class="icon-link iconRounded iconMedium"></i>
														<span>link</span>
													</a>
												</div>
											</div>
											<section class="boxContent">
												<h3>Torah</h3>
												<p> El código de la Biblia, también conocido como el código de la Torá, consiste en un supuesto código oculto en la Torá judía (el Pentateuco del Antiguo testamento) que relata acontecimientos del pasado, presente y futuro.<br>
													<!--<a href="portfolio-project-fullwidth-video.html" class="moreLink">&rarr; read more</a>-->
												</p>
											</section>
										</div>
									</article>
									<!-- portfolio item -->
									</div>
								</div>
							</div>
						</section>
					</section>
				</section>
				<!-- content -->
				<!-- footer -->
				<?php require_once("footer.php"); ?>
					<!-- End footer -->
				</div>
				<!-- global wrapper -->
	<!-- End Document 
	================================================== -->
	<?php require_once("js.php"); ?>
</body>
</html>
