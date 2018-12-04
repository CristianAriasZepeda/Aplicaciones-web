<?php
namespace AppData\Controller;
use AppData\Model\especies;
use AppData\Model\razas;
use AppData\Model\sexo;

class tiposController
{
    private $tipos,$raza, $sexo,  $especie;
    public function __construct()
    {
        $this->tipos= new \AppData\Model\tipos();
        $this->raza=new \AppData\Model\razas();
        $this->sexo=new \AppData\Model\sexo();
        $this->especie=new \AppData\Model\especies();

    }
    public function index()
    {
        $datos1=$this->raza->getAll();
        $datos2=$this->sexo->getAll();
        $datos3=$this->especie->getAll();
        $datos4=$this->tipos->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;
        return $datos;

    }
    public function agregar(){

        if($_POST)
        {
            $nombre=$_FILES['imagen']['name'];
            $tmp=$_FILES['imagen']['tmp_name'];
            $bytes=file_get_contents($tmp);
            $this->tipos->set('nombre',$_POST["nombre"]);
            $this->tipos->set('edad',$_POST["edad"]);
            $this->tipos->set('color',$_POST["color"]);
            $this->tipos->set('id_raza',$_POST["id_raza"]);
            $this->tipos->set('id_sexo',$_POST["id_sexo"]);
            $this->tipos->set('id_especie',$_POST["id_especie"]);
            $this->tipos->set('img',$bytes);
            $this->tipos->add();
            print_r($_POST);
            header("Location:".URL."tipos");
        }else{

        $datos1=$this->raza->getAll();
        $datos2=$this->sexo->getAll();
        $datos3=$this->especie->getAll();
        $datos4=$this->tipos->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;
        return $datos;
        }
    }


      public function eliminar($id){
       $this->tipos->delete($id[0]);
       header("Location:".URL."tipos");
    }

    public function modificar($id){
        $datos=$this->tipos->edit($id[0]);        
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $nombre=$_FILES['imagen']['name'];
            $tmp=$_FILES['imagen']['tmp_name'];
            $bytes=file_get_contents($tmp);
            $this->tipos->set('nombre',$_POST["nombre"]);
            $this->tipos->set('edad',$_POST["edad"]);
            $this->tipos->set('color',$_POST["color"]);
            $this->tipos->set('id_raza',$_POST["id_raza"]);
            $this->tipos->set('id_sexo',$_POST["id_sexo"]);
            $this->tipos->set('id_especie',$_POST["id_especie"]);
            $this->tipos->set('img',$bytes);
            $this->tipos->add();
            print_r($_POST);
            header("Location:".URL."tipos");
        }
    }
    public function print_pdf()
    {
        $datos=$this->tipos->getAll();
        return $datos;
    }
}
