<html>
	<head>
        <title>Student Registration</title>
        <!-------Insert designs here------->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
        
    </head>
			<body>
				<?php  
					require_once 'process.php'; 
				?>

				<?php
					if(isset($_SESSION['message'])):
				?>

					<div class="alert alert-<?=$_SESSION['msg_type']?>">
						<?php
							echo $_SESSION['message'];
							unset($_SESSION['message']);
						?>
					</div>
				<?php endif ?>
				<div class="container">

				<?php
					$connect = mysqli_connect('localhost','root','','practical');
					$result = $connect->query("SELECT * FROM data")
					//pre_r($result);
				?>


				<div class="row justify-content-center">
					<table class="table">
						<thead>
							<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th colspan="2">Action</th>
							</tr>
						</thead>

						<?php
							while($row = $result->fetch_assoc()):
						?>

						<tr>
							<td><?php echo $row['FirstName'] ?></td>
							<td><?php echo $row['LastName'] ?></td>
                            <td><?php echo $row['Gender'] ?></td>

							<td>
								<a href="index.php?edit=<?php echo $row['id']; ?>"
									class="btn btn-info">Edit</a>
								<a href="process.php?delete=<?php echo $row['id']; ?>"
									class="btn btn-danger">Delete</a>
							</td>
						</tr>

						<?php
							endwhile;
						?>

					</table>
				</div>
				
				<?php
					function pre_r($array)
					{
						echo '<pre>';
						print_r($array);
						echo '</pre>';
					}
				?>

				<div class="row justify-content-center">
				<form action= "process.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="FirstName" class="form-control" 
						value="<?php echo $FirstName; ?>">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="LastName" class="form-control" 
						value="<?php echo $LastName; ?>">
					</div>

                        <label>Gender:</label> <br>
                        <input type="radio" name="gender"
                        <?php 
                            if (isset($gender) && $gender=="female") echo $Gender;
                        ?>

                        value="female">Female <br>
                        <input type="radio" name="gender"
                        <?php 
                            if (isset($gender) && $gender=="male") echo $Gender;
                        ?>

                        value="male">Male <br>
                        <input type="radio" name="gender"
                        <?php 
                            if (isset($gender) && $gender=="other") echo $Gender;
                        ?>
                        value="other">Other

					<div class="form-group">
						<?php
							if($update == true):
						?>
							<button type="submit" class="btn btn-primary" name="update">Update</button>
						<?php 
							else: 
						?>	
							<button type="submit" class="btn btn-primary" name="save">Save</button>
						<?php endif; ?>	
					</div>
				</form>
				</div>	
				</div>
			</body>
</html>