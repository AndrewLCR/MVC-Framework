<?php

// CONFIGURACION DE LA BASE DE DATOS 
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "andres3409");
define("DB_DBNAME", "cube");

// CONFIGURACION DE LOS DIRECTORIOS
define("DIR_CTL", "app/controller/");
define("DIR_MOD", "app/model/");
define("DIR_VIW", "app/view/");
define("DIR_OBJ", "app/object/");
define("DIR_LIB", "lib/common/");
define("DIR_PDF", "lib/tcpdf/");
define("DIR_HLP", "lib/helper/");

// CONFIGURACION DE URL
define("SITE_PROT", "http");
define("SITE_URL", SITE_PROT . "://" . $_SERVER['HTTP_HOST'] . "/Cube/");
define("DIR_INC", $_SERVER['DOCUMENT_ROOT'] . "/Cube/app/view/includes/");
define("REQUEST_URI", $_SERVER['REQUEST_URI']);

date_default_timezone_set('America/Costa_Rica');

// CONFIGURACION DEFAULT DEL MENU HOME
define("HOME", SITE_URL);
?>