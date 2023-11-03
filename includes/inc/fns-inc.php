<?php

    // just a load of functions to use around the site.
    
    function helloWorld() {

        return "Hello world...";
        
    }

    function printTitle($page){

        if (isset($page)) echo $page;

        else echo 'My funky website';
    }

    function printList($length, $content){
        // $length - integer
        // $content - string

        if (!is_numeric($length)) {

            echo 'length must be a number';
            return false;
        }

        if (is_numeric($content)) {

            echo 'content must be a string';
            return false;
        }
        
        
        echo '<ul>';
        for ($i=0; $i < $length; $i++) { 
            echo '<li>' . $content . '</li>';
        }
        echo '</ul>';

    }



?>