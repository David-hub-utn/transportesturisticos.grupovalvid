<?php 
	$hostname="localhost";
	$username="id12680122_root";
	$password="12345678";
	$database="id12680122_destinos";

	$conexion00=mysqli_connect($hostname,$username,$password);

	mysqli_select_db($database,$conexion00);


               
				$queryS = "SELECT * FROM destinos_table WHERE des_TYPE='religioso'";
                //$queryS = "SELECT * FROM noticia where id_noticia=34; ";
                $resultS = mysqli_query ( $queryS, $conexion00 );

                while ( $rowS = mysqli_fetch_array ( $resultS ) )
                
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