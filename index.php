<?php
require_once 'controller/PlantillaController.php';
require_once 'controller/UsuarioController.php';


require_once 'model/UsuarioModelo.php';

$ctlUsuario = new UsuarioController();
$ctlUsuario->mostrarUsuarios();


$ctlPlantilla = new ControladorPlantilla();
$ctlPlantilla->ctrPlantilla();