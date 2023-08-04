<?php

require_once 'Identity/Computer.php';
require_once 'Functionality/Computer.php';
require_once 'Animal.php';

// that code above will caused an error because we have 2 classes with the same name
// So to solve this conflict we need to use namespace in php
// namespace is a way to group classes, interfaces, functions and constants

// How to use namespace PART 1

// $computerFunctionality = new \Functionality\Computer;
// $computerIdentity = new \Identity\Computer;

// How to use namespace PART 2 -> using aliasing
use \Functionality\Computer as ComputerFunctionality;
use \Identity\Computer as ComputerIdentity;


$computerFunctionality = new ComputerFunctionality();
$computerIdentity = new ComputerIdentity();

var_dump($computerFunctionality->turnOn());
echo '<br>';
var_dump($computerIdentity->brand());

// if we use namespace the code program will work properly
// so the program can use 2 classes with the same name


// How to use static method -> using '::'
echo '<br>';
var_dump(Animal::eat());
echo '<br>';
var_dump(Animal::$species);

?>