<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<?php require_once("head.php"); ?>
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
							<a class="navbar-brand" href="index.php"><img src="images/main-logo.png" alt="SEATTLE website template"/></a>
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
							<h1>Percolación</h1>
							<p>Computación Paralela Primer Semestre 2015</p>
							<ul class="breadcrumb visible-md visible-lg">
								<li><a href="index.php">Home</a></li>
								<li><a href="codigos.php">Codigos</a></li>
								<li class="active">Percolación</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<section id="content" class="mt30">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<img src="images/portfolio/img-fullwidth-1.jpg" alt="SEATTLE premium website template" class="img-responsive mb30"/>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12 col-sm-4">
									<h1>Percolación</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. Sed ac consectetur leo. Pellentesque habitant morbi tristique senectus et netus...</p>
								</div>
								<div class="col-md-12 col-sm-4">
									<h2>Integrantes</h2>
									<p>Sergio Abarca Flores</p>
									<p>Rosa Gonzalez Soto</p>
									<p>Claudio Piña Novoa</p>
									<h2>Technology</h2>
									<p>Bootstrap, PHP, MPI PYTHON</p>
								</div>
							</div>
						</div>
					</div>
				</div>
					<!-- call to action -->
					<section class="pt30 pb30 mb15">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="ctaBox ctaBox2Cols color2">
										<div class="col-lg-12">
											<form method="post" action="controlador.php" id="postComment" role="form"  enctype="multipart/form-data">
												<div class="col-lg-3">
													<div class="form-group">
														<label for="tipoArbol">Tipo Arbol</label>
														<select class="form-control" name="tipoArbol" id="tipoArbol">
															<option value="">Seleccione un Arbol</option>
															<option value=""></option>
														</select>
													</div>
												</div>
												<div class="col-lg-3">
													<div class="form-group">
														<label for="name">Tipo Suelo</label>
														<select class="form-control" name="tipoSubtotal" id="tipoSubtotal">
															<option value="">Seleccione un Suelo</option>
															<option></option>
														</select>
													</div>
												</div>
												<div class="col-lg-3">
													<div class="form-group">
														<label for="email">Email</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email *">
													</div>
												</div>
												<div class="col-lg-1">
													<div class="form-group">
														<label for="distribucion">Distribución</label>
														<input type="text" class="form-control" name="distribucion" id="distribucion" placeholder="%">
														<!--<div class="input-group">
							                                <input class="form-control" type="text" data-mask="99%">
							                                <span class="input-group-addon">99%</span>
							                            </div>-->
													</div>
												</div>
												<div class="col-lg-1">
													<div class="form-group">
														<label for="tamano">Tamaño</label>
														<input type="text" class="form-control" name="tamano" id="tamano" placeholder="">
													</div>
												</div>
												<div class="col-lg-1">
													<div class="form-group">
														<label for="rank">Rank</label>
														<input type="text" class="form-control" name="rank" id="rank" placeholder="">
													</div>
												</div>
												<div class="col-lg-2">
													<button class="btn btn-succes" type="submit" name="submitComment">Enviar</button>
												</div>
											</form>
										</div>
									</div>
								</div>
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
