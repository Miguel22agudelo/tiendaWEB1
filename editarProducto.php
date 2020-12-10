<?php

include("BaseDatos.php");

if (isset($_POST["botonEditar"])){

    $id=$_GET["id"];

    $nombre=$_POST["nombreEditar"];
    $descripcion=$_POST["descripcionEditar"];
    $marca=$_POST["marcaEditar"];
    $precio=$_POST["precioEditar"];

    $transaccion = new BaseDatos();

    $consultaSQL = "UPDATE Producto SET nombre='$nombre', descripcion='$descripcion', marca='$marca', precio='$precio' WHERE id='$id'";

    $transaccion->editarDatos($consultaSQL);

    header("Location:Listado.php");
}

?>