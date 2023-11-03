<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);    // this 1 / 0
ini_set('display_startup_errors', 1);
opcache_reset(); 
require_once('fns-inc.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
       printTitle($pagetitle);
        ?>
        
    </title>
    <style>

        ul {

            /* display: flex; */
            color: blue;
        }

    </style>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li>link1</li>
                <li>link2</li>
                <li>link3</li>
            </ul> 
        </nav>
    </header>