<?php
require "../config/conex.php";


$cliente = $_POST["nombre"];
$valor = $_POST["valor"];
$n_producto = $_POST["n_producto"];
$producto = $_POST["producto"];


$sql_insertar= "INSERT INTO ventas (cliente,valor,n_producto,producto,fecha_sys) 
VALUES ('$cliente,$valor,$n_producto,'$producto',now())";

if($dbh->query($sql_insertar)) {

    echo"dato enviado";


}else{
    echo "error";
}


?>