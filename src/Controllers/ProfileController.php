<?php
namespace Controllers;

use Core\Database\DatabaseConnection;

use Entities\Developpeur;
use Entities\Profile;
use Entities\Director;


class ProfileController {

    public function __construct() {}

    public function index() {
        echo 'index';
    }

    public function newProfile($firstname, $lastname, $age){
        $profile =  new Profile($firstname, $lastname, $age);
        echo 'New Profile';
        echo '<br /> Profile Name: '.$profile;
    }

    public function getProfile(int $id) {
        // $profile = DatabaseConnection::getConnection()->getProfileById($id);
        // $salaries = DatabaseConnection::getConnection()->getSalaryById($id);
        // $profile->setSalaries($salaries);
        // return $profile;
        echo 'getProfile '+$id;
    }

    // public function createDeveloppeur($firstname, $lastname, $age) {
    //     $role = new Developpeur();

    //     $newProfile = new Profile($firstname, $lastname, $age, $role);
    //     DatabaseConnection::getConnection()->saveProfile($newProfile);

    //     return $newProfile;
    // }

    // public function createDirector() {
    //     $firstname = 'Hello';
    //     $lastname = 'Hey';
    //     $age = 26;
    //     $role = new Director();

    //     $newProfile = new Profile($firstname, $lastname, $age, $role);

    //     return $newProfile;
    // }


    // public function payroll(Profile $director, Profile $developpeur) {    }
}