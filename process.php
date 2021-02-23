<?php
	
	session_start();


	//Connecting the Database
	$mysqli = new mysqli('localhost','root','','practical');


	//Intializations 
	$update = false;
	$id = 0;

	$FirstName = '';
    $LastName = '';
    $Gender = '';

	//Inserting Data in the Database

	if(isset($_POST['save']))
	{
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
        $Gender = $_POST['Gender'];


		$Insert = "INSERT INTO `data`  (`FirstName`, `LastName`,`Gender`)
		VALUES ('$FirstName', '$LastName','$Gender')";

		if(mysqli_query($mysqli, $Insert))
		{
			$_SESSION['message'] = "Record has been saved!";
			$_SESSION['msg_type'] = "success";

			header("location: index.php");
			
		}

		
	}	
	
	//Deleting Data from the Database

	if(isset($_GET['delete']))
	{
		$id = $_GET['delete'];
		$Delete = "DELETE FROM data WHERE id=$id";
	
		if(mysqli_query($mysqli, $Delete))
		{
			$_SESSION['message'] = "Record has been deleted!";
			$_SESSION['msg_type'] = "danger";

			header("location: index.php");
			
		}
	
	}

	//Editing data from the Database

	if(isset($_GET['edit']))
	{
		$id = $_GET['edit'];
		$update = true;
		$Edit = $mysqli->query("SELECT * FROM data WHERE id=$id");
	
		if(count($Edit)==1)
		{
			$row = $Edit->fetch_array();
			$FirstName = $row['FirstName'];
            $LastName = $row['LastName'];
            $Gender = $row['Gender'];
		}
	}

	//Updating the edited data to the Database

	if(isset($_POST['update']))
	{
		$id = $_POST['id'];
		$FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Gender = $_POST['Gender'];

		$mysqli->query("UPDATE data SET FirstName='$FirstName', LastName='$LastName' WHERE id=$id");

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";

		header('location: index.php');
	}

?>