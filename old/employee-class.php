<?php

    class Employee 
    {

        public $firstName;
        public $lastName;
        public $salary;


        function showEmployee(){

            echo "First = " . $this->firstName;
            echo " Last = " . $this->lastName;
            echo " salary = " . $this->salary;
            echo "<hr>";

        }

    }






?>