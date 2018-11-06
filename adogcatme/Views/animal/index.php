<div class="container">
  <?php
  if(mysqli_num_rows($datos[0])>0){
  ?>
  <h3>Adogcatme</h3>
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Animal</th>
            <th scope="col">Edad</th>
            <th scope="col">Color</th>
            <th scope="col">Raza</th>
            <th scope="col">Sexo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Especie</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($fila=mysqli_fetch_assoc($datos[0])) { ?>
        <tr>
          <td scope="col"><?php echo $fila['nombre']." "?></td>
            <td scope="col"><?php echo $fila['edad']." " ?></td>
            <td scope="col"><?php echo $fila['color']." "?></td>
            <td scope="col"><?php echo $fila['raza_des']." " ?></td>
            <td scope="col"><?php echo $fila['sexo_des']." " ?></td>
            <td scope="col"><?php echo $fila['tipo_des']." " ?></td>
            <td scope="col"><?php echo $fila['especies_des'] ?></td>
            <td scope="col"></td>

          <td scope="col"></td>
          <th scope="col"><button class="btn btn-success editar" data-toggle="modal" data-target="#myModal" id="<?php echo $fila['id_animal'] ?>">Editar</button> </th>
            <th scope="col"><a href="<?php echo URL ?>animal/eliminar/<?php echo $fila['id_animal'] ?>">Eliminar</button></a> </th>
        </tr>

        <?php } ?>
      </tbody>
    </table>
    <?php
  } else { ?>
    <h2>No se encuentra ningun dato</h2>
  <?php } ?>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editando</h4>
        <button type="button" class="close"
              data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form-signin" action="" method="post" id="actualizacion">
          <input type="text" hidden name="id" id="id" value="">
          <div class="form-group">
            <input type="text" class="form-control"
              id="nombre" name="nombre"></input>
            <label for="nombre">Nombre</label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"
              id="edad" name="edad"></input>
            <label for="edad">Edad</label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"
              id="color" name="color"></input>
              <label for="color">Color</label>
          </div>


            <select name="combo1" id="combo1">
                <option value="" disabled>selecciona raza</option>
                <?php
                while ($fila=mysqli_fetch_assoc($datos[1])) {
                    echo "<option value='{$fila['id_raza']}'>{$fila['raza_des']}</option>";
                }
            ?>
            </select>

            <select name="combo2" id="combo2">
                <option value="" disabled>selecciona sexo</option>
                <?php
                while ($fila=mysqli_fetch_assoc($datos[2])) {
                    echo "<option value='{$fila['id_sexo']}'>{$fila['sexo_des']}</option>";
                }
                ?>
            </select>

            <select name="combo3" id="combo3">
                <option value="" disabled>selecciona tipo</option>
                <?php
                while ($fila=mysqli_fetch_assoc($datos[3])) {
                    echo "<option value='{$fila['id_tipo']}'>{$fila['tipo_des']}</option>";
                }
                ?>
            </select>

            <select name="combo4" id="combo4">
                <option value="" disabled>selecciona especie</option>
                <?php
                while ($fila=mysqli_fetch_assoc($datos[4])) {
                    echo "<option value='{$fila['id_especie']}'>{$fila['especies_des']}</option>";
                }
                ?>
            </select>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success actualiza"
          data-dismiss="modal">Actualizar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $(".editar").click(function(){
      var id=$(this).attr('id');
      $.post("<?php echo URL ?>animal/get/"+id,{},function(data){
        if(data){
          data=JSON.parse(data)
          $("#id").val(data['id_animal'])
          $("#nombre").val(data['nombre'])
          $("#edad").val(data['edad'])
          $("#color").val(data['color'])
            $("#id_raza").val(data['id_raza'])
            $("#id_sexo").val(data['id_sexo'])
            $("#id_tipo").val(data['id_tipo'])
            $("#id_especie").val(data['id_especie'])
          $("#myModal").modal('show');
        }
      })
    })
    $(".actualiza").click(function(){
      var arreglo=$("#actualizacion").serializeArray();
      $.post("<?php echo URL ?>animal/edit/",{arreglo:arreglo},function(data){
        window.location.href="<?php echo URL ?>animal/index";
      })
    })
  })
</script>
