<?php

$container = $app->getContainer();

$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    return $logger;
};
/*
$container['view'] = function ($c) {
  $settings = $c->get('settings')['renderer'];
  return new \Slim\Views\PhpRenderer($settings['template_path']);
};
*/

//Twig View. Setting the twig templates folder
$container['view'] = function ($container){
	$view = new \Slim\Views\Twig(__DIR__ . '/../templates');
	$view->addExtension(new \Slim\Views\TwigExtension(
		$container->router,
		$container->request->getUri()
	));
	return $view;
};

  $capsule = new \Illuminate\Database\Capsule\Manager;
  $capsule->addConnection($container['settings']['db']);
  $capsule->setAsGlobal();
  $capsule->bootEloquent();
  $container['db'] = function ($container) use($capsule) {
  return $capsule;
};

$container['UserController'] = function($container){
	return new \App\Controllers\UserController($container->view);
};

$container['TipoPerfilController'] = function($c){
  return new \App\Controllers\TipoPerfilController($c);
};

$container['TipoUsuarioController'] = function($c){
  return new \App\Controllers\TipoUsuarioController($c);
};

$container['ActividadController'] = function($c){
  return new \App\Controllers\ActividadController($c);
};

$container['ObligacionController'] = function($c){
  return new \App\Controllers\ObligacionController($c);
};

$container['PuntoAtencionController'] = function($c){
  return new \App\Controllers\PuntoAtencionController($c);
};

$container['GlosarioController'] = function($c){
  return new \App\Controllers\GlosarioController($c);
};

$container['LoginController'] = function($container){
	return new \App\Controllers\LoginController($container->view);
};
