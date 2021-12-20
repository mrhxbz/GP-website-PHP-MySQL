<?php
include 'logoutnav.php';
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
    <title>Display Bookings</title>
    <header> <h1 class="d-flex justify-content-center"> Doctors List </h1> </header>
</head>
<body>
<div class="d-flex justify-content-center">

<?php
    $sql = "SELECT * from admin_access";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
?>

<div class="row">
    <div class="col-md-12">
    <table class="table text-center" >
        <thead class="thead-dark">
            <tr>
                <th scope="col"><b>ID</b></th>
                <th scope="col"><b>Doctor's Name</b></th>
                <th scope="col"><b>Department</b></th>
                <th scope="col"><b>Remove</b></th>
            </tr>
        </thead>
<?php
        while($row =$result->fetch_assoc()) {
    ?>
   <tr>
       <td><?= $row["id"];?></td>
       <td><?= $row["doctors_name"];?></td> 
       <td><?= $row["department"];?></td> 
       <td><a href="delete_doctor.php?id=<?php echo $row["id"];?>">Delete</a></td>
   </tr>
   <?php
        }
   ?>
</table> 
    </div>
    </div>
    </div>
    <?php
    } else {
   ?>
<p>0 results</p>
   <?php
    }
    $conn->close();
?>
<a class="d-flex justify-content-center" href="admin_read.php"><ul>Go back</ul></a> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>