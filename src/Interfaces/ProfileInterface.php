<?php

namespace Interfaces;

interface ProfileInterface {
    public function getName();
    public function getRole();
    public function getAge();
    public function setEnrollDate(DateTime $date);
}