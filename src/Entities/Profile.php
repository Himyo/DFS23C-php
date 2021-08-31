<?php

namespace Entities;

use DateTime;
use Interfaces\ProfileInterface;

class Profile extends Salary implements ProfileInterface {

    private $firstname;
    private $lastname;
    private $age;

    private $role;
    private $enrollDate;

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
    
    public function setRole(AbstractRole $role) {
        $this->role = $role;
        return $this;
    }

    public function setEnrollDate(DateTime $date) {
        $this->enrollDate = $date;
        return $this;
    }

}