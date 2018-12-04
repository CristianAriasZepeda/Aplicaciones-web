<?php
$row=mysqli_fetch_array($datos);
?>
<form class="needs-validation"  method="POST" action="<?php echo URL?>User/actualizar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
    <div class="container justify-content-md-center">
        <div class="py-5 text-center">
            <h2>Actualizar</h2>
            <p class="lead">Modifica registros previamente agregados</p>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-8 order-md-1">
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="imagen">Selecionar imagen</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input " id="imagen" name="imagen"  required value="data:image/jpg; base64, <?php echo base64_encode($row[3]); ?>">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback" style="width: 100%;">Es nesesario selecionar una imagen</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="titulo">Nombre</label>
                        <input type="hidden" name="id" value="<?php echo $row[0]?>">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $row[1]?>" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            El nombre es requerido
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="fecha">Edad</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="edad" name="edad"placeholder="edad" value="<?php echo $row[2]?>" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                la edad es requerida
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="color">Color</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="color" name="color"placeholder="color" value="<?php echo $row[3]?>" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                El color es requerido
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <select id="id_raza" type="text" name="id_raza">
                                <option disabled selected>Selecciona Raza</option>
                                <?php
                                $result3=$datos[0];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="id_sexo" type="text" name="id_sexo">
                                <option disabled selected>Selecciona sexo</option>
                                <?php
                                $result3=$datos[1];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <select id="id_especie" type="text" name="id_especie">
                                <option  disabled selected>Selecciona especie</option>
                                <?php
                                $result3=$datos[2];
                                while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row['id_especie']}'>{$row[1]}</option>";
                                echo $row[0];
                                ?>
                            </select>
                        </div>
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