<div id="modal_registro" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_animal" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Animal</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="nombre" type="text"  name="nombre">
                            <label for="nombre"  >Nombre</label>
                        </div>


                        <div class="input-field col s5">
                            <input id="edad" type="text"  name="edad">
                            <label for="edad" >edad</label>
                        </div>

                        <div class="input-field col s5">
                            <input id="color" type="text"  name="color">
                            <label for="color" >color</label>
                        </div>


                    </div>
                    <div class="row">

                        <div class="input-field col s5">
                            <select id="id_raza" type="text" name="id_raza">
                                <option disabled selected>Selecciona la raza</option>
                                <?php
                                $result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="id_raza">Raza</label>
                        </div>
                        <div class="input-field col s1">
                            <div class="input-field col s1">
                                <a class="btn-floating waves-effect waves-light btn modal-trigger" href="#modal_raza" ><i class="icon-plus #00838f orange accent-3"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="input-field col s5">
                            <select id="id_sexo" type="text" name="id_sexo">
                                <option disabled selected>Selecciona el sexo</option>
                                <?php
                                $result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="id_sexo">Sexo</label>
                        </div>
                        <div class="input-field col s1">
                            <div class="input-field col s1">
                                <a class="btn-floating waves-effect waves-light btn modal-trigger" href="#modal_sexo" ><i class="icon-plus #00838f orange accent-3"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="input-field col s5">
                            <select id="id_tipo" type="text" name="id_tipo">
                                <option disabled selected>Selecciona el tipo</option>
                                <?php
                                $result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="id_tipo">Tipo</label>
                        </div>
                        <div class="input-field col s1">
                            <div class="input-field col s1">
                                <a class="btn-floating waves-effect waves-light btn modal-trigger" href="#modal_tipo" ><i class="icon-plus #00838f orange accent-3"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="input-field col s5">
                            <select id="id_especie" type="text" name="id_especie">
                                <option disabled selected>Selecciona la especie</option>
                                <?php
                                $result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                            <label for="id_especie">Especie</label>
                        </div>
                        <div class="input-field col s1">
                            <div class="input-field col s1">
                                <a class="btn-floating waves-effect waves-light btn modal-trigger" href="#modal_especie" ><i class="icon-plus #00838f orange accent-3"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_animal_ok" class="btn orange accent-3" font color="#f6f2cc">Registrar</a>
                        </div>
                        <div class="input-field col s12">
                            <a href="#!" id="update_animal_ok" class="btn modal-close orange accent-3" font color="#f6f2cc"  data-id="">Actualizar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card-panel">
    <h4 align="center">Animales Registrados
        <span class="right">
            <a href="#modal_registro" class="btn orange accent-3 white-text modal-trigger" font color="#f6f2cc" id="add_animal">
                <i class="material-icons ">add</i>
            </a>
        </span>
    </h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="buscar" placeholder="Buscar" type="text">
        </div>
    </div>



    <table class="responsive-table" id="tabla_content">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Color</th>
            <th>Raza</th>
            <th>Sexo</th>
            <th>Tipo</th>
            <th>Especie</th>
            <th></th>
            <th></th>

        </tr>
        </thead>

        <tbody id="body_table">
        <?php
        require_once ("tabla.php");
        ?>
        </tbody>
    </table>


    <div class="center">
        <a href="<?php echo URL?>lista/print_pdf" target="_blank" id="imprimir_pdf" class="btn orange accent-3 accent-3 tooltipped" font color="#f6f2cc" data-position="bottom" data-delay="50" data-tooltip="Imprimir"><i class="material-icons">picture_as_pdf</i></a>
        <a href="#!"  id="graficar_animales" class="btn orange accent-3  tooltipped" font color="#f6f2cc" data-position="bottom" data-delay="50" data-tooltip="Graficar"><i class="material-icons">equalizer</i></a>
    </div>
</div>

<div id="modal_grafica" class="modal">
    <div class="modal-content">
        <h5>Gráfica de animales</h5>
        <p>

        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" id="cancelar" class="modal-close red black-text waves-effect cyan lighten-2 btn-flat">Cerrar</a>
    </div>
</div>

<div id="modal_eliminar" class="modal">
    <div class="modal-content">
        <h5>¿Desea Eliminar el Registro?</h5>
        <hr />
    </div>
    <div class="modal-footer">
        <a href="#!" id="eliminar_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
        <a href="#!" id="cancelar" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>
