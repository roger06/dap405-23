
<h1>Convert JSON to array and loop through</h1>
<?php
opcache_reset();  // stop caching

function calc_band($salary) {


    if ($salary < 10000) $band =1;
    elseif ($salary > 10000 and $salary < 40000) $band = 2;


    return $band;
}

// read emp JSON into array
// read tax tables JSON into array

// loop through emp array 
// get salary
// work out the band

$jsonfile = 'data/employees-final.json';  // location of file
$json = file_get_contents($jsonfile);     // read contents into a variable
$emparray = json_decode($json, true);      // convert to an array

// echo '<pre>'; print_r($emparray); echo '</pre>';
// debugging

foreach($emparray as $value ) {

    echo $value['firstname'] . ' : ' . $value['salary'] . '<br>';

    $salary = $value['salary'];

    $band = calc_band($salary);

    $netsalary = calc_tax($band, $salary);

    echo $netsalary;    

    // 1. work out tax band
    // 2. work out the tax
 
     
}



?>