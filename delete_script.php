<?php 
require_once "db_connection.php";

if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];
    
    delete_data($id, $conn);
}

function delete_data($id, $conn){
    $query = "DELETE FROM student where id=$id";
    $exec = mysqli_query($conn, $query);

    if($exec){
        header('location: table.php');
    } else {
        echo 'Error' .mysqli_error($conn);
    }
}

?>