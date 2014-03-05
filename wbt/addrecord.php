<?php
	// Create connection
	$con=mysqli_connect("localhost","inse1d_wbt","{)Q5$#GioV.y","inse1d_wbt");
	
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	$sql="INSERT INTO title (title_name)
	VALUES
	('$_POST[title_name]";
	
	if (!mysqli_query($con,$sql))
	  {
	  die('Error: ' . mysqli_error($con));
	  }
	echo "1 record added";
	
	mysqli_close($con);
?> 