<?php
    echo "Hello World";
    include_once 'dbh.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $sql = "SELECT * FROM stud_info;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        //Showing data from the database
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['name'];
        }
    }

?>


</body>
</html>

