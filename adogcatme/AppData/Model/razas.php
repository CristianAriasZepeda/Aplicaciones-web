<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */
namespace AppData\Model;
class razas
{
    private $tabla="razas";
    private $id,$raza;
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
        $sql="SELECT * from razas";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    
    function add()
    {    
        $stm=$this->conexion->razasadd1($this->raza_des);
    }
    function delete($id)
    {
        
        $sql="delete from razas WHERE id_raza='{$id}'";

        $this->conexion->querysimple($sql);
    }
    function edit($id)
    {
        $sql="select id_raza, raza_des from {$this->tabla} where id_raza='{$id}'";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function getOne($id)
    {
        $sql="SELECT * FROM razas where id_raza='{$id}'";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function update(){
        $stm=$this->conexion->razasup($this->raza, $this->id);
        
    }
}