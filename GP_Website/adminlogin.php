<?php
include 'navbar.php';
require_once('config.php');
?>
<?php
	session_start();
	error_reporting(0);
	if(isset($_SESSION['email'])) {
		header("Location: admin_read.php");
	}
	if(isset($_POST['login'])){
		$email 			= $_POST['email'];
		$password 		= $_POST['password'];

		$sql = "SELECT * From adminlogin WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['email'] = $row['email'];
			header("Location: admin_read.php");
		}else {
			echo "There were erros while saving the data" . $sql . "<br>" . $conn->error;
		}	
		$conn->close();
	}		
?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/styless.css">
</head>
<body>

<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6">
        <h2> Login Here </h2>
        <form action="adminlogin.php" method="post">
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" id="email"  type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" id="password"  type="password" name="password" required>
            </div>
            <!-- <button type="submit" class="btn btn-primary"> Login </button> -->
            <input class="btn btn-primary" type="submit" id="login" name="login" value="Login">
            <div class="mt-3">
                <div class="d-flex justify-content-center links">Don't have an account?
                    <a href="registration.php" class="ml-2">Sign up</a>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
</div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>