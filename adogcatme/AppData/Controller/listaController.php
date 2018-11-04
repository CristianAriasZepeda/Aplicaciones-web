<?php

namespace AppData\Controller;


class listaController
{
    private $animal,$raza,$sexo,$especie;

    public function __construct()
    {
        $this->animal= new \AppData\Model\lista();
        $this->raza=new \AppData\Model\razas();
        $this->sexo= new \AppData\Model\sexo();
        $this->especie= new \AppData\Model\especies();
    }

    public function index()
    {
        $datos1=$this->animal->getAll();
        $datos2=$this->raza->getAll();
        $datos3=$this->sexo->getAll();
        $datos4=$this->especie->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;
        return $datos;
    }
    public function crear(){
        if($_POST)
        {
            $this->animal->set('nombre',$_POST["nombre"]);
            $this->animal->set('edad',$_POST["edad"]);
            $this->animal->set('color',$_POST["color"]);
            $this->animal->set('id_raza',$_POST["raza_des"]);
            $this->animal->set('id_seco',$_POST["sexo_des"]);
            $this->animal->set('id_tipo',$_POST["tipo_des"]);
            $this->animal->set('id_especie',$_POST["especies_des"]);

            $this->animal->add();
            $datos1=$this->animal->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }

    public function eliminar($id)
    {
        $this->animal->delete($id[0]);
        $datos1=$this->animal->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->animal->getOne($id[0]);
        return $datos;
    }


    public function actualizar($id)
    {
        if($_POST)
        {
            $this->animal->set("id_animal",$id[0]);
            $this->animal->set('nombre',$_POST["nombre"]);
            $this->animal->set('edad',$_POST["edad"]);
            $this->animal->set('color',$_POST["color"]);
            $this->animal->set('id_raza',$_POST["raza_des"]);
            $this->animal->set('id_seco',$_POST["sexo_des"]);
            $this->animal->set('id_tipo',$_POST["tipo_des"]);
            $this->animal->set('id_especie',$_POST["especies_des"]);
            $this->animal->update();
            $datos1=$this->animal->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }



    public function print_pdf()
    {
        $datos=$this->animal->getAll();
        return $datos;
    }


    public function graficar()
    {
        $datos=$this->animal->graficar();
        return $datos;

    }
    public function crearraza(){
        if($_POST)
        {
            $this->raza->set('raza_des',$_POST["raza_des"]);

            $this->raza->add();
            $datos=$this->raza->getAll();
            return $datos;
        }

    }
}