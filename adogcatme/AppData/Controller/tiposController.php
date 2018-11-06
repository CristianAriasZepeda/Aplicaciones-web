<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;


class tiposController
{
    private $tipos;
    public function __construct()
    {
        $this->tipos=new \AppData\Model\tipos();
    }

    public function index()
    {
        $datos= $this->tipos->getAll();
        return $datos;
       // echo "Hola desde mi controlador";
    }
    public function crear()
    {
        if($_POST)
        {
            $this->tipos->set("tipo_des",$_POST['tipo_des']);
            $this->tipos->add();
            header("Location:".URL."tipos?msg=ok");
        }
    }
    public function eliminar($id){
          //print_r($id);
       $this->tipos->delete($id[0]);
       header("Location:".URL."tipos");
    }
    public function modificar($id){
        //print_r($id);
        $datos=$this->tipos->edit($id[0]);
        return $datos;
    }
    public function update($id){
        //print_r($id);
        $this->tipos->set("id_tipo",$_POST['id_tipo']);
        $this->tipos->set("tipo_des",$_POST['tipo_des']);
        $this->tipos->update();
        header("Location:".URL."tipos");

    }
}



