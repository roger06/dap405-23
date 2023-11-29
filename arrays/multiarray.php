<?php

$multi = array(
    
    'Walls'=> array('choc','mint', 'vanilla'),
     
    
    'Ben & Jerrys' =>array('choc','mint', 'vanilla','Cookie Dough', 'Phish food'),
    
    'Tesco'=>array('horse', 'cardboard', 'unflavoured')
);
?>

<ol>
<?php


foreach($multi as $key => $value ) {
    
    echo '<li>' . $key;
    
    echo '<ul>';
    foreach ( $value as $value2) {
        
        echo '<li>' . $value2 . '</li> ' ;
        
    }
    echo '</ul>';
    
    
    echo '</li>';
    
}
?>

</ol>

<?php
// echo '<pre>';
// print_r($multi);
// echo '</pre>';










?>