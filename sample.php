<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php require_once 'methods.php'; ?>

<form method="POST">

    <input type="hidden" name="id" value="<?php echo $id ?>">

    <input type="text" name="FirstName" placeholder="FirstName">
    <br>
    <input type="text" name="LastName" placeholder="Lastname">
    <br>
    <input type="text" name="studentID" placeholder="studentID">
    <br>
  
    <button type="submit" name="insert-btn">Signup</button> 

</form>


<form method="POST">
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Student ID</th>
        </tr>
        <?php
        include_once "showdata.php";
        ?>
        

    </table>
</form>


</body>
</html>

