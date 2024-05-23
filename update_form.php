<?php
    include "update_script.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update form </title>
</head>
<body>

<form action="" method="POST">
        <div class="input-group">
            <label for="">Name</label>
            <input type="text" name="fullName" 
                value="<?php echo isset($editData) ? $editData['name']: ""; ?>"
            >
           
        </div>
 
        <div class="input-group">
            <label for="">Email</label>
            <input type="text" name="email" 
            value="<?php echo isset($editData) ? $editData['email']: ""; ?>"
            >
            
        </div>  
 
        <div class="input-group">
            <label for="">Phone</label>
            <input type="text" name="phone"
            value="<?php echo isset($editData) ? $editData['phone']: ""; ?>"
            >
          
        </div>

        <div class="input-group">
            <label for="">Faculty</label>
            <input type="text" name="faculty"                 
            value="<?php echo isset($editData) ? $editData['faculty']: ""; ?>"
        >
           
        </div>

        <div class="input-group">
            <label for="">Address</label>
            <input type="text" name="address" 
            value="<?php echo isset($editData) ? $editData['address']: ""; ?>"
            >
           
        </div>
        <div class="input-group">
            <label for="">Gender</label>
            <br>
            <input type="radio" name="gender" value="male" 
            checked = <?php echo isset($editData) && $editData['gender'] == "male" ? true : false;  ?> >Male
            <input type="radio" name="gender" value="female"
            checked = <?php echo isset($editData) && $editData['gender'] == "female" ? true : false;  ?>
            >Female
            
    </div>

    <input type="submit" name="update">



</form>

</body>
</html>





