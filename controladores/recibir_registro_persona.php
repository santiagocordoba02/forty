<?php
//paso 1: importar la libreria de la BD
require "../config/conexion.php";

//paso 2:almacenar las variables
$nombrePersona = $_POST["nombre"];
$documento = $_POST["documento"];
$fechaNacimiento = $_POST["dt_fecha"];
$Numerocelular = $_POST["celular"];
$sexo = $_POST["sexo"];
echo $documento;

//paso 3: armar el sql en una variable
$sql_insertar = "INSERT INTO persona
(fecha_sys, nombre, documento, fecha_nacimiento, celular, sexo) 
VALUES (now(),'".$nombrePersona."', '".$documento."', '".$fechaNacimiento."', '".$Numerocelular."', ".$sexo.")";

//paso 4: enviar a la red 
if($dbh->query($sql_insert))
{
      echo "informacion registrada correctamente";

    }else
 { 

        echo "error";
    }





?>