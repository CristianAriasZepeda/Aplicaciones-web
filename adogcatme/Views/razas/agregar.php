<?php
?>
 <form class="was-validated"  method="POST" action="<?php echo URL?>razas/agregar" novalidate id="raza_des" enctype="multipart/form-data" autocomplete="off">
    <div class="container justify-content-md-center">
      <div class="py-5 text-center">
        <h2>Nueva Raza</h2>
        <p >Agrega una nueva raza, puede ser para canino o felino.</p>

      <div class="row justify-content-md-center">
        <div class="col-mb-6 ">

            <div class="mb-0">
              <label for="raza_des">Agregar</label>
              <input class="form-control" id="raza_des" name="raza_des" rows="2" required></input>
              <div class="invalid-feedback" style="width: 100%;">
                  Descripcion requerida
                </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row justify-content-md-center">
        <button href="#!" class="btn btn-primary btn-outline-secondary text-dark" id="enviar" data-id="" type="submit">Enviar</button>
      </div>    
      <div id="carga">
        
      </div>
      <table> 
        <thead>
          <tbody id="body" name="body">
          </tbody>    
        </thead>
      </table>
  </form>  
