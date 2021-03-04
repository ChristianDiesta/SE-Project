<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Interface</title>
</head>
<body>

<?php require_once 'methods.php'; ?>

<form method="POST">

    <input type="hidden" name="id" value="<?php echo $id ?>">

    <input type="text" name="name" placeholder="Name">
    <br>
    
    Gender: 
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Male">Male
    <br>

    <input type="text" name="email" placeholder="Email">
    <br>
    <input type="text" name="password" placeholder="Password">
    <br>
    
    Voting Status: 
    <input type="radio" name="voting_status" value="Yes">Yes
    <input type="radio" name="voting_status" value="No">No
    <br>    


    <button type="submit" name="insert-btn">Signup</button> 

</form>


<form method="POST">
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Voting_status</th>
        </tr>
        <?php
        include_once "showdata.php";
        ?>
        

    </table>
</form>



</body>
</html>

