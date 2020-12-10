<?php

class BaseDatos
{

    
    public $usuarioBD = "root";
    public $passwordBD = "";


    
    public function __construct()
    {
    }


    public function conectarBD()
    {
        $infoBD = "mysql:host=localhost;dbname=bdTiendaWeb1";

        try {
            $conexionBD = new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
            return ($conexionBD);
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function agregarDatos($consultaSQL)
    {
        $conexionBD = $this->conectarBD();

        $consultaInsertarDatos = $conexionBD->prepare($consultaSQL);

        $resultado = $consultaInsertarDatos->execute();

        if ($resultado) {
            echo ("Se agregó el registro con éxito");
        } else {
            echo ("Error agregando el registro");
        }
    }

    public function consultarDatos($consultaSQL)
    {
        $conexionBD = $this->conectarBD();

        $consultaBuscarDatos = $conexionBD->prepare($consultaSQL);
        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        $resultado = $consultaBuscarDatos->execute();

        return ($consultaBuscarDatos->fetchAll());
    }

    public function eliminarDatos($consultaSQL){
        $conexionBD = $this->conectarBD();

        $consultaEliminarDatos = $conexionBD->prepare($consultaSQL);

        $resultado = $consultaEliminarDatos->execute();

        if ($resultado) {
            echo ("Se eliminó el registro con éxito");
        } else {
            echo ("Error eliminando el registro");
        }
    }

    public function editarDatos($consultaSQL){
        $conexionBD = $this->conectarBD();

        $consultaEditarDatos = $conexionBD->prepare($consultaSQL);

        $resultado = $consultaEditarDatos->execute();

        if ($resultado) {
            echo ("Se editó el registro con éxito");
        } else {
            echo ("Error editando el registro");
        }
    }

}
