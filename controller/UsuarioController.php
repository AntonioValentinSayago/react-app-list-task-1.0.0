<?php

require_once 'model/UsuarioModelo.php';
require_once 'model/ConfigBDModelo.php';
require_once 'config/db_config.php';
class UsuarioController
{
    private $modelo;

    public function __construct()
    {
        // Instanciar el modelo
        $this->modelo = new Modelo();
    }
    public function mostrarUsuarios()
    {
        $usuarios = array();

        // Obtener la conexión a la base de datos desde el modelo
        $conexion = $this->modelo->getConexion();

        // Consulta para obtener los usuarios
        $consulta = "SELECT * FROM notaPedido";
        $resultado = $conexion->query($consulta);

        // Recorrer los resultados y crear objetos Usuario
        while ($fila = $resultado->fetch_assoc()) {
            $usuario = new Usuario($fila['folioNota'], $fila['fechaEntrega'], $fila['dineroCuneta'], $fila['dineroPendiente'], $fila['totalPagar']);
            $usuarios[] = $usuario;
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();

        // Cargar la vista y pasar los datos de los usuarios
        require_once 'views/usuarios.php';
    }
}