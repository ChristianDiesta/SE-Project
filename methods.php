<?php

include_once 'dbh.php';

$name = '';
$gender = '';
$email = '';
$password = '';
$voting_status = '';
$update = false;
$student_id = 0;

    /* Insert or  Add Button Handler */
    if (isset($_POST['insert-btn'])) {
     

       
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $voting_status = $_POST['voting_status'];
   
        $sql_insert = "INSERT INTO student (name, gender, email, password, voting_status) VALUES ('$name', '$gender', '$email', '$password', '$voting_status')";
   
        mysqli_query($conn, $sql_insert);
   
   
        header("Location: sample.php?signup=sucess");
    }
   
    //OPTIONAL (Kung merong delete button)
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql_delete = "DELETE FROM student WHERE student_id=$student_id";

        mysqli_query($conn, $sql_delete);
    }

    /* Edit Button Handler*/
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;

        $sql_edit = "SELECT * FROM student WHERE student_id=$student_id";

        $result = mysqli_query($conn, $sql_edit);
        if(count($result)==1){
            $row = mysqli_fetch_array($result);

            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $voting_status = $_POST['voting_status'];

        }

    }

    /* Update Button Handler */
    if(isset($_POST['update'])) {
        
        $student_id = $_POST['student_id'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $voting_status = $_POST['voting_status'];

        $sql_update = "UPDATE student SET 
        name = '$name', 
        gender = '$gender', 
        email = '$email'
        password = '$password', 
        voting_status = '$voting_status' 
        WHERE student_id = $student_id";

        mysqli_query($conn, $sql_update);
    }

?>
<!-- OPTIONAL (change save/insert btn to update btn after edit btn is clicked ) -->
<!-- 
<?php 
    if($update == true):
?>
    <button type="submit" name="update-btn">Update</button>
<?php else: ?>
    <button type="submit" name="insert-btn">Save</button>
<?php endif; ?> -->

   