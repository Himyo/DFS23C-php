<?php

namespace Entities;

abstract class AbstractRole {
    protected $name;
    protected $priority; 

    public function getName() {
        return $this->name;
    }

    public function getPriority() {
        return $this->priority;
    }
}