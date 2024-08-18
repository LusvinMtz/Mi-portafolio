<?php
// Cargar el archivo de configuración
require_once 'config/config.php';

// Cargar las clases principales desde la carpeta 'core'
require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Model.php';

// Auto-cargar las clases adicionales si se necesitan
spl_autoload_register(function($className){
    require_once 'core/' . $className . '.php';
});
