<?php

require "../config/conex.php";


$nom = $_POST["nom"];


$sql = "SELECT  cod, nombre, edad, peso, fecha_sys FROM personas WHERE nombre like '%".$nom."%'";
print "<table border ='4'>
<tr>
<td>Codigo</td>
<td>Nombre</td>
<td>edad</td>
<td>peso</td>
<td>Fecha</td>
</tr>";

foreach($dbh->query($sql) as $row)
{ 
$cod =$row[0];
$nombre =$row[1];
$edad =$row[2];
$peso =$row[3];
$fecha =$row[4];
  
print "
<tr>
<td>".$cod."</td>
<td>".$nombre."</td>
<td>".$edad."</td>
<td>".$peso."</td>
<td>".$fecha."</td>
</tr>";

}

print "</table>";
?>

