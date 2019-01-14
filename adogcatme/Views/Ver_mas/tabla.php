<?php

$dato=$datos[0];
$dato=$datos[1];
$dato=$datos[2];
$dato=$datos[3];
while($row=mysqli_fetch_array($dato))
{
    echo "

		<div class='col-sm'>
			<div class='card' style='width: 20rem;'>"
    ?><img class='card-img-top' alt='Card image cap' src='data:image/jpg; base64, <?php echo base64_encode($row[4]); ?>' height="200" width="200"/><?php echo"
    	            <div class='card-body' >
	              	<h6 class='card-title'>Nombre: {$row[1]}</h6>	
	              	<h6 class='card-title'>Edad: {$row[2]}</h6> 
	              	<h6 class='card-title'>Color: {$row[3]}</h6>  
	              	<h6 class='card-title'>Raza: {$row[5]}</h6> 
	              	<h6 class='card-title'>Sexo: {$row[6]}</h6> 
	              	<h6 class='card-title'>Especie: {$row[7]}</h6>         
		          	<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bd-example-modal-lg\">Adoptar</button>		              		        
	            </div>
	         </div>
	          
        </div>";
}

?>