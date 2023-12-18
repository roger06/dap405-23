<h2>payslip</h2>
<?php 

$empid=  $_GET['id'];

echo $empid;

foreach($empArray as $data){

    if ($data['id'] != $empid) continue;
    
    else {
        //  echo "found it";   // debugging       
        // display details
    }
}



?>