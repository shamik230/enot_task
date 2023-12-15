<?php

use Modules\Converter\Controllers\Index as ConverterController;
use Modules\Users\Controllers\Auth as AuthController;
use Modules\Users\Controllers\Logout as LogoutController;
use Modules\Users\Controllers\Register as RegisterController;
use System\Exceptions\AuthException;
use System\Router;
use System\Template;

require_once __DIR__ . '/vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    Template::getInstance()->addGlobalVar('baseUrl', $_ENV['BASE_URL']);
    $router = new Router($_ENV['BASE_URL']);
    // $i = '[1-9]+\d*';
	// $map = [ 1 => 'id' ];
	$router->addRoute('/^$/', AuthController::class, 'login');
	$router->addRoute('/^home$/', ConverterController::class);
	$router->addRoute('/^register$/', RegisterController::class, 'register');
    $router->addRoute('/^logout$/', LogoutController::class,'logout');
    
    $uri = $_SERVER['REQUEST_URI'];
	$activeRoute = $router->resolvePath($uri);

	$c = $activeRoute['controller'];
	$m = $activeRoute['method'];

	$c->$m();
	$html = $c->render();
    // echo password_hash("12345", PASSWORD_DEFAULT);
    // session_unset();
	echo $html;


} catch (AuthException $e) {
    header("Location: " . $_ENV['BASE_URL']);
	exit();
} catch (Exception $e) {
    prettyPrint($e->getMessage());
}

function prettyPrint($item) {
    echo '<pre>';
    print_r($item);
    echo '</pre>';
}