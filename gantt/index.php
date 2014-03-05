<?php

ini_set('display_errors', 'On');
require('lib/gantti.php'); 
require('data.php'); 

date_default_timezone_set('UTC');
setlocale(LC_ALL, 'en_US');

$gantti = new Gantti($data, array(
  'title'      => 'GANTT',
  'cellwidth'  => 25,
  'cellheight' => 35,
  'today'      => true
));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>inse1d | Gantt Chart</title>
  <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../template/template.css">
  <link rel="stylesheet" href="styles/css/gantti.css" />

  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
 
</head> 

<body>
 
<?php include '../template/blocks/header.html'; ?>

<?php echo $gantti ?>
<div class="forms">
    <form action="insert.php" method="post">
    <h2>Add Data</h2>
        <label for="main_task">New Task:</label><input type="text" name="main_task" id="main_task"><br />
        <label for="subtask">Sub Task of:</label><input type="text" name="subtask" id="subtask"><br />
        <label for="start">Start Date:</label><input type="date" name="start" id="start"><br />
        <label for="start">End Date:</label><input type="date" name="end" id="end"><br />
        <input type="submit">
    </form>
    <form action="deleteAll.php" method="post">
    <h2>Delete Data</h2>
      	<input type="submit" id="del" value="Delete all data">
    </form>
    </div>
<a href="/">Back to homepage</a> 

<?php include '../template/blocks/footer.html'; ?>


</body>

</html>
