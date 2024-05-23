<?php
    $SERVER = "localhost";
    $USERNAME = "root";
    $PASSWORD ="";
    $DB_NAME = "college";
    
    $conn = mysqli_connect($SERVER, $USERNAME,$PASSWORD,$DB_NAME);

if(!$conn){
    die("Something went wrong!" .mysqli_connect_error());
}

?>