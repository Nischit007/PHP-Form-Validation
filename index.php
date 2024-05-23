
<?php 
    $name = $email = $password = $gender = "";
    $nameErr = $emailErr = $passwordErr = $genderErr = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['fullName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        if(empty($name)){
            $nameErr = "Name must be filled!";
        } else {
            if(strlen($nameErr) < 6){
                $nameErr = "Name must be 6 or more character!";
            }
        }

        if(empty($email)){
            $emailErr = "Email must be filled";
        } else{
            if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$email))
            $emailErr = "Email Format Is Incorrect";
        }

        if(empty($gender)){
            $genderErr = "Please check the gender option!";
        }
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>

<body>
    <form action="index.php" method="POST">
        <div class="input-group">
            <label for="">Name</label>
            <input type="text" name="fullName" value="<?php echo $name; ?>">
            <div class="error"><?php echo $nameErr; ?></div>
        </div>

        <div class="input-group">
            <label for="">Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <div class="error"><?php echo $emailErr; ?></div>
        </div>

        <div class="input-group">
            <label for="">Password</label>
            <input type="" name="password" value="<?php echo $password; ?>">
        </div>

        <div class="input-group">
        <label for="">Gender</label>
        <input type="radio" name="gender" value="male" <?php echo $gender=="male" ?  "checked": ""; ?> > Male
        <input type="radio" name="gender" value="female" <?php echo $gender=="female" ?  "checked": ""; ?> > Female
        <div class="error"><?php echo $genderErr ?></div>
    </div>

        <input type="submit">
    </form>
    
</body>
</html>