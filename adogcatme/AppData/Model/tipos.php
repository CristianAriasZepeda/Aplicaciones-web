<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 02:43 PM
 */

namespace AppData\Model;


class tipos
{
    private $tabla="tipos";
    private $id_tipo;
    private $tipo_des;

    function __construct()
    {
        $this->conexion=new conexion();
    }
    public function set($atributo, $valor){
        $this->$atributo=$valor;
    }
    public function get($atributo){
        return $this->$atributo;
    }
    function add()
    {
        $sql="insert into tipos values('0','{$this->tipo_des}')";
        $this->conexion->querysimple($sql);
    }

    function getAll()
    {
        $sql="select * from {$this->tabla} order by id_tipo asc";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function update()
    {
        $sql="update  {$this->tabla} set 
          tipo_des='{$this->tipo_des}' 
          where id_tipo='{$this->id_tipo}'";
        $this->conexion->querysimple($sql);
    }
    function edit($id){

        $sql="select * from {$this->tabla} where id_tipo={$id}";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_tipo='{$id}'";
        $this->conexion->querysimple($sql);
    }
}