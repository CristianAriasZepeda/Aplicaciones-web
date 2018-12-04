<?php namespace AppData\Controller;
	use AppData\Model\animal;
use AppData\Model\especies;
use AppData\Model\razas;
use AppData\Model\sexo;
use AppData\Model\tipos;

class animalController{
		private $animal, $raza, $sexo,  $especie, $img;
    private $tipos;
		function __construct(){
		    $this->animal=new animal();
            $this->raza=new razas();
            $this->sexo=new sexo();
            $this->especie=new especies();
		}


		function index(){
			$datos[0]=$this->animal->getAnimal();
			$datos[1]=$this->raza->getAll();
            $datos[2]=$this->sexo->getAll();
            $datos[4]=$this->especie->getAll();
            $datos1=$this->animal->getAll();
            $datos[0]=$datos1;

            return $datos;
		}

    public function agregar()
    {
        if($_POST)
        {
            $this->animal->set('id',$_POST["id"]);
            $this->animal->set("nombre",$_POST['nombre']);
            $this->animal->set("edad",$_POST['edad']);
            $this->animal->set("color",$_POST['color']);
            $this->animal->set("raza",$_POST['id_raza']);
            $this->animal->set("sexo",$_POST['id_sexo']);
            $this->animal->set("especie",$_POST['id_especie']);


            $nombre=$_FILES['imagen']['name'];
            $tmp=$_FILES['imagen']['tmp_name'];
            //echo $nombre.'  '.$tmp ;
            $bytes=file_get_contents($tmp);
            $this->animal->set('img',$bytes);
            $this->animal->add();
            header("Location:".URL."animal");
        }

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
		    echo("nombre");
			//$data=$_POST['arreglo'];
            $this->animal->set('id',$_POST["id"]);
            $this->animal->set("nombre",$_POST['nombre']);
            $this->animal->set("edad",$_POST['edad']);
            $this->animal->set("color",$_POST['color']);
            $this->animal->set("raza",$_POST['id_raza']);
            $this->animal->set("sexo",$_POST['id_sexo']);
            $this->animal->set("especie",$_POST['id_especie']);
            			$this->animal->updatePer();

		}

		function __destruct(){

		}

    public function print_pdf()
    {
        $datos=$this->animal->getAll();
        return $datos;
    }
	}


?>
