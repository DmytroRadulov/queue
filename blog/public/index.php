<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/dotenv.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';
require_once __DIR__ . '/../config/validator.php';
require_once __DIR__ . '/../config/router.php';

/**
 * @var Illuminate\Routing\Router $router
 */
/**
 * @var Illuminate\Http\Request $request
 */
$responce = $router->dispatch($request);
echo $responce->getContent();
