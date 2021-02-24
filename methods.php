<?php

include_once 'dbh.php';


$firstname = '';
$lastname = '';
$studentID = '';
$update = false;
$id = 0;

    /* Insert or  Add Button Handler */
    if (isset($_POST['insert-btn'])) {
     

        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $studentID = $_POST['StudentID'];
   
        $sql_insert = "INSERT INTO stud_info (FirstName, LastName, StudentID) VALUES ('$firstname', '$lastname', '$studentID')";
   
        mysqli_query($conn, $sql_insert);
   
   
        header("Location: sample.php?signup=sucess");
    }
   
    //OPTIONAL (Kung merong delete button)
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql_delete = "DELETE FROM stud_info WHERE id=$id";

        mysqli_query($conn, $sql_delete);
    }

    /* Edit Button Handler*/
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;

        $sql_edit = "SELECT * FROM stud_info WHERE id=$id";

        $result = mysqli_query($conn, $sql_edit);
        if(count($result)==1){
            $row = mysqli_fetch_array($result);

            /* Mga variables na di ko pa sure */
            $firstname = $row['FirstName'];
            $lastname = $row['LastName'];
            $studentID = $row['StudentID'];

        }

    }

    /* Update Button Handler */
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $studentID = $_POST['StudentID'];

        $sql_update = "UPDATE stud_info SET FirstName='$firstname', 
        LastName='$lastname', 
        StudentID='$studentID' 
        WHERE id=$id";

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

   