

<!DOCTYPE html>


<html lang="en">
<head>
<title>Transporters a Transportation Category Flat Bootstrap Responsive Website Template | Gallery :: W3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transporters web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web Designs" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<link rel="stylesheet" href="css/lightbox.css"> <!-- portfolio-CSS -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/style1.1.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="icon" type="image/x-icon" href="images/favicon.ico">
<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
<!-- //css files -->

<!-- web-fonts -->
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<!-- //web-fonts -->
</head>
<body>
				
		<div class="clear"></div>
		<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				<ul>
					
					<li>
						<a href="index.html" class="active">Inicio</a>
					</li>
					<li>
						<a href="formulario.html" class="active">Contacto</a>
					</li>
				</ul>
			</div>
		</nav>
	
<!-- portfolio-inner-page -->
	<div id="portfolio" class="portfolio">
		<div class="heading">
		
			<h3>Destinos y Turismo</h3>
		</div>
		<div class="container">
			<div class="sap_tabs">			
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item"><span>Religioso</span></li>

						<li class="resp-tab-item"><span>de PLaya</span></li>
						<li class="resp-tab-item"><span>Recreativo</span></li>
						<li class="resp-tab-item"><span>de Aventura</span></li>
						<li class="resp-tab-item"><span>de Negocios</span></li>
						<li class="resp-tab-item"><span>Cultural</span></li>
						<li class="resp-tab-item"><span>Pueblos M??gicos</span></li>
					</ul>	
					<div class="clearfix"> </div>	
					<div align="center" >

					<div class="resp-tabs-container">
						
						<div class="tab-1 resp-tab-content">
							<div >
								<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid0">
																<p style="color:blue; font-size: 25px">Turismo religioso, el origen de las rutas culturales</p><br>
																<p style="color:black; text-align: justify; font-size: 18px">

El turismo religioso es una estupenda  manera de conocer el origen de las culturas, los lugares sagrados y la historia de los pa??ses. Un tour religioso le ayudar?? a comprender la historia, la espiritualidad, las tradiciones de las comunidades que visita y el mundo tal y como es hoy.
Los viajes religiosos tienen como motor principal de desplazamiento, la fe y el culto a una deidad superior. Grupos y asociaciones acuden a cualquier rinc??n de M??xico  a visitar santuarios espirituales, circuitos religiosos, tumbas de alg??n santo o a realizar alguna peregrinaci??n.
En M??xico se calcula que 30 millones de personas realizan turismo religioso anualmente. A continuaci??n te presentamos los sitios m??s visitados y con mayor arraigo en cultural popular mexicana:
</p>
</div>

								</div>	
					

							<?php
							
include "conn.php";
             
	$queryS = mysqli_query($conn,"SELECT * FROM destinos_table WHERE des_TYPE='religioso'");
               

				

                while ( $rowS = mysql_fetch_array ( $resultS ) )
                
                    {



                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'.php">
									<img src="destino/'.$rowS['des_IMG'].'" class="img-responsive zoom-img" alt=""/> 
									<div class="b-wrapper">
										<h5>'.$rowS['des_NAME'].'</h5>
									</div>
								</a>
							</div>';
						}
							?>
							
									</a>
								</div>
								<div class="tab-1 resp-tab-content">
							<div >
								<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid0">
																<p style="color:#23B684; font-size: 25px">Turismo religioso, el origen de las rutas culturales</p><br>
																<p style="color:white; text-align: justify; font-size: 18px">

