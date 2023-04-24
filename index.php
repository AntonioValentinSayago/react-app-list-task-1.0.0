<?php
require_once 'controller/PlantillaController.php';
require_once 'controller/UsuarioController.php';
require_once 'controller/InventoryController.php';


require_once 'model/UsuarioModelo.php';
require_once 'model/InventoryModelo.php';

/* $ctlUsuario = new UsuarioController();
$ctlUsuario->mostrarUsuarios();
$ctlInventory = new InventoryModelo();
$ctlInventory->getProductosInventory(); */


$ctlPlantilla = new ControladorPlantilla();
$ctlPlantilla->ctrPlantilla();