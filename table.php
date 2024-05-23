<?php 
 include('read_script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Record</title>
</head>
<body>
    <a href="form.php"> Add </a>
<table border="1">
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Adrress</th>
        <th>Gender</th>
        <th>Faculty</th>
        <th>Action</th>
    </tr>
    <?php 
    if(count($fetchedData) > 0){
        $sn = 1;
        foreach($fetchedData as $data){
            ?>
            <tr>
                <td> <?php echo $sn; ?> </td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['address']; ?></td>
                <td><?php echo $data['gender']; ?></td>
                <td><?php echo $data['faculty']; ?></td>
                <td>
                    <a href="update_form.php?editId=<?php echo $data['id']; ?>"> Edit </a> ||
                    <a href="delete_script.php?deleteId=<?php echo $data['id']; ?>"> Delete </a>
        </td>
            </tr>
        <?php
        $sn++;
        }
    } else {
        echo "No Data Available!";
    }
    ?>

</table>
</body>
</html>