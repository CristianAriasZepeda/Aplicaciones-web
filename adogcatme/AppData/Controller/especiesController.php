<?php
namespace AppData\Controller;
class especiesController
{
    private $tipos;
    public function __construct()
    {
        $this->tipos= new \AppData\Model\especies();
    }
    public function index()
    {
        $datos1=$this->tipos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function agregar()
    {
        if($_POST)
        {
            $this->tipos->set('especies_des',$_POST["especies_des"]);
            $this->tipos->add();
            header("Location:".URL."especies");
        }

    }

      public function eliminar($id){
       $this->tipos->delete($id[0]);
       $datos1=$this->tipos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function modificar($id){
        $datos=$this->tipos->edit($id[0]);        
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {

            $this->tipos->set('id_especie',$_POST["id_especie"]);
            $this->tipos->set('especies_des',$_POST["especies_des"]);
            $this->tipos->update();
            header("Location:".URL."especies");
        }
    }
}