El turismo religioso es una estupenda  manera de conocer el origen de las culturas, los lugares sagrados y la historia de los pa??ses. Un tour religioso le ayudar?? a comprender la historia, la espiritualidad, las tradiciones de las comunidades que visita y el mundo tal y como es hoy.
Los viajes religiosos tienen como motor principal de desplazamiento, la fe y el culto a una deidad superior. Grupos y asociaciones acuden a cualquier rinc??n de M??xico  a visitar santuarios espirituales, circuitos religiosos, tumbas de alg??n santo o a realizar alguna peregrinaci??n.
En M??xico se calcula que 30 millones de personas realizan turismo religioso anualmente. A continuaci??n te presentamos los sitios m??s visitados y con mayor arraigo en cultural popular mexicana:
</p>
</div>

								</div>	
					

							<?php
				include ("conexion.php");

               
				$queryS = "SELECT * FROM destinos_table  WHERE des_TYPE='playa'";
                //$queryS = "SELECT * FROM noticia where id_noticia=34; ";
                $resultS = mysql_query ( $queryS, $conexion00 );

                while ( $rowS = mysql_fetch_array ( $resultS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'.php">
									<img src="destino/'.$rowS['des_IMG'].'" class="img-responsive zoom-img" alt=""/> 
									<div class="b-wrapper">
										<h5>'.$rowS['des_NAME'].'</h5>
									</div>
								</a>
							</div>';
						}
							?>
							
									</a>
								</div>
<div class="tab-1 resp-tab-content">
							<div >
								<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid0">
																<p style="color:#23B684; font-size: 25px">Turismo religioso, el origen de las rutas culturales</p><br>
																<p style="color:white; text-align: justify; font-size: 18px">

El turismo religioso es una estupenda  manera de conocer el origen de las culturas, los lugares sagrados y la historia de los pa??ses. Un tour religioso le ayudar?? a comprender la historia, la espiritualidad, las tradiciones de las comunidades que visita y el mundo tal y como es hoy.
Los viajes religiosos tienen como motor principal de desplazamiento, la fe y el culto a una deidad superior. Grupos y asociaciones acuden a cualquier rinc??n de M??xico  a visitar santuarios espirituales, circuitos religiosos, tumbas de alg??n santo o a realizar alguna peregrinaci??n.
En M??xico se calcula que 30 millones de personas realizan turismo religioso anualmente. A continuaci??n te presentamos los sitios m??s visitados y con mayor arraigo en cultural popular mexicana:
</p>
</div>

								</div>	
					

							<?php
				include ("conexion.php");

               
				$queryS = "SELECT * FROM destinos_table  WHERE des_TYPE='recreativo'";
                //$queryS = "SELECT * FROM noticia where id_noticia=34; ";
                $resultS = mysql_query ( $queryS, $conexion00 );

                while ( $rowS = mysql_fetch_array ( $resultS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'.php">
									<img src="destino/'.$rowS['des_IMG'].'" class="img-responsive zoom-img" alt=""/> 
									<div class="b-wrapper">
										<h5>'.$rowS['des_NAME'].'</h5>
									</div>
								</a>
							</div>';
						}
							?>
							
									</a>
								</div>
<div class="tab-1 resp-tab-content">
							<div >
								<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid0">
																<p style="color:#23B684; font-size: 25px">Turismo religioso, el origen de las rutas culturales</p><br>
																<p style="color:white; text-align: justify; font-size: 18px">

El turismo religioso es una estupenda  manera de conocer el origen de las culturas, los lugares sagrados y la historia de los pa??ses. Un tour religioso le ayudar?? a comprender la historia, la espiritualidad, las tradiciones de las comunidades que visita y el mundo tal y como es hoy.
Los viajes religiosos tienen como motor principal de desplazamiento, la fe y el culto a una deidad superior. Grupos y asociaciones acuden a cualquier rinc??n de M??xico  a visitar santuarios espirituales, circuitos religiosos, tumbas de alg??n santo o a realizar alguna peregrinaci??n.
En M??xico se calcula que 30 millones de personas realizan turismo religioso anualmente. A continuaci??n te presentamos los sitios m??s visitados y con mayor arraigo en cultural popular mexicana:
</p>
</div>

								</div>	
					

							<?php
				include ("conexion.php");

               
				$queryS = "SELECT * FROM destinos_table  WHERE des_TYPE='aventura'";
                //$queryS = "SELECT * FROM noticia where id_noticia=34; ";
                $resultS = mysql_query ( $queryS, $conexion00 );

                while ( $rowS = mysql_fetch_array ( $resultS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'.php">
									<img src="destino/'.$rowS['des_IMG'].'" class="img-responsive zoom-img" alt=""/> 
									<div class="b-wrapper">
										<h5>'.$rowS['des_NAME'].'</h5>
									</div>
								</a>
							</div>';
						}
							?>
							
									</a>
								</div>
<div class="tab-1 resp-tab-content">
							<div >
								<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid0">
																<p style="color:#23B684; font-size: 25px">Turismo religioso, el origen de las rutas culturales</p><br>
																<p style="color:white; text-align: justify; font-size: 18px">

El turismo religioso es una estupenda  manera de conocer el origen de las culturas, los lugares sagrados y la historia de los pa??ses. Un tour religioso le ayudar?? a comprender la historia, la espiritualidad, las tradiciones de las comunidades que visita y el mundo tal y como es hoy.
Los viajes religiosos tienen como motor principal de desplazamiento, la fe y el culto a una deidad superior. Grupos y asociaciones acuden a cualquier rinc??n de M??xico  a visitar santuarios espirituales, circuitos religiosos, tumbas de alg??n santo o a realizar alguna peregrinaci??n.
En M??xico se calcula que 30 millones de personas realizan turismo religioso anualmente. A continuaci??n te presentamos los sitios m??s visitados y con mayor arraigo en cultural popular mexicana:
</p>
</div>

								</div>	
					

							<?php
				include ("conexion.php");

               
				$queryS = "SELECT * FROM destinos_table  WHERE des_TYPE='negocio'";
                //$queryS = "SELECT * FROM noticia where id_noticia=34; ";
                $resultS = mysql_query ( $queryS, $conexion00 );

                while ( $rowS = mysql_fetch_array ( $resultS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'.php">
									<img src="destino/'.$rowS['des_IMG'].'" class="img-responsive zoom-img" alt=""/> 
									<div class="b-wrapper">
										<h5>'.$rowS['des_NAME'].'</h5>
									</div>
								</a>
							</div>';
						}
							?>
							
									</a>
								</div>
<div class="tab-1 resp-tab-content">
							<div >
								<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid0">
																<p style="color:#23B684; font-size: 25px">Turismo religioso, el origen de las rutas culturales</p><br>
																<p style="color:white; text-align: justify; font-size: 18px">

El turismo religioso es una estupenda  manera de conocer el origen de las culturas, los lugares sagrados y la historia de los pa??ses. Un tour religioso le ayudar?? a comprender la historia, la espiritualidad, las tradiciones de las comunidades que visita y el mundo tal y como es hoy.
Los viajes religiosos tienen como motor principal de desplazamiento, la fe y el culto a una deidad superior. Grupos y asociaciones acuden a cualquier rinc??n de M??xico  a visitar santuarios espirituales, circuitos religiosos, tumbas de alg??n santo o a realizar alguna peregrinaci??n.
En M??xico se calcula que 30 millones de personas realizan turismo religioso anualmente. A continuaci??n te presentamos los sitios m??s visitados y con mayor arraigo en cultural popular mexicana:
</p>
</div>

								</div>	
					

							<?php
				include ("conexion.php");

               
				$queryS = "SELECT * FROM destinos_table WHERE des_TYPE='cultura'";
                //$queryS = "SELECT * FROM noticia where id_noticia=34; ";
                $resultS = mysql_query ( $queryS, $conexion00 );

                while ( $rowS = mysql_fetch_array ( $resultS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'.php">
									<img src="destino/'.$rowS['des_IMG'].'" class="img-responsive zoom-img" alt=""/> 
									<div class="b-wrapper">
										<h5>'.$rowS['des_NAME'].'</h5>
									</div>
								</a>
							</div>';
						}
							?>
							
									</a>
								</div>
<div class="tab-1 resp-tab-content">
							<div >
								<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid0">
																<p style="color:#23B684; font-size: 25px">Turismo religioso, el origen de las rutas culturales</p><br>
																<p style="color:white; text-align: justify; font-size: 18px">

El turismo religioso es una estupenda  manera de conocer el origen de las culturas, los lugares sagrados y la historia de los pa??ses. Un tour religioso le ayudar?? a comprender la historia, la espiritualidad, las tradiciones de las comunidades que visita y el mundo tal y como es hoy.
Los viajes religiosos tienen como motor principal de desplazamiento, la fe y el culto a una deidad superior. Grupos y asociaciones acuden a cualquier rinc??n de M??xico  a visitar santuarios espirituales, circuitos religiosos, tumbas de alg??n santo o a realizar alguna peregrinaci??n.
En M??xico se calcula que 30 millones de personas realizan turismo religioso anualmente. A continuaci??n te presentamos los sitios m??s visitados y con mayor arraigo en cultural popular mexicana:
</p>
</div>

								</div>	
					

							<?php
				include ("conexion.php");

               
				$queryS = "SELECT * FROM destinos_table  WHERE des_TYPE='pueblos'";
                //$queryS = "SELECT * FROM noticia where id_noticia=34; ";
                $resultS = mysql_query ( $queryS, $conexion00 );

                while ( $rowS = mysql_fetch_array ( $resultS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'.php">
									<img src="destino/'.$rowS['des_IMG'].'" class="img-responsive zoom-img" alt=""/> 
									<div class="b-wrapper">
										<h5>'.$rowS['des_NAME'].'</h5>
									</div>
								</a>
							</div>';
						}
							?>
							
									</a>
								</div>
								<div class="clearfix"> </div>

						</div>	

				</div>
								
				</div>
			</div>
		</div>
	</div>


<div class="footer-main">
		<div class="cpy-right">
			<p>?? Transportes Turisticos 2020
				<a href=""> </a>
			</p>
		</div>
		<div class="footer-social">
	
			<ul>
				<div class="row">

					<div class="col-12" style="color: white"><span class="fa fa-phone icon" aria-hidden="true"></span> +52 (55) 4982 2863</div>

				</div>
			</ul>
		</div>
	</div>


	<!-- modal -->

	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<div class="model-info">
						<img src="images/bg2.jpg" alt="" />
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->

<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap1.1.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	
<!-- //js-scripts -->

	<!--script for portfolio-->
			<script src="js/lightbox-plus-jquery.min.js"> </script>
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});		
			</script>
	<!--//script for portfolio-->
			

<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->

</body>
</html>
