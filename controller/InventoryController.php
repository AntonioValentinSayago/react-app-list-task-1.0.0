<?php

require_once '../model/InventoryModelo.php';
require_once '../model/ConfigBDModelo.php';
require_once '../config/db_config.php';

class InventoryModelo
{
    private $modelo;

    public function __construct()
    {
        // Instanciar el modelo
        $this->modelo = new Modelo();
    }

    public function getProductosInventory()
    {
        // Obtener la conexión a la base de datos desde el modelo
        $conexion = $this->modelo->getConexion();

        $productsInventory = array();


        /* A SQL query that selects all columns from the "inventario" table, and then executes the
        query using the database connection stored in the variable ``. The result of the
        query is stored in the variable ``. */
        $selectProductsInventory = "SELECT * FROM inventario";
        $getSelectProductsInventory = $conexion->query($selectProductsInventory);

        // Recorrer los resultados y crear objetos Usuario
        while ($fila = $getSelectProductsInventory->fetch_assoc()) {
            $usuario = new ProductsInventory($fila['nombreProducto'], $fila['cantidadProducto'], $fila['descripcion'], $fila['estatus'], $fila['fecha_creacion'], $fila['codigoIn']);
            $usuarios[] = $usuario;
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();

        // Cargar la vista y pasar los datos de los usuarios
        require_once 'views/usuarios.php';


    }



}