<?php
     include_once 'dbh.php';

    //  $sql = "SELECT * FROM stud_info;";
    //  $result = mysqli_query($conn, $sql);
 
    //  //Check if there are data from the database
    //  $resultCheck = mysqli_num_rows($result);
 
    //  if ($resultCheck > 0) {
    //      //Showing data from the database
    //      while ($row = mysqli_fetch_assoc($result)) {
    //          echo $row['name'];
    //      }
    //  }

    //Inserting data to the database

     $name = $_POST['name'];
     $year = $_POST['year'];
     $section = $_POST['section'];
     $email = $_POST['email'];
     $pwd = $_POST['password'];
     $voting_status = $_POST['vote_status'];

     $sql = "INSERT INTO stud_info (name, year, section, email, password, voting_status) VALUES ('$name', '$year', '$section', '$email', '$pwd', '$voting_status');";

     mysqli_query($conn, $sql);


     header("Location: sample.php?signup=sucess");
?>