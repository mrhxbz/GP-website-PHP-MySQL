<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>User Registration</title>
	<link rel="stylesheet" href="css/styless.css">
</head>
<body>
<div>
	<?php
	if(isset($_POST['create'])){
		$doctor 		= $_POST['doctors_name'];
		$department 	= $_POST['department'];
		

		$sql = "INSERT INTO admin_access (doctors_name, department) VALUES ('$doctor', '$department')";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "There were erros while saving the data" . $sql . "<br>" . $conn->error;
		}	
		$conn->close();
	}		
	?>	
</div>

<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6">
		<form action="admin_add.php" method="post">
			<h1>Add New Doctor</h1>
			<hr class="mb-3">
			<label for="name"><b>Doctor's Name</b></label>
			<input class="form-control" id="name" type="text" name="doctors_name" required>

			<label for="department"><b>Department</b></label>
			<input class="form-control" id="department"  type="text" name="department" required>

			<hr class="mb-3"> 
			<input class="btn btn-primary" type="submit" name="create" value="Add">
            <a href="admin_doctorlist.php" class="ml-2">Click to view or remove Doctors</a>
			<a href="admin_read.php" class="ml-2"><ul>Go back</ul></a> 
		</form>
	</div>
    </div>
    </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>