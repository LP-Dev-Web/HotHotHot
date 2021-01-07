<?php

use App\Autoloader;
use App\Core\Exceptions\RouterException;
use App\Core\Routes\Router;

require_once __DIR__ . '/../Autoloader.php';
Autoloader::register();

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DEBUG', false);

$router = new Router($_GET['url']);

$router->add([
    '/' => ['App\Controllers', 'GroupController::index'],
    '/{int}' => ['App\Controllers', 'GroupController::random']
]);

try {
    $router->run();
} catch (RouterException $e) {
    if (DEBUG)
        echo $e->getMessage();
    return $e->error404();
}