<?php
    $row=mysqli_fetch_array($datos[3]);
?>
<form class="needs-validation"  method="POST" id='actualizacion' action="<?php echo URL?>tipos/actualizar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
    <div class="container justify-content-md-center">
        <div class="py-5 text-center">
            <h2>Actualizar</h2>
            <h5>Modifique registros previamente agregados</h5>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-8 order-md-1">
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="titulo">Nombre</label>
                        <input type="hidden" name="id" value="<?php echo $row[0]?>">
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" value="<?php echo $row[1]?>" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            El titulo es requerido
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="fecha">Edad</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="fecha" name="fecha"placeholder="fecha" value="<?php echo $row[2]?>" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                la fecha es requerida
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="fecha">Color</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="fecha" name="fecha"placeholder="fecha" value="<?php echo $row[3]?>" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                la fecha es requerida
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <select id="id_raza" type="text" name="id_raza">
                            <option disabled selected>Selecciona Raza</option>
                            <?php
                            $result3=$datos[0];
                            while ($row=mysqli_fetch_array($result3))

                                echo "<option selected value='{$row[0]}'>{$row[1]}</option>";
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="id_sexo" type="text" name="id_sexo">
                            <option disabled selected>Selecciona sexo</option>
                            <?php
                            $result3=$datos[1];
                            while ($row=mysqli_fetch_array($result3))

                                echo "<option selected value='{$row[0]}'>{$row[1]}</option>";
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="id_especie" type="text" name="id_especie">
                            <option  disabled selected>Selecciona especie</option>
                            <?php
                            $result3=$datos[2];
                            while ($row=mysqli_fetch_array($result3))
                                echo "<option selected value='{$row['id_especie']}'>{$row[1]}</option>";
                            echo $row[0];
                            ?>
                        </select>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <button href="#!" class="btn btn-primary " id="enviar" data-id="" type="submit">Enviar</button>
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
<script type="text/javascript">
    $(document).ready(function(){
        var datos=JSON.parse(<?php echo $datos[1]; ?>);
        console.log(datos);
        console.log("ok");

        $.post("<?php echo URL ?>tipos/modificar/"+id,{},function(data){
                if(data){
                    data=JSON.parse(data)
                    ///$("#id").val(data['id_animal'])
                    $("#nombre").val(data['nombre'])
                    $("#edad").val(data['edad'])
                    $("#color").val(data['color'])
                    $("#id_raza").val(data['id_raza'])
                    $("#id_sexo").val(data['id_sexo'])
                    $("#id_especie").val(data['id_especie'])
                    $("#myModal").modal('show');
                }
            })
        })
       /* $(".actualiza").click(function(){
            var arreglo=$("#actualizacion").serialize();
            $.post("<//? //php echo URL ?>animal/edit/",arreglo,function(data){
                //window.location.href="<//?//php echo URL ?>animal";
            })
        })
    })*/
</script>

