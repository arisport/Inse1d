<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'inse1d_data');
define('DB_PASSWORD', 'inse1Ddata');
define('DB_DATABASE', 'inse1d_data');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
$query=mysql_query("select main_task AS 'label', start, end from tasks") or die(mysql_error());

while($obj = mysql_fetch_object($query)) {
  $data[] = array('label'=>$obj->label,'start'=>$obj->start,'end'=>$obj->end);
}

$json_response = json_encode($data);