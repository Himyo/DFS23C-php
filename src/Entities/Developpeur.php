<?php

namespace Entities;
class Developpeur extends AbstractRole {

    public function __construct() {
        $this->name = 'developpeur';
        $this->priority = 3;
    }
}