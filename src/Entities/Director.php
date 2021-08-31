<?php

namespace Entities;

class Director extends AbstractRole {

    public function __construct() {
        $this->name = 'director';
        $this->priority = 5;
    }
}