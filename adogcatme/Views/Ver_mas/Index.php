<?php
?>
     <div class="container-fluid">
      <div class="row">
        <main role="main" class="col-md-12">

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h5>Animales disponibles para adopción</h5>
          </div>
          <div class="container">
            <div class="row">
                  <?php
                    require_once ("tabla.php");
                  ?>
            </div>
          </div>
          
        </main>

      </div>
    </div>
    <br>
    <br><br>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Procesos y Requisitos de Adopción</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Nuestro proceso de adopción consiste en:</h5>
                <ul>
                    <li>
                        <p>Rellenar y firmar nuestra solicitud de adopción. Pueden pedir la solicitud de adopción a través de esta página, entrando a nuestra página de Facebook: facebook/adogcatme o llenando el formulario desde el siguiente <a target="_blank" href="https://goo.gl/forms/l23RNALUfbqMksOX2">link</a>.
                            Por favor lean la solicitud con atención y rellénenla de forma clara. La pueden mandar escaneada o fotografiada de manera que veamos todos sus datos y respuestas.</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <p>Una vez recibida su solicitud coordinaremos con usted una visita a su domicilio con el fin de evaluar en qué condiciones vivirá el peque que decidan adoptar.</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <p>Si la adopción es aprobada necesitaremos copia de su IFE o identificación oficial y copia de su comprobante domiciliario.</p>
                    </li>
                </ul>
                <h6>Requisitos para adoptar:</h6>

                        <p>
                            1. Ser mayor de edad.
                            <br>
                            2. Que todos los miembros de la familia estén de acuerdo en la adopción.
                            <br>
                            3. Que la familia tenga capacidad para alimentarlos, mantenerlos limpios y proporcionarles atención veterinaria.
                            <br>
                            4. Familias responsables que los quieran como a un miembro más, los protejan y cuiden.</p>

                <ul>
                    <li>
                        <p>Nuestros peques no pueden ser cedidos, ni regalados, ni vendidos, ni abandonados, ni llevados al antirrábico. Si no los quieren tienen que ponerse en contacto con nosotros de nuevo para coordinar la manera de encontrarles una nueva familia. Se pide a los adoptantes que avisen con 15 días de anticipo para podernos dar tiempo de encontrar la mejor solución. </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>