<div id="modal_estado_habitacion" class="modal center-align ">
    <div class="modal-content">
        <div class="card-panel teal #00b8d4"><h4 class="left"><a class=" text-black"></a></h4><h4 align="center">Estado de la Habitación</h4></div>


        <div class="row">
            <form class="col s12 pad" autocomplete="off">
                <div class="row">
                    <div class="input-field input-field col s10">
                        <i class="mdi-action-verified-user prefix icon-circleci"></i>
                        <input id="descripcion_estado" type="number" class="validate center" >
                        <label for="descripcion_estado"  data-error="Incorrecto" data-success="Correcto">Descripción</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s9">
                        <button class="btn  cyan lighten-2" type="submit" name="action">Registar</button>
                    </div>
                    <div class="input-field col s3">
                        <button class="btn red waves-effect waves-light righ #00838f cyan darken-3" type="submit" name="action">Limpiar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="modal_raza" class="modal center-align ">
    <div class="modal-content">
        <div class="card-panel">
            <form action="" id="save_raza" enctype="multipart/form-data" autocomplete="off">
                <h4 align="center">Raza</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field input-field col s5">
                            <input id="raza_des" type="text" name="raza_des" >
                            <label for="raza_des" >Raza</label>
                        </div>

                    </div>


                    <div class="modal-fixed-footer">
                        <div class="input-field col s12">
                            <a href="#!" id="save_raza_ok" class="btn cyan lighten-2">Registrar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        $('select').material_select();
        $(".modal").modal();
        $("#add_animal").click(function(){
            $("#update_animal_ok").hide();
            $("#save_animal_ok").show();
        });
        $("#save_animal_ok").click(function(){
            $("#save_animal").submit();

        });

        $("#body_table").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>lista/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#modal_eliminar").modal("open");
        });
        $("#eliminar_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table").empty().append(res);
                Materialize.toast('Se ha eliminado correctamente', 2500);
            });
        });

        $("#body_table").on("click","a.btn_modificar",function(){
            $("#save_animal_ok").hide();
            $("#update_animal_ok").show();
            var id=$(this).data("id");
            $.get("<?php echo URL?>lista/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#update_animal_ok").data("id",datos["id_animal"]);
                $("#nombre").val(datos["nombre"]);
                $("#edad").val(datos["edad"]);
                $("#color").val(datos["color"]);
                $("#raza_des").val(datos["id_raza"]);
                $("#sexo_des").val(datos["id_sexo"]);
                $("#tipo_des").val(datos["id_tipo"]);
                $("#especies_des").val(datos["id_especie"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_registro").modal("open");
                console.log(res);
            });
        });
        $("#update_animal_ok").click(function(){
            var id=$(this).data("id");
            $.post("<?php echo URL?>lista/actualizar/"+id,$("#save_habitacion").serialize(),function(res){
                $('#save_animal').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });

        $("#save_animal").validate({
            rules:{
                numero_habitacion:{
                    required:true,
                    maxlength: 3,
                    number:true,
                },
                descripcion:{
                    required:true,
                    maxlength: 20,
                    minlength: 5,
                    lettersonly:true,
                },
                id_tipoh:{
                    required:true,
                },
                nomestadohabitacion:{
                    required:true,
                },

            },
            messages:{
                numero_habitacion:{
                    required:"Ingresa un número",
                    maxlength:"Máximo 3 digitos",
                    number:"Solo números",


                },
                descripcion:{
                    required:"Agrega una descripción",
                    minlength: "Descripcion insuficiente",

                },
                id_tipoh:{
                    required:"Selecciona un tipo ",
                },
                nomestadohabitacion:{
                    required:"Selecciona un estado ",
                }

            },
            errorPlacement: function(error, element) {
                $(element)
                    .closest("form")
                    .find("label[for='" + element.attr("id") + "']")
                    .attr('data-error', error.text());
            },
            submitHandler:function(form){
                $.post("<?php echo URL?>lista/crear",$("#save_animal").serialize(),function(res){
                    $("#body_table").empty().append(res);
                    $('#save_animal').find('input, select, textarea').val('');
                    Materialize.updateTextFields();
                    $("#modal_registro").modal("close");
                })
            }
        });

        $("#buscar").keyup(function() {
            $.uiTableFilter($("#tabla_content"), this.value);
        });

        $("#graficar_animales").click(function(){
            $.get("<?php echo URL?>lista/graficar",function(res){
                $("#modal_grafica .modal-content p").empty().append(res);
                $("#modal_grafica").modal("open");

            });
        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#add_tipo").click(function(){
            $("#save_raza_ok").show();
        });
        $("#save_raza_ok").click(function(){
            $.post("<?php echo URL?>lista/crearraza",$("#save_raza").serialize(),function(res){
                $("#body_table").empty().append(res);
                $('#save_raza').find('input').val('');
                Materialize.updateTextFields();
                Materialize.toast('Se ha insertado correctamente', 2500);
            })
        });
    });
    $("#save_raza").validate({

        rules:{
            raza_des:{
                required:true,
                maxlength: 20,
                minlength: 4,
                lettersonly:true,
        },
        messages:{
            raza_des:{
                required:"Ingresa descripción"

            },

        },
        errorPlacement: function(error, element) {
            $(element)
                .closest("form")
                .find("label[for='" + element.attr("id") + "']")
                .attr('data-error', error.text());
        },
        submitHandler:function(form){
            $.post("<?php echo URL?>razas/crear",$("#save_raza").serialize(),function(res){
                $("#body_table").empty().append(res);
                $('#save_raza').find('input').val('');
                Materialize.updateTextFields();
                $("#modal_registro").modal("close");
            })
        }
    });
</script>