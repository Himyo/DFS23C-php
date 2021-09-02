<?php

namespace Entities;

class Director extends AbstractRole {

    public function __construct() {
        $this->name = 'director';
        $this->priority = 5;
    } 
    
    public function giveSalary(Profile $profile) {
        $profileRole = $profile->getRole();
        $salary = new Salary(10000);
        $profile->addSalary($salary);
    }
}