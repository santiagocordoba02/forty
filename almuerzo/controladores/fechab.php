<?php

require "../config/conex.php";


$f1 = $_POST["f1"];
$f2 = $_POST["f2"];


$sql = "SELECT  cod, nombre, edad, peso, fecha_sys FROM personas WHERE fecha_sys BETWEEN '".$f1." 00:00:00'  AND '".$f2." 23:59:59'";
echo $sql;

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

