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
    ?><img class='card-img-top' height="200" width="200" alt='' src='data:image/jpg; base64, <?php echo base64_encode($row[4]); ?>'/><?php echo"
    	            
	         </div>
	         <div class='card-body' >
	              	<h5 class='card-title'>{$row[1]}</h5>       		              		        
	            </div>
	          
        </div>";
}

?>