<?php

    echo "<p>Today's date is ";

    echo date("d-m-y");
    echo "</p>";

    $d=strtotime("12:50pm November 22 1963");
    // echo "Created date is " . date("Y-m-d h:i:sa", $d);
    echo "<p>JFK was assasinated on ...";

    echo date("Y-m-d h:i:sa", $d) . "</p>";

    $startdate = '14/11/1948';   // as comes from JSON
    $enddate = '23/11/2023';   // change this to current date when working
    
    
    $startdate = str_replace('/','-', $startdate);   // reformat so PHP likes it.
    $enddate = str_replace('/','-', $enddate);   // reformat so PHP likes it.
    
     
    // echo "Start: ";
    // var_dump(date_format(date_create($startdate), 'd-M-Y'));
    
    
    // echo "<br>End: ";
    // var_dump(date_format(date_create($enddate), 'd-M-Y'));
    
    echo  "Duration = ";
    
    
    $diff   = date_diff(date_create($enddate), date_create($startdate));
    
    echo '<pre>';
    
    print_r( $diff);
    echo '</pre>';
    




?>