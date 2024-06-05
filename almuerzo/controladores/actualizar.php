.
<?php
print "<script src='js/sweetalert.min.js'></script>";
require "config/conex.php";

$cod_cer = $_POST["cod"];
$valor = $_POST["valor"];


$sql= "UPDATE venta
SET 
valor=".$valor." WHERE cod=".$cod_cer.""; 
if($dbh->query($sql)) {

 
    print "<script>
    swal('Informacion actualizada correctamente.','', 'success').then(function() {
        window.location = 'factualizar.php';
    });
    </script>";
}else{
    echo "error";
}


?>