<?php 
include('conn.php');
$uname = $_POST['uname'];
$passw = $_POST['passw'];

$sql = "select * from users where uname = '$uname' and passw = '$passw' ";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

if($count == 1){  
     header("Location:dashboard.php"); 
}  
else{  
    header("Location:admin.php"); 
}     





?>