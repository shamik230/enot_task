<?php
use Modules\Users\Controller as UsersController;
use System\Router;
use System\Template;

require_once 'init.php';
require_once __DIR__ . '/vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    Template::getInstance()->addGlobalVar('baseUrl', $_ENV['BASE_URL']);
    $router = new Router($_ENV['BASE_URL']);
    // $i = '[1-9]+\d*';
	// $map = [ 1 => 'id' ];
	$router->addRoute('/^$/', UsersController::class);
    
    $uri = $_SERVER['REQUEST_URI'];
	$activeRoute = $router->resolvePath($uri);

	$c = $activeRoute['controller'];
	$m = $activeRoute['method'];

	$c->$m();
	$html = $c->render();
	echo $html;


} catch (Exception $e) {
    prettyPrint($e->getMessage());
}

function prettyPrint($item) {
    echo '<pre>';
    print_r($item);
    echo '</pre>';
}