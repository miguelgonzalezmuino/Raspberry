<?php require_once 'funciones_bd.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Proyectos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h2><u>Listado de Proyectos</u></h2>
        <div><a href="formulario_nuevo_proyecto.php">Nuevo Proyecto</a></div>
        <br>
        <?php
            $bd = conectaBd();
            $consulta = "SELECT * FROM listado_proyectos";
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                echo "Error en la consulta";
            } else {
                echo "<table border=1>";
                echo "<tr>";
                echo "<th>Proyecto</th>";
                echo "<th>Creador</th>";
                echo "<th>Descripcion</th>";                
                echo "</tr>";
                echo "</table>";
            }            
            $bd = null;
        ?>   
    </body>
</html>