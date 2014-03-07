<?php
// Create connection
$con=mysqli_connect("localhost","inse1d_data","inse1Ddata","inse1d_data");


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>  