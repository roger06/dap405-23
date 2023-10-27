<?php


function prepend($name) {
    
    $name = '&pound;'.$name . 'append';
    return $name;
}

$name = 'max';
    echo prepend($name);



?>