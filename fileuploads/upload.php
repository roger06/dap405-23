<?php

    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';

//  move to folder

//  
if  (move_uploaded_file( $_FILES['myfile']['tmp_name'], 'uploads/' .  $_FILES['myfile']['name']  )) echo "Success";

else "Fails";

/**
 * jhjkl
 * kjhkkjhg
 * 
 *  */

?>