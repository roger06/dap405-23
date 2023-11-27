<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
        if(isset($pagetitle)) echo $pagetitle;
        
        else echo 'DAP405';
        
        ?></title>
    <style>

        ul {

            display: flex;
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