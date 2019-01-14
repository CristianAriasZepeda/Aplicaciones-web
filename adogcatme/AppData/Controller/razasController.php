<?php
namespace AppData\Controller;
class razasController
{
    private $tipos;
    public function __construct()
    {
        $this->tipos= new \AppData\Model\razas();
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
            $this->tipos->set('raza_des',$_POST["raza_des"]);
            $this->tipos->add();
            header("Location:".URL."razas");
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

            $this->tipos->set('id_raza',$_POST["id_raza"]);
            $this->tipos->set('raza_des',$_POST["raza_des"]);
            $this->tipos->update();
            header("Location:".URL."razas");
        }
    }
}
