<?php
require_once('./src/autoload.php');

use Entities\Profile;
use Entities\Director;

$firstname = 'Earl';
$lastname = 'Sweatshirt';
$age = 26;
$role = new Director();

$nouveauProfile = new Profile($firstname, $lastname, $age, $role);
$nomDuNouveauProfile = $nouveauProfile->getName();

// echo "Hello, $nomDuNouveauProfile ";
// echo '<br />';
// echo "Encore Hello, ".$nomDuNouveauProfile;
// echo '<br />';
// echo "Le role du profile est: ".$nouveauProfile->getRole()->getName();



// echo '<br />';
// echo __DIR__;
