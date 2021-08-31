<?php

namespace Interfaces;

interface SalaryInterface {
    public function getPay();
    public function getSeniority();
    public function getBonus();
    public function getMalus();
}