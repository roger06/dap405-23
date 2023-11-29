<?php
//  TODO 1. read json file(s)
// 2. convert to array
// 3. loop through

// todo = move to separate file

// ini_set('error_reporting', E_ALL);


require_once("employee-class.php");


function determineBand ($grosssalary) {

    if ($grosssalary <= 20000) {
        echo "<h1> you are not paid enough</h1>";

    }

    // return $band;

}

$empFile = "data/employees-final.json";

$empJson = file_get_contents($empFile);

$empArray = json_decode($empJson, true);
// echo '<pre>';print_r($empArray);echo '</pre>';


foreach($empArray as $data){

    
    $emp = new Employee();
    $emp->firstName = $data['firstname'] ;
    $emp->lastName = $data['lastname'] ;
    $emp->salary = $data['salary'] ;

    $emp->showEmployee();

    continue;

    
    echo $data['firstname']  .  '  &pound;' . number_format($data['salary'] ,2);   
    $grosssalary = $data['salary'];
    determineBand($grosssalary);


    echo '<hr>' ;




}



?>
