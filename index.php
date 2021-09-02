<?php
require_once('./src/autoload.php');

use Controllers\ProfileController;

use Core\Database\DatabaseConnection;

$connection = DatabaseConnection::getConnection(); // Connection to DB

$controller = new ProfileController();

$route = $_SERVER['REQUEST_URI'];

echo $route;
if($route == '/create_developpeur') {
    echo '<h1>Recruting</h1><br />';
    echo '...Processing<br />';
    $user = $controller->createDeveloppeur('Buddy', 'Rich', 104);

    echo "Bonjour nouveau developpeur ".$user->getName();
}
if($route == '/see_all_users') {

    foreach($connection->getAll('Profile') as $row) {
        print_r($row);
    }
    // echo $controller->getAllUsers();
}

if($route == '/give_salary') {
    // $controller->payroll();
    echo '<h1>GIVE</h1>';
}
if($route == '/see_salary') {
    // $controller->payroll();
    echo '<h1>SALARY</h1>';
}


// Route::get('/', ProfileController, 'index');

