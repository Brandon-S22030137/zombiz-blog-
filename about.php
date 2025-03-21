<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		
        <!-- TITLE OF SITE -->
        <title>Administración de bases de datos</title>

        <!-- for title img -->
		<link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!--linear icon css-->
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		
		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">
		
		<!--hover.css-->
        <link rel="stylesheet" href="assets/css/hover-min.css">
		
		<!--vedio player css-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet"/>

        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link href="assets/css/bootsnav.css" rel="stylesheet"/>	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		
		
		<!--header start-->
<section class="header">
		<div class="container">	
			<div class="header-left">
				<ul class="pull-left">						<li>
							<a href="https://www.cdhidalgo.tecnm.mx/" target="_blank">
								<i class="fa fa-phone" aria-hidden="true"></i> +52 786 154 9000
							</a>
						</li><!--/li-->
						<li>
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<a href="https://www.cdhidalgo.tecnm.mx/" target="_blank">
								contacto@tecnm.mx 
							</a>
						</li><!--/li-->
					</ul><!--/ul-->
				</div><!--/.header-left -->
				<div class="header-right pull-right">
					<ul>
						<li class="reg">
							<a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
								Registrate
							</a>
								/
							<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
								Inicia sesión
							</a>
							
							<!-- small modal -->
							<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
								<div class="modal-dialog modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-header">
											 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											 	<span aria-hidden="true">
											 		<i class="fa fa-close"></i>
											 	</span>
											 </button> 
											<h4 class="modal-title" id="mySmallModalLabel">
												Sign In
											</h4> 
											<form class="sm-frm" style="padding:25px">
												<label>Name :</label>
												<input type="text" class="form-control" placeholder="Enter Email">
												<label>Passoward :</label>
												<input type="text" class="form-control" placeholder="Enter Passoward">
												<label><input type="checkbox" name="personality"> Remenber Me</label>
												<button type="button" class="btn btn-default pull-right">Submit</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							
							<!-- large modal -->
							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											 	<span aria-hidden="true">
											 		<i class="fa fa-close"></i>
											 	</span>
											</button>  
											<h4 class="modal-title" id="myLargeModalLabel">Register</h4> 
											<form class="lg-frm" style="padding:25px">
												<label>Name :</label>
												<input type="text" class="form-control" placeholder="Enter Name">
												<label>Email :</label>
												<input type="text" class="form-control" placeholder="Enter Email">
												<label>Passoward :</label>
												<input type="text" class="form-control" placeholder="Enter Passoward">
												<button type="button" class="btn btn-default pull-right">Submit</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li><!--/li -->
						<li>
							<div class="social-icon">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul><!--/.ul -->
							</div><!--/.social-icon -->
						</li><!--/li -->
					</ul><!--/ul -->
				</div><!--/.header-right -->
			</div><!--/.container -->	

		</section><!--/.header-->	
		<!--header end-->
		
		<!--menu start-->
		<section id="menu">
			<div class="container">
				<div class="menubar">
					<nav class="navbar navbar-default">
					
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div><!--/.navbar-header -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="about.php">Inicio</a></li>
								<li ><a href="index.php">Unidad 1</a></li>
								<li><a href="service.php">Unidad 2</a></li>
								<li><a href="project.php">Unidad 3</a></li>
								<li><a href="team.php">Unidad 4</a></li>
								<li><a href="blog.php">Unidad 5</a></li>
								<li><a href="contact.php">Unidad 6</a></li>
								<!-- <li class="search">
									<form action="">
										<input type="text" name="search" placeholder="Search....">
										<a href="#">
											<span class="lnr lnr-magnifier"></span>
										</a>
									</form>
								</li> -->
							</ul><!-- / ul -->
						</div><!-- /.navbar-collapse -->
					</nav><!--/nav -->
				</div><!--/.menubar -->
			</div><!-- /.container -->

		</section><!--/#menu-->
		<!--menu end-->
		
		<!--about-part start-->
		<section class="about-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Administración de bases de datos</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								<ol class="breadcrumb">

								</ol><!--/.breadcrumb-->
							</div><!--/.container-->
						</div><!--/.breadcrumbs-->
					</div><!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->

		<!--about-history start-->
		<div class="about-history">
			<div class="container">
				<div class="about-history-content">

					<div class="row">

						<div class="col-md-5 col-sm-12">
							<div class="single-about-history">
								<div class="about-history-img">
									<img src="img/admin.jpg" alt="about">
								</div><!--/.about-history-img-->
							</div><!--/.single-about-history-->
						</div><!--/.col-->

						<div class="col-md-offset-1 col-md-6 col-sm-12">
							<div class="single-about-history">
								<div class="about-history-txt">
								<h2>¿Qué es la administración de bases de datos?</h2>
									<p>
										Es la disciplina que consiste en crear la base de datos, con el objetivo de que los controles técnicos puedan cumplir con las políticas dictadas por el administrador de datos.
									</p>
								    <br>
									<h2>¿Qué es un administrador de bases de datos?</h2>
									<p>
										Un administrador de bases de datos, o DBA, es responsable de mantener, proteger y operar bases de datos y también garantiza que los datos se almacenen y recuperen correctamente .
									</p>

									</div><!--.main-timeline-->
								</div><!--/.about-history-txt-->
							</div><!--/.single-about-history-->
						</div><!--/.col-->

					</div><!--/.row-->
					<div class="row">

						<div class="about-vission-content">

							<div class="col-md-6 col-sm-12">
								<div class="single-about-history">
									<div class="about-history-txt">
										<h2>Características del administrador de bases de datos</h2>
										<p>
											Para ser un buen administrador de bases de datos es necesario contar con las siguientes caracteristicas
										</p>

										<div class="main-timeline  xtra-timeline">

											<div class="row">
												<div class="col-sm-12">
													<div class="timeline timeline-ml-20">
														<div class="timeline-content">
															<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
															<ul class="description">
																<li>Tener capacidad de planificación y de previsión.</li>
															</ul>
														</div><!--/.timeline-content-->
													</div><!--/.timeline-->
												</div><!--/.col-->
											</div><!--/.row-->

											<div class="row">
												<div class="col-sm-12">
													<div class="timeline timeline-ml-20">
														<div class="timeline-content">
															<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
															<ul class="description">
																<li> Tener conocimientos sobre todo lo relacionado con la protección de datos y los derechos de acceso.</li>
															</ul>
														</div><!--/.timeline-content-->
													</div><!--/.timeline-->
												</div><!--/.col-->
											</div><!--/.row-->

											<div class="row">
												<div class="col-sm-12">
													<div class="timeline timeline-ml-20">
														<div class="timeline-content">
															<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
															<ul class="description">
																<li> Poseer aptitudes para el trabajo en equipo.</li>
															</ul>
														</div><!--/.timeline-content-->
													</div><!--/.timeline-->
												</div><!--/.col-->
											</div><!--/.row-->

											<div class="row">
												<div class="col-sm-12">
													<div class="timeline timeline-ml-20">
														<div class="timeline-content">
															<h4 class="title"> <span><i class="fa fa-circle-o" aria-hidden="true"></i></span></h4>
															<ul class="description">
																<li>Estar dispuesto a mantenerse al día de los cambios en cuanto a la protección de datos y en las tecnologías de bases de datos.</li>
															</ul>
														</div><!--/.timeline-content-->
													</div><!--/.timeline-->
												</div><!--/.col-->
											</div><!--/.row-->
										</div><!--.main-timeline-->
									</div><!--/.about-history-txt-->
								</div><!--/.single-about-history-->
							</div><!--/.col-->

							<div class="col-md-offset-1 col-md-5 col-sm-12">
								<div class="single-about-history">
									<div class="about-history-img">
										<img src="img/ad.jpg" alt="about">
									</div><!--/.about-history-img-->
								</div><!--/.single-about-history-->
							</div><!--/.col-->
						</div><!--/.about-vission-content-->
					</div><!--/.row-->
				</div><!--/.about-history-content-->
			</div><!--/.container-->

		</div><!--/.about-history-->
		<!--about-history end-->

		
		<!--statistics start-->
		<section  class="statistics">
			<div class="container" style="text-align: center;">
				<div class="statistics-counter "> 
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
							</div><!--/.statistics-img-->
							<div class="statistics-content" style="text-align: center;">
								<h1 style="color: aliceblue; text-align:center; margin-left: 400px;">¡¡<b>Conocenos</b>!!</h1>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.statistics-->
		<!--statistics end-->
		

		<!-- testemonial Start -->
		<section   class="testemonial">
			<div class="container">
				<div class="section-header text-center">
					<h2>
						<span>
							DCE. MARÍA ESMERALDA ARREOLA MARÍN 
						</span>
					</h2>
				</div><!--/.section-header-->
				<!-- Info profa -->
					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="img/Profa.jpg" alt="img" width="200px" border-radius="50%"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									El propósito del presente curso es el de complementar los conocimientos adquiridos en las dos materias antecesoras (Fundamentos de Base de Datos y Taller de base de datos), con la aplicación de diferentes aspectos de otras materias.
								</p>
								<h3>
									<a href="https://www.facebook.com/lic.esme.9?mibextid=ZbWKwL "target="_blank" >
										Esme Arreola 
									</a>
								</h3>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->
					</div><!--/.item-->
			</div><!--/.container-->


		<!-- testemonial Start -->
		<section   class="testemonial">
			<div class="container">
				<div class="section-header text-center">
					<h2>
						<span>
							Nuestro Equipo
						</span>
					</h2>
				</div><!--/.section-header-->
				<div class="owl-carousel owl-theme" id="testemonial-carousel">
					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="img/LMV.png" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Hacia el exito con estudio y disciplina.
								</p>
								<h3>
									<a href="#">
										Itzel Gudiño García
									</a>
								</h3>
								<h4>Líder de equipo</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->
					</div><!--/.item-->
					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="img/Amo.png" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									La riqueza se hizo para disfrutarse...(¿Cómo se disfruta la pobreza?)
								</p>
								<h3>
									<a href="https://www.facebook.com/yuli.barrera.374?mibextid=ZbWKwL">
										Yuleisi Barrera Castro
									</a>
								</h3>
								<h4>Colaborador</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->
					</div><!--/.item-->
					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="img/Brandon.png" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									¿Aquí tenia que ir una frase?
								</p>
								<h3>
									<a href="https://www.facebook.com/profile.php?id=100009138335528&mibextid=ZbWKwL">
										Brandon Cruz
									</a>
								</h3>
								<h4>Colaborador</h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->
					</div><!--/.item-->
				</div><!--/.testemonial-carousel-->
			</div><!--/.container-->

		</section><!--/.testimonial-->	
		<!-- testemonial End -->

		<?php include('pie.php');?>

    </body>
	
</pphp>