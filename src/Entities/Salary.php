<?php

namespace Entities;
use Interfaces\SalaryInterface;

class Salary implements SalaryInterface {

    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getPay(){}
    public function getSeniority(){}
    public function getBonus(){}
    public function getMalus(){}   
};