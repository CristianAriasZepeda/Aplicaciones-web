<?php namespace AppData\Controller;
	use AppData\Model\animal;
use AppData\Model\especies;
use AppData\Model\razas;
use AppData\Model\sexo;
use AppData\Model\tipos;

class animalController{
		private $animal, $raza, $sexo, $tipo, $especie;
		function __construct(){
		    $this->animal=new animal();
            $this->raza=new razas();
            $this->sexo=new sexo();
            $this->tipo=new tipos();
            $this->especie=new especies();
		}


		function index(){
			$datos[0]=$this->animal->getAnimal();
			$datos[1]=$this->raza->getAll();
            $datos[2]=$this->sexo->getAll();
            $datos[3]=$this->tipo->getAll();
            $datos[4]=$this->especie->getAll();

            return $datos;
		}

		function eliminar($id){
			$this->animal->set("id",$id);
			$this->animal->delete();
			?>
			<script type="text/javascript">
				$(document).ready(function(){
					swal({
						title: "Success",
						text: "Eliminado correctamente",
						timer: 2000
					});
					setTimeout(function(){
						window.location.href="<?php echo URL ?>animal/index"
					},2100);
				})
			</script>
			<?php
		}
		function get($id){
		    //echo ($id[0]);
			//$this->animal->set("id",$id);
			$datos=$this->animal->getOne($id[0]);
			if(mysqli_num_rows($datos)>0){
				$datos=mysqli_fetch_assoc($datos);
			}
			echo json_encode($datos);
		}
		function edit(){
			$data=$_POST['arreglo'];
			$this->animal->set("id",$data[0]['value']);
			$this->animal->set("nombre",$data[1]['value']);
			$this->animal->set("edad",$data[2]['value']);
			$this->animal->set("color",$data[3]['value']);
            $this->animal->set("raza_des",$data[4]['value']);
            $this->animal->set("sexo_des",$data[5]['value']);
            $this->animal->set("tipo_des",$data[6]['value']);
            $this->animal->set("especies_des",$data[7]['value']);
			$this->animal->updatePer();
			?>
			<script type="text/javascript">
				
			</script>
			<?php
		}

		function __destruct(){

		}
	}
?>
