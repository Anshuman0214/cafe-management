<?php 
include('conn.php');
$uname = $_POST['uname'];
$passw = $_POST['passw'];

$sql ="INSERT INTO users(uname,passw) VALUES('$uname','$passw')";

$result = mysqli_query($con,$sql);


     header("Location:users.php"); 


?>