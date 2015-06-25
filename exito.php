<?php
include("simpleql/class.simpleql.php");
	session_start();
	require_once("function.php");
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
									<a href="codigos.php" class="firstLevel active hasSubMenu" >Codigos</a>
									<ul class="subMenu">
										<li><a href="percolacion.php">Perocolación</a></li>
										<li><a href="fasta.php">Fasta</a></li>
										<li><a href="biblia.php">Codigo de Torah</a></li>
									</ul>
								</li>
								<li class="sep"></li>
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
		<section id="portfolio">
			<header class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-1">
							<a href="javascript:history.go(-1)" class="btn btn-sm btn-inverse"><i class="icon-left-open-mini"></i>back</a>
						</div>  
						<div class="col-xs-10 col-sm-10 col-md-11 projectTitle">
							<h1>Fasta</h1>
							<p>Computación Paralela Primer Semestre 2015</p>
							<ul class="breadcrumb visible-md visible-lg">
								<li><a href="index.php">Home</a></li>
								<li><a href="codigos.php">Codigos</a></li>
								<li class="active">Fasta</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<section id="content" class="mt30">
				<!-- works -->
				<section class="pt30 pb30 mb15">
						<div class="container"> 
							<div class="row"> 
								<div class="col-md-12"> <!-- Queda hasta acá-->
									<section class="pt40 pb40">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="ctaBox color2" data-nekoanim="bounceIn" data-nekodelay="100">
										<div class="ctaBoxText">
											<h1>
												Proceso realizado con éxito!
											</h1>
											<h2>Los resultados del proceso han sido enviados al correo registrado.
											<a href="javascript:history.go(-1)" class="btn btn-sm btn-inverse"><i class="icon-left-open-mini"></i>back</a>
											</h2>
										</div>
										<div class="ctaBoxBtn">
											<div class="row">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
								</div> <!-- Queda hasta acá-->
							</div>
						</div> 
					</section>
					<!-- call to action -->
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