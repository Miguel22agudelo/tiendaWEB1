<?php

include("BaseDatos.php");

if(isset($_POST["botonEnvio"])){
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $descripcion=$_POST["descripcion"];
    $precio=$_POST["precio"];

    $transaccion=new BaseDatos();
    
    $consultaSQL="INSERT INTO Producto(nombre, marca, descripcion, precio) VALUES ('$nombre','$marca','$descripcion','$precio')";

    $transaccion->agregarDatos($consultaSQL);


}
