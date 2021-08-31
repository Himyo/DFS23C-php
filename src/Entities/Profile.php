<?php

namespace Entities;

use Interfaces\ProfileInterface;

class Profile implements ProfileInterface {

    private $firstname;
    private $lastname;
    private $age;
    private $role;

    public function __construct(string $firstname, string $lastname, int $age, AbstractRole $role) {
       $this->firstname = $firstname; 
       $this->lastname = $lastname; 
       $this->age = $age; 
       $this->role = $role;
    }

    public function getName(): string {
        return $this->firstname." ".$this->lastname;
    }

    public function getRole() {
       return $this->role; 
    }

    public function getAge() {
        return $this->age;
    }

}