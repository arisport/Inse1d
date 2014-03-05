<?php
// Create connection
$con=mysqli_connect("localhost","inse1d_data","inse1Ddata","inse1d_data");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO tasks (main_task, subtask, start, end)
VALUES
('$_POST[main_task]','$_POST[subtask]','$_POST[start]','$_POST[end]')";

if (!mysqli_query($con,$sql)) 
  {
  die('Error: ' . mysqli_error($con));
  }
header("Location: http://www.inse1d.info/gantt/index.php");
mysqli_close($con);
?>