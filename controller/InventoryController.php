<?php

require_once 'D:\Programacion\GitRepository\lavanderiaSapito\model\InventoryModelo.php';
require_once 'D:\Programacion\GitRepository\lavanderiaSapito\model\ConfigBDModelo.php';
require_once 'D:\Programacion\GitRepository\lavanderiaSapito\config\db_config.php';

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
            $getProductsBd = new ProductsInventory($fila['idInventario'], $fila['codigoIn'], $fila['nombreProducto'], $fila['descripcion'], $fila['cantidadProducto'], $fila['fecha_creacion']);
            $productsInventory[] = $getProductsBd;
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();

        // Cargar la vista y pasar los datos de los usuarios
        require_once 'D:\Programacion\GitRepository\lavanderiaSapito\views\modulos\InventoryView.php';


    }



}