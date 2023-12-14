<?php
    $myObj = new stdClass();

    $myObj->colour = 'Red';
    $myObj->rating = 9;
    $myObj->loggedin = TRUE;

    echo '<pre>';
    print_r($myObj);
    echo '</pre>';
?>