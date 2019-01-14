<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
{
	echo "
		<div class='col-sm' >
			<div class='card' style='width: 8rem;'>"
				?><?php echo"
	            <div class='card-body text-center'>
	              	<h5 class='card-title'>{$row[1]}</h5>	             
		          	<div>
			        <button type='button' class='btn btn-outline-success text-dark' data-toggle='modal' id='cut'  data-id='{$row[0]}'>Eliminar </button>	
			        
		        	</div> 		              		        
	            </div>
	         </div>
        </div>";

}
	
?>
