<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 11:56 AM
 */

namespace Views;


use http\Url;

class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <html>
        <head>

            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="<?php echo URL?>Public/css/bootstrap-grid.min.css.map"  media="screen,projection"/>
            <link rel="stylesheet" href="<?php echo URL?>Public/css/bootstrap.css">
            <link rel="stylesheet" href="<?php echo URL?>Public/css/estilos.css">

            <script src="<?php echo URL?>Public/js/jquery.min.js"></script>
            <script src="<?php echo URL?>Public/js/bootstrap.min.js"></script>
        </head>

        <body>
        <section id="cover">
                <div id="cover-texto">
                    <div class="container">
                        <div class="row">
                            <div class="col sn-12">
                                <h1 class="display-3"> ADOGCATME</h1>
                                <p>No compres mejor adopta</p>


                            </div>

                        </div>
                    </div>
                </div>

            </section>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Bienvenido</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo URL?>inicio" class="black-text">Inicio</a>


                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL?>quienessomos">Quienes Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Adopciones</a>
                            <a class="dropdown-item" href="#">Donaciones</a>
                            <a class="dropdown-item" href="#">Galeria</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>





        <?php
    }

    public static function footer()
    {
        ?>

        <footer id="footer">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-3">

                        <p>Creado por <a href="http://facebook.com/sergio.gonzalezreyes1"> ADOGCATME</a></p>
                    </div>

                    <div class="col-sm-3">
                        <ul class="list-unstyled">
                            <li><a href=""></a>Inicio</li>
                            <li><a href=""></a>Acerca de</li>
                            <li><a href=""></a>Quienes somos</li>
                            <li><a href=""></a>Siguenos</li>


                        </ul>

                    </div>
                    <div class="col-sm-3">

                        <h5>Seguir</h5>
                        <a href="http://facebook.com/sergio.gonzalezreyes1" class="btn btn-sm btn-secondary-outline">Twitter</a>
                        <a href="http://facebook.com/sergio.gonzalezreyes1" class="btn btn-sm btn-secondary-outline">Facebook</a>
                        <a href="http://facebook.com/sergio.gonzalezreyes1" class="btn btn-sm btn-secondary-outline">Youtube</a>
                    </div>
        </footer>
        </body>
        </html>
        <?php
    }
}