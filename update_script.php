<?php
    include "db_connection.php";

    if(isset($_GET['editId'])){
        $id = $_GET['editId'];

        $editData = edit_data($id, $conn);
    }

    if(isset($_POST['update']) && isset($_GET['editId'])){
        $id = $_GET['editId'];

        edit_data($id, $conn);
    }

    function edit_data($id, $conn){
        $query = "SELECT * from student where id = $id";
        $exec = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($exec);

        return $row;
    }

    function update_data($id, $conn){
        $name = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $faculty = $_POST['faculty'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        $query = "UPDATE student SET name='$name', email='$email', phone='$phone',
                    address='$address', faculty='$faculty', gender='$gender' where id = $id";
        
        $update_exec = mysqli_query($conn, $query);

        if($update_exec){
            header('location: table.php');
        } else {
            echo "Something went wrong";
        }
    }
?>