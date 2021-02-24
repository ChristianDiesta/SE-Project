<?php

include_once 'dbh.php';

    if (isset($_POST['insert-btn'])) {
     

        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $studentID = $_POST['StudentID'];
   
        $sql_insert = "INSERT INTO stud_info (FirstName, LastName, StudentID) VALUES ('$firstname', '$lastname', '$studentID')";
   
        mysqli_query($conn, $sql_insert);
   
   
        header("Location: sample.php?signup=sucess");
    }
   
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql_delete = "DELETE FROM stud_info WHERE id=$id";

        mysqli_query($conn, $sql_delete);
    }

?>