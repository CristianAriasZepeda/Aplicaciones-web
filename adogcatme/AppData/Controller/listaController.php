<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;


class listaController
{
    private $animal;
    public function __construct()
    {
        $this->animal= new \AppData\Model\Lista();
    }

    public function index()
    {
        $datos=$this->animal->get();
        return $datos;
    }
    public function crear()
    {

    }

}