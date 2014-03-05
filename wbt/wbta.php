<!DOCTYPE html>
<html>
<head>
    <title>WBT Charts</title>
    <link rel="stylesheet" type="text/css" href="wbt.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../scripts/wbt.js"></script>
    <link rel="stylesheet" type="text/css" href="../template/template.css">
</head>
<body>
	<?php include'../scripts/sql_connect.php'; ?> 
	

	<?php include 'template/blocks/header.html';?>
	<h1 class="title">INSE 1d - WBT Graph</h1>
    <section>
    	<form action="addrecord.php" id="upload_form" enctype="multipart/form-data" method="post"> 
			Project Title: 
			<input type="text" name="title_name">
			Level 1 Tasks:
			<input type="submit">
			</textarea>
		</form>
    <?php
		$result = mysqli_query($con,"select * from title, taskl1 where title_id = taskl1_id");
		while($row = mysqli_fetch_array($result))
		  {
		  echo "<article>" . "<h1>" . $row['title_name'] . "</h1>" . "<div class='l1'>" . $row['task_name'] . "</div>" . "</article>"; 
		  }
		mysqli_close($con);
	?>
    </section>
    <a href="/">Back to homepage</a>
</body>