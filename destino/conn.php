<?php
$servername = "localhost";
$username = "id12957852_root";
$password = "12345678";
$database = "id12957852_destinos";

$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_errno){
    echo "error";
}


/*
               
	$queryS = mysqli_query($conn,"SELECT * FROM destinos_table WHERE des_TYPE='religioso'");
               

                while ( $rowS = mysqli_fetch_array ( $queryS ) )
                
                    {



                    
							echo '<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="destino/'.$rowS['des_ID'].'.php">
									<img src="'.$rowS['des_IMG'].'" class="img-responsive zoom-img" alt=""/> 
									<div class="b-wrapper">
										<h5>'.$rowS['des_NAME'].'</h5>
									</div>
								</a>
							</div>';
						}
							
*/

?>
