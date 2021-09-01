<?php

namespace Entities;

use Interfaces\ProfileInterface;

class Profile implements ProfileInterface {

    private string $firstname;
    private string $lastname;
    private string $age;

    private AbstractRole $role;
    private $enrollDate;
    // Salary[] $salaries
    protected array $salaries;

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

    // public function setEnrollDate(DateTime $date) {
    //     $this->enrollDate = $date;
    //     return $this;
    // }
    public function addSalary(Salary $salary) {
        $this->salaries[] = $salary;
    }
}