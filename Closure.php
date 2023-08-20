<?php

$anonym = function ($firstName, $lastName){
    return "{$firstName}{$lastName}";
};

function introduce($firstName, $lastName, $action){
    return "Hello, my name is $action($firstName, $lastName)";
}

echo introduce("Bill", "Gates", $anonym);

?>