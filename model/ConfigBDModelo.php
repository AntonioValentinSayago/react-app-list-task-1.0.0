<?php
// Modelo.php

class Modelo {
    private $conexion;

    public function __construct() 
    {
        // Establecer la conexión a la base de datos
        $this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // Manejar errores de conexión
        if ($this->conexion->connect_error) {
            die("Error de conexión a la base de datos: " . $this->conexion->connect_error);
        }
    }

    public function getConexion() 
    {
        return $this->conexion;
    }

    // Otros métodos del modelo...
}
