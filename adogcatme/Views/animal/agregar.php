<?php
?>
 <form class="needs-validation"  method="POST" action="<?php echo URL?>tipos/agregar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
    <div class="container justify-content-md-center">
      <div class="py-5 text-center">
        <h2>Agregar</h2>
        <p class="lead">Agrega tipos de historias para posteriormente clasificar cada historia agregada</p>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate>            
            <div class="mb-3">
              <label for="imagen">Selecionar imagen</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="imagen" name="imagen"required>

                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback" style="width: 100%;">Es nesesario selecionar una imagen</div>
              </div>
            </div>          

            <div class="mb-5">
              <label for="descripcion">Descripcion</label>
              <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
              <div class="invalid-feedback" style="width: 100%;">
                  descripcion requerida
                </div>
            </div>
            <br>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <button href="#!" class="btn btn-primary " id="enviar" data-id="" type="submit">Enviar</button>
      </div>    
      <div id="carga">
        
      </div>
      <table> 
        <thead>
          <tbody id="body" name="body">
          </tbody>    
        </thead>
      </table>
          <br>  
          <br>  
          <br>  
          <br>  
          <br>  
          <br>  
  </form>  
