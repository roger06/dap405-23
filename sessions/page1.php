<?php
session_start();

// this will set a session variable



// echo 'hello';

$_SESSION['weather'] = 'Rainy';
$_SESSION['dayname'] = 'Friday';

echo '<pre>';

    print_r($_SESSION);

echo '</pre>';

if ( $username == 'user' && $pw == 'password' ) {

    $_SESSION['loggedon'] = true;
}


?>