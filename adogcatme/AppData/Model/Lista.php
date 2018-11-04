<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 02:29 PM
 */

namespace AppData\Model;


class Lista
{
    private $id_animal;
    private $nombre;
    private $edad;
    private $color;
    private $id_raza;
    private $id_seco;
    private $id_tipo;
    private $id_especie;
    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }
    function add()
    {

    }
    function get()
    {
        $sql="select * from animal";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function update()
    {

    }
    function delete()
    {

    }
}