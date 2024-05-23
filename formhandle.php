<?php
    require_once "db_connection.php";

    $name = $email = $phone = $gender = $faculty = $address = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $faculty = $_POST['faculty'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        $query = "INSERT INTO student (name, email, phone, faculty, address, gender) 
        VALUES ('$name', '$email', '$phone', '$faculty', '$address', '$gender')";

        $exec = mysqli_query($conn, $query);

        if($exec){
            echo "Inserted Successfully!";
        } else {
            echo mysqli_error($conn);
        }
    }

?>