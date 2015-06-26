<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__DIR__)) . DS);
define("SRC_DIR", ROOT . 'src' . DS);
define("TEMPLATE_DIR", ROOT . 'template' . DS);
define("CONFIG_DIR", ROOT . 'config' . DS);
define("ROUTE_DIR", ROOT . 'src' . DS . 'route' . DS);


# init app
require SRC_DIR . 'bootstrap.php';



/**
 * Include all files located in routes directory
 */
foreach(glob(ROUTE_DIR . '*.route.php') as $router) {
    require_once $router;
}



$app->run();