<?php
include 'navbar.php';
require_once('config.php');
?>
<?php
        // Get genreid from URL to delete that genre
    $id = $_GET['id'];
    
    // Delete genre row from table based on given genreid
    $sql = ("DELETE FROM bookings WHERE id=$id");
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    $conn->close();
    // After delete redirect to Home, so that latest genre list will be displayed.
    header("Location:admin_read.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>