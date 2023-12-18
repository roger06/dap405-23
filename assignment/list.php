
<h1>Employees</h1>
<?php
opcache_reset();  // stop caching
error_reporting(E_ALL);
ini_set('display_errors', 1);    // this 1 / 0
ini_set('display_startup_errors', 1);

// read emp JSON into array
// read tax tables JSON into array

// loop through emp array 
// get salary
// work out the band

function calc_band($salary){

    if ($salary < 10000 ) $band = 1;

    else {

        if ($salary > 10000 AND $salary < 40000) $band = 2;
        elseif  ($salary > 40000 AND $salary < 150000)  $band = 3;
        else  $band = 4;
    }
    

    return $band;

}  // end calc_band()


function calc_tax($salary, $band) {

    $netsalary = 0;
    // error checking!

    // first tax band - no tax to pay (or net salary = gross)
    if ($band == 1 ) {

        $netsalary = $salary;
        return $netsalary;

    }


    if ($band == 2 ) {

        // deduct 10000 from salary
        // the remainder is taxed at 20%

        $taxable_salary = $salary - 10000;

        $tax = $taxable_salary * 0.2;

        echo "taxable = " . $taxable_salary . " ";
        echo "tax = " . $tax . " ";


        $netsalary = $salary - $tax;
        return $netsalary;

    }

    

    else {

        $netsalary = 55555555555;
        return $netsalary;
    }


} // end calc_tax()

$jsonfile = 'data/employees-final.json';  // location of file

$json = file_get_contents($jsonfile);     // read contents into a variable

$emparray = json_decode($json, true);      // convert to an array

// echo '<pre>'; print_r($emparray); echo '</pre>';
// debugging

foreach($emparray as $value ) {

    echo $value['lastname'] .  ' ';

    $salary = $value['salary'];


    // 1. work out tax band

    $band = 0;

    
    echo $salary; 
   
    $band = calc_band($salary);

    echo " The band is " . $band;

    $netsalary = calc_tax($salary, $band);
    
    echo " ::  the gross (take-home) pay is  " . $netsalary / 12;


    echo '<br><hr>';


    // 2. work out the tax
 
     
}



?>