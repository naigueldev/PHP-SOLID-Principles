<?php

require $_SERVER['DOCUMENT_ROOT'] . "/PHPSOLIDPrinciples/vendor/autoload.php";

use SRP\Logger;
use SRP\User;

$logger = new Logger();

$user = new User($logger);

echo $user->create(array());
