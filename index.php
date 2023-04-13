<?php
require_once 'controller/InventoryController.php';


$usuarioController = new InventoryModelo();
$usuarioController->getProductosInventory();