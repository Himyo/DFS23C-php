<?php

namespace Entities;

abstract class AbstractRole {
    protected string $name;
    protected int $priority; 

    public function getName(): string {
        return $this->name;
    }

    public function getPriority(): int {
        return $this->priority;
    }

 
}