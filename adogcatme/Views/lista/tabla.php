<?php

$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
echo "
     <tr>
            <td>{$row['nombre']}</td>
            <td>{$row['edad']}</td>
            <td>{$row['color']}</td>
            <td>{$row['raza_des']}</td>
            <td>{$row['sexo_des']}</td>
            <td>{$row['tipo_des']}</td>
            <td>{$row['especies_des']}</td>
            <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_animal']}'></a></td>
            <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_animal']}' href='#!'></a></td>
    </tr>";
?>