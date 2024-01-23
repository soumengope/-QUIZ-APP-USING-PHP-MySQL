<?php
    $dbservername = 'localhost';
    $bdusername = 'root';
    $dbpass = "";
    $dbname = 'myDB';

    if($conn = mysqli_connect($dbservername,$bdusername,$dbpass,$dbname)){

    }else{
        die("not connected");
    }
?>