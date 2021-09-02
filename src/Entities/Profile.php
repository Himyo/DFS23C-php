<?php

namespace Entities;

use Interfaces\ProfileInterface;

class Profile implements ProfileInterface {

    private int $id; // $this->id
    private string $firstname; // $this->firstname
    private string $lastname; // $this->lastname

    private string $age; // $this->age

    private AbstractRole $role; // $this->role

    protected array $salaries; // $this->salaries

    public function __construct(string $firstname, string $lastname, int $age) {
       $this->firstname = $firstname; 
       $this->lastname = $lastname; 
       $this->age = $age; 
    }

    public function setId(int $id): Profile {
        $this->id = $id;
        return $this;
    }

    public function getName(): string {
        return $this->firstname." ".$this->lastname;
    }

    public function getFirstname(): string {
        return $this->firstname;
    }

    public function getLastname(): string {
        return $this->lastname;
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

    public function addSalary(Salary $salary) {
        $this->salaries[] = $salary;
    }
}