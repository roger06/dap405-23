<?php
echo 'redirecting you - you muppet';
session_start();

header("Refresh: 5; url=page1.php");



exit;


 if  ($_SESSION['loggedon'] == false) {


 }

if (session_destroy()) echo 'You have loged off';

else echo 'Warning - not logged';



;


?>