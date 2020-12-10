<?php

include("BaseDatos.php");


$id=$_GET["id"];


$transaccion=new BaseDatos();

$consultaSQL="DELETE FROM Producto WHERE id='$id'";

$transaccion->eliminarDatos($consultaSQL);

header("Location:Listado.php");

?>
