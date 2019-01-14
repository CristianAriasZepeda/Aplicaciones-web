<?php
?>
     <div class="container-fluid">
      <div class="row">
        <main role="main" class="col-md-12">          
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Razas Existentes</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a class="nav-link btn btn-sm btn-outline-secondary text-dark" href="<?php echo URL ?>razas/agregar">
                  Agregar Raza
                </a>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row " id="body_table">
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
<div class="modal fade" id="mimodaleliminar" tabindex="-1" role="dialog" aria-labelledby="mimodaleliminar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Esta seguro de eliminar el registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary btn-success" data-dismiss="modal">Cancelar</button>
        <button type="button"  id="eliminar_ok" class="btn btn-primary btn-danger" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>        



<script type="text/javascript">
  $(document).ready(function(){
    $("#body_table").on("click","button#cut",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>razas/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#mimodaleliminar").modal("show");
        });
        $("#eliminar_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table").empty().append(res);
            });
        });
  })

</script>