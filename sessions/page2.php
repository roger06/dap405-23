<h1>Page 2</h1>
<?php
session_start();

echo '<pre>';

    print_r($_SESSION);

echo '</pre>';

echo 'The weather is ' . $_SESSION['weather'];


?>