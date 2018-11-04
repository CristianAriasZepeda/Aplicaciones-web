<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
            <h1 class="center">Agregar</h1>
            <div class="row">
                <div class="">
                    <form action="" method="post" enctype="multipart/form-data"
                          id="form_estado">
                        <label for="">Animal</label>
                        <input type="text" name="animal">
                        <div class="modal-footer">
                            <input type="button" class="btn green" id="agregar_animal"
                                   value="Aceptar">
                            <button type="reset" class="btn red" id="close_modal">
                                Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
<script type="text/javascript">
    $('.modal').modal();
    $("#modal1").modal("open");
    $("#close_modal").click(function (){
        $("#cont_modal").empty();
    });
    $("#agregar_estado").click(function () {
        $.post("<?php echo URL?>sexo/crear",$("#form_estado").serialize(),function (res) {
            $("main").empty().append(res);
            $("#cont_modal").empty();
        })
    })
</script>
