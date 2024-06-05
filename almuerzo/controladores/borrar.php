<?php

require "../config/conex.php";

$cod = $_POST["codigo"];

$sql_borrar = "DELETE FROM ventas WHERE cod=$cod";

if($dbh->query($sql_borrar)) {
    echo"borrado con exito";
   
}else{




    echo "error";



}


?>