<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */
namespace AppData\Model;
class especies
{
    private $tabla="especies";
    private $id,$especie;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
    function getAll()
    {
        $sql="SELECT * from especies";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    
    function add()
    {    
        $stm=$this->conexion->especiesadd($this->especies_des);
    }
    function delete($id)
    {
        
        $sql="delete from especies WHERE id_especie='{$id}'";

        $this->conexion->querysimple($sql);
    }
    function edit($id)
    {
        $sql="select id_especie, especies_des from {$this->tabla} where id_especie='{$id}'";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function getOne($id)
    {
        $sql="SELECT * FROM especies where id_especie='{$id}'";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function update(){
        $stm=$this->conexion->especiessup($this->especie, $this->id);
        
    }
}