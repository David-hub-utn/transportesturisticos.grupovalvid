

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
<nav class="navbar navbar-default sticky-top">
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
				<a href="index" class="active">Inicio</a>
			</li>

			<li>
				<a href="formulario" class="active">Contacto</a>
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
					<p style="color:blue; font-size: 25px">Turismo religioso, el origen de las rutas culturales</p><a href="#galeria" class="scroll">Galeria</a><br>
										<p style="color:black; text-align: justify; font-size: 18px">


El turismo religioso es una estupenda  manera de conocer el origen de las culturas, los lugares sagrados y la historia de los pa??ses. Un tour religioso le ayudar?? a comprender la historia, la espiritualidad, las tradiciones de las comunidades que visita y el mundo tal y como es hoy.
Los viajes religiosos tienen como motor principal de desplazamiento, la fe y el culto a una deidad superior. Grupos y asociaciones acuden a cualquier rinc??n de M??xico  a visitar santuarios espirituales, circuitos religiosos, tumbas de alg??n santo o a realizar alguna peregrinaci??n.
En M??xico se calcula que 30 millones de personas realizan turismo religioso anualmente. A continuaci??n te presentamos los sitios m??s visitados y con mayor arraigo en cultural popular mexicana:<div id="galeria"></div>
</p>
</div>

								</div>	
     
							<?php
					include "conn.php";
					$queryS = mysqli_query($conn,"SELECT * FROM destinos_table WHERE des_TYPE='religioso'");
               

                while ( $rowS = mysqli_fetch_array ( $queryS ) )
                
                    {



                    
							echo '
							<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'">
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
																<p style="color:blue; font-size: 25px">Turismo en playas</p><a href="#galeria1" class="scroll">Galeria</a><br>
																<p style="color:black; text-align: justify; font-size: 18px">

Destinos de playa que debes visitar al menos una vez en la vida
Pensar en playa es pensar en sol, mar, arena y diversi??n. Y todo eso lo tienen las playas de M??xico, un destino ideal para que puedas disfrutar de las promociones y de unas refrescantes vacaciones en la playa.
En las costas de M??xico  podr??s darte unas vacaciones en playa del Carmen, el oc??ano azul intenso de las bah??as del Pac??fico, tomar el sol a la orilla de las c??lidas y transparentes olas del Mar Caribe en Quintana Roo o incluso descansar en las hermosas costas del Golfo de M??xico. 
Aprovecha alguno de los paquetes de viaje  econ??micos que tenemos para ti, ac??rcate y reserva con nosotros ???Tu agencia de viajes Transportes Tur??sticos???
Atr??vete a reservar alguna oferta para tus pr??ximas vacaciones, explorando destinos de playa que destacan por su belleza. Son verdaderos para??sos, muchos de ellos aislados de las grandes ciudades tur??sticas.
Con el periodo vacacional de verano a la vuelta de la esquina, te compartimos algunos de los viajes de playa 2020 m??s bellos del planeta.<div id="galeria1"></div>
</p>
</div>

								</div>	
					

							<?php
					include "conn.php";
					$queryS = mysqli_query($conn,"SELECT * FROM destinos_table WHERE des_TYPE='playa'");
               

                while ( $rowS = mysqli_fetch_array ( $queryS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'">
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
																<p style="color:blue; font-size: 25px">Turismo recreativo</p><a href="#galeria2" class="scroll">Galeria</a><br>
																<p style="color:black; text-align: justify; font-size: 18px">

M??xico se caracteriza por tener una gran variedad de lugares que no puedes dejar de conocer, como sus asombrosos destinos recreativos. Al visitar alguno de estos, podr??s darte un respiro, conectar con la naturaleza, pasear en bicicleta, reunirte con tu familia, etc.
Es bien sabido que la recreaci??n es importante en la vida de cualquier persona porque nos ayuda a liberarnos de la carga de estr??s. Es ese ???respiro??? de las tareas que nos ocasionan estr??s y como tal, afecta a todos los grupos de poblaci??n.
Si deseas pasar una tarde distinta y agradable en compa????a de tus familiares o amigos, te nombramos los mejores lugares recreativos de M??xico.<div id="galeria2"></div>
</p>
</div>

								</div>	
					

							<?php
					include "conn.php";
					$queryS = mysqli_query($conn,"SELECT * FROM destinos_table WHERE des_TYPE='recreativo'");
               

                while ( $rowS = mysqli_fetch_array ( $queryS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'">
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
																<p style="color:blue; font-size: 25px">Turismo de aventura</p><a href="#galeria3" class="scroll">Galeria</a><br>
																<p style="color:black; text-align: justify; font-size: 18px">

Entre los diferentes tipos de turismo, el de aventura se ha convertido en una excelente opci??n, muy atractiva para aquellos que disfrutan de los deportes extremos, los cuales liberan adrenalina y crean experiencias ??nicas e inigualables. Nuestro pa??s cuenta con una gran cantidad de destinos los cuales son perfectos para practicar dicha actividad.
En M??xico hay infinidad de paredes naturales para escalar o bajar; rutas para hacer a pie, en bicicleta, a caballo o volando; y r??os para descender, y todos los lugares para el turismo de aventura, estos destinos mexicanos de aventura que re??nen belleza natural y otros encantos tur??sticos, asegurando un viaje divertido. El turismo de aventura es una opci??n que atrae a muchos j??venes, ya que representa una experiencia de esparcimiento y de liberaci??n f??sica, a la que tambi??n se le suman la cultura y la naturaleza. 
Te damos algunas opciones que puedes visitar en tu pr??ximo viaje:<div id="galeria3"></div>
</p>
</div>

								</div>	
					

							<?php
					include "conn.php";
					$queryS = mysqli_query($conn,"SELECT * FROM destinos_table WHERE des_TYPE='aventura'");
               

                while ( $rowS = mysqli_fetch_array ( $queryS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'">
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
																<p style="color:blue; font-size: 25px">Centros de negocio</p><a href="#galeria4" class="scroll">Galeria</a><br>
																<p style="color:black; text-align: justify; font-size: 18px">

Un centro de negocios es un servicio que surge de la combinaci??n entre recursos humanos y materiales, con el fin de lograr el crecimiento y desarrollo de las diversas organizaciones del sector empresarial. Este tipo de formaciones, tambi??n son conocidas como ???hotel de empresas??? o business center, ya que se componen de diversas compa????as, las cuales, no se dedican necesariamente a un mismo rubro productivo, sino que pueden estar integradas por varias firmas que operan desde un mismo centro. Este n??cleo es regulado por una empresa due??a de las instalaciones y es la encargada de la formaci??n de tales agrupaciones.<div id="galeria4"></div>
</p>
</div>

								</div>	
					

							<?php

                    					include "conn.php";
					$queryS = mysqli_query($conn,"SELECT * FROM destinos_table WHERE des_TYPE='negocio'");
               

                while ( $rowS = mysqli_fetch_array ( $queryS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'">
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
																<p style="color:blue; font-size: 25px">Turismo cultural</p><a href="#galeria5" class="scroll">Galeria</a><br>
																<p style="color:black; text-align: justify; font-size: 18px">

Todo M??xico es un museo interactivo. Arte en las calles, expresiones antropol??gicas ins??litas en el transporte, historia profunda engarzada con modernidad, pero adem??s, todo el pa??s cuenta con una gama amplia y diversa de museos gratis. Desde las colecciones de peque??as comunidades que muestran sus historias locales, a los imponentes depositarios de nuestra cultura. En cualquier estado existen museos de visita obligada para sus habitantes y turistas. Aqu?? tienes un recorrido para conocer los grandes espacios de la historia y cultura de M??xico.
La Ciudad de M??xico es una de las m??s bellas metr??polis del mundo y no es una sorpresa por qu?? tantos viajeros nacionales y extranjeros eligen a esta como destino tur??stico cultural y vienen a estos lugares culturales para maravillarse con su oferta cultural. De hecho, nuestra capital es una de las ciudades con m??s destinos culturales en el mundo ??tiene m??s de 180!
Entre los principales destinos culturales en M??xico encontrar??s recintos dedicados a muestras de historia, unos ejemplos son los museos en Chapultepec como el Castillo de Chapultepec que funcion?? como residencia de Carlota y Maximiliano de Habsburgo, y museos para ni??os, como el Museo Papalote del Ni??o. Tambi??n descubrir??s museos con exposiciones de arte contempor??neo, como el Museo Universitario de Arte Contempor??neo (MUAC) y el Museo Jumex.
<div id="galeria5"></div>
</p>
</div>

								</div>	
					

							<?php
					include "conn.php";
					$queryS = mysqli_query($conn,"SELECT * FROM destinos_table WHERE des_TYPE='cultura'");
               

                while ( $rowS = mysqli_fetch_array ( $queryS ) )
                
                    {

                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'">
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
																<p style="color:blue; font-size: 25px">Turismo en pueblos m??gicos</p><a href="#galeria6" class="scroll">Galeria</a><br>
																<p style="color:black; text-align: justify; font-size: 18px">

Si buscas a donde ir a menos de 2 horas de la cdmx, siempre tienes la opci??n de visitar los Pueblos M??gicos. Los lugares califican para ser Pueblos M??gicos debido a la riqueza cultural de la regi??n en la que se ubican, su pasado ind??gena, la arquitectura del lugar, su legado hist??rico, as?? como las tradiciones que se mantienen en estos sitios. Cuando realizamos viajes a pueblos m??gicos fuera de la ciudad nos da impresi??n que la gente camina con calma, pero en realidad es que nosotros siempre vamos por la vida con mucha prisa. 
Date un respiro con ???Tu agencia de viajes a pueblos m??gicos Transportes Tur??sticos???, aprovechando alguno de los paquetes a pueblos m??gicos baratos que tenemos para ti y b??jale dos rayitas y deja que la tranquilidad de estos pueblos m??gicos cerca de la cdmx poco conocidos te contagien y te permita disfrutar de sus sonidos, sabores, tours y escenarios naturales.<div id="galeria6"></div>
</p>
</div>

								</div>	
					

							<?php
					include "conn.php";
					$queryS = mysqli_query($conn,"SELECT * FROM destinos_table WHERE des_TYPE='pueblos'");
               

                while ( $rowS = mysqli_fetch_array ( $queryS ) )
                
                    {
                  

                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'">
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
<!-- start-smoth-scrolling DAAAAAVIIID-->








	<script src="js/bootstrap.js"></script>

</body>
</html>
