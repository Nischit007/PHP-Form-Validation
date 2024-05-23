<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>

<form action="formhandle.php" method="POST">
        <div class="input-group">
            <label for="">Name</label>
            <input type="text" name="fullName" value="">
           
        </div>
 
        <div class="input-group">
            <label for="">Email</label>
            <input type="text" name="email" value="">
            
        </div>  
 
        <div class="input-group">
            <label for="">Phone</label>
            <input type="text" name="phone" value="">
          
        </div>

        <div class="input-group">
            <label for="">Faculty</label>
            <input type="text" name="faculty" value="">
           
        </div>

        <div class="input-group">
            <label for="">Address</label>
            <input type="text" name="address" value="">
           
        </div>
        <div class="input-group">
            <label for="">Gender</label>
            <br>
            <input type="radio" name="gender" value="male" >Male
            <input type="radio" name="gender" value="female">Female
            
    </div>

    <input type="submit">



</form>

</body>
</html>





