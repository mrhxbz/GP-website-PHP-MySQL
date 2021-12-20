<?php
include 'logoutnav.php';
require_once('config.php');
?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * from bookings WHERE id=$id";
    $result = $conn->query($sql);
    while($row =$result->fetch_assoc()) 
    {
        $timeslot = $row['timeslot'];
    }
?>
<div class="col-md-6">
   
<form method="post" action=" ">
     <table>
        <tr> 
	<td>timeslot</td>
	<td><input type="text" name="timeslot" value=<?php echo $timeslot;?>></td>
        </tr>
			
         <tr>
	<td><input type="hidden" name="id" value= <?php echo $_GET['id'];?> ></td>
	<td><input type="submit" name="update" value="Update"></td>
         </tr>
      </table>
</form>

</div>
<?php
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$timeslot=$_POST['timeslot'];
	// update genre data
	$sql = ("UPDATE bookings SET timeslot='$timeslot' WHERE id=$id");
	$result = $conn->query($sql);
	// Redirect to homepage to display updated genre in list
	header("Location: admin_read.php");
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
    <title>Display Bookings</title>
</head>
<body>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>