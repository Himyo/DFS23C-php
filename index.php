<?php
require_once('./src/autoload.php');

use Core\Routes\Router;
use Controllers\ProfileController;
use Core\Database\DatabaseConnection;
use Entities\Profile;


$path = $_SERVER['REQUEST_URI'];

// echo $route;

// $id = Datebase::getConnection()->saveProfile($profile);
// $controller = new ProfileController();
// $method = 'index';
// $controller->$method();

$routes = [
    '/' => ['ProfileController', 'index' ],

    '/get_all_users' => ['ProfileController', 'all' ],

    '/create_developpeur' => [ 'ProfileController', 'newProfile' ],

    '/get_one_developpeur' => ['ProfileController', 'getOne']
];
// $routes['/'];
// $routes['/get_all_users'];

$router = new Router($routes);
$router->run($path);
// Essayer de créer une class Router qui prends en parametre un tableau de routes
// chaque route correspond a ['<PATH>' => ['<Controller>', '<method>']] PAth = chemin, Controller = un des controllers, method = une methode du controller
// Essayer de faire la fonction run =  run($_SERVER['REQUEST_URI']) en regardant ce qu'est la reflection;
// Essayer de faire une route d'erreur 404


// $router->run($_SERVER['REQUEST_URI']);