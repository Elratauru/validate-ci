<?php

require __DIR__.'/../vendor/autoload.php';
use ValidateCI\Validator;

//Create a new Validator.
$validator = new Validator();
$validation = $validator->validate('1.234.567-8');

//Validation done! Display response.
echo ($validation == 1) ? 'This number is valid!' : 'This number is NOT valid.';