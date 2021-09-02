<?php
namespace Controllers;

use Entities\Developpeur;
use Entities\Profile;
use Entities\Director;

class ProfileController {

    public function __construct() {}

    public function createDeveloppeur($firstname, $lastname, $age) {
        $role = new Developpeur();

        $newProfile = new Profile($firstname, $lastname, $age, $role);

        return $newProfile;
    }

    public function createDirector() {
        $firstname = 'Hello';
        $lastname = 'Hey';
        $age = 26;
        $role = new Director();

        $newProfile = new Profile($firstname, $lastname, $age, $role);

        return $newProfile;
    }


    public function payroll(Profile $director, Profile $developpeur) {    }
}