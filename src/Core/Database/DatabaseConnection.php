<?php

namespace Core\Database;

use Exception;
use PDO;

use Entities\Profile;
class DatabaseConnection {
    private $pdo = null;
    private static $instance = null;

    public static function getConnection() {
        if(self::$instance == null) {
            try {
                // dbname = MYSQL_DATABASE dans le service db du docker-compose.yml
                // port = le port avant les : dans la ligne sous la variable "- ports" dans le service db du docker-compose.yml
                $pdo = new PDO('mysql:host=db;dbname=design;port=3306;charset=utf8', 'root', 'S3CR3T'); 
                $database = new self($pdo); // $database = new Database($pdo);
                self::$instance = $database;
                return self::$instance;
            }
            catch(Exception $error) {
                var_dump($error->getMessage());
            }
        }
        return self::$instance;
    }

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function getAll($table) {
        return $this->pdo->query("SELECT * FROM $table");
    }

    public function saveProfile(Profile $profile) {
        $firstname = $profile->getFirstname();
        $lastname = $profile->getLastname();
        $age= $profile->getAge();
        $this->pdo->query("INSERT INTO Profile (firstname, lastname, age, role) VALUES ($firstname, $lastname, $age, 1)" );

    }
}

