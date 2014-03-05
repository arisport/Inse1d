<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'inse1d_data');
define('DB_PASSWORD', 'inse1Ddata');
define('DB_DATABASE', 'inse1d_data');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
$query=mysql_query("select main_task, subtask from tasks") or die(mysql_error());

# Collect the results
while($obj = mysql_fetch_object($query)) {
    $arr[] = $obj;
}

# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;

?>