<?php
include_once('conn.php');

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
};

// sql to delete a record
$sql = "DELETE FROM cfms WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
