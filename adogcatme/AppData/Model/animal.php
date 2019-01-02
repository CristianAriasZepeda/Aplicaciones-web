<?php namespace AppData\Model;
	class animal {
		private $id, $nombre, $edad, $color, $raza, $sexo, $especie, $img;
    public function __construct() {
        $this->conexion= new conexion();
		}
		public function set($atributo,$valor) {
				$this->$atributo=$valor;
		}
		public function get($atributo) {
				return $this->$atributo;
		}
		public function getAnimal(){
			$sql="SELECT animal.id_animal, animal.nombre, animal.edad, animal.color, animal.img, razas.raza_des,
 					sexos.sexo_des, especies.especies_des 
 					FROM animal,sexos,especies,razas 
 					WHERE animal.id_raza=razas.id_raza 
 					AND animal.id_sexo=sexos.id_sexo 
 					AND animal.id_especie=especies.id_especie ORDER BY id_animal ASC";

			$datos=$this->conexion->queryResultados($sql);
			return $datos;
		}

		public function delete(){
			$sql="DELETE FROM animal
			WHERE id_animal='{$this->id}'";
			$this->conexion->querysimple($sql);

		}
		public function getOne($id){
			$sql="SELECT animal.id_animal, animal.nombre, animal.edad, animal.color, animal.img, razas.id_raza,
 					sexos.id_sexo,  especies.id_especie 
 					FROM animal,sexos,especies,razas 
 					WHERE animal.id_raza=razas.id_raza 
 					AND animal.id_sexo=sexos.id_sexo 
 					 
 					AND animal.id_especie=especies.id_especie
 					 AND animal.id_animal='{$id}'
 					 ORDER BY id_animal ASC";

			$datos=$this->conexion->queryResultados($sql);
			return $datos;
		}
		public function updatePer(){
			$sql="UPDATE animal SET nombre='{$this->nombre}', edad='{$this->edad}',
 					color='{$this->color}', id_raza='{$this->raza}', id_sexo='{$this->sexo}'
 					 , id_especie='{$this->especie}' WHERE id_animal='$this->id'";
			$this->conexion->querysimple($sql);
		}
        function getAllRazas()
        {
            $sql="select * from {$this->tabla} order by id_raza asc";
            $datos=$this->conexion->queryResultados($sql);
            return $datos;
        }

        function add()
        {
            $stm=$this->conexion->tiposadd($this->img,$this->descr);
        }

        function getAll()
        {
            $sql="SELECT * from animal";
            $datos=$this->conexion->queryResultados($sql);
            return $datos;
        }
	}
?>
