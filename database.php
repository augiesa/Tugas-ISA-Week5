<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbusername = '';
$dbpassword = '';
$dbname = 'mysql';

$c = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
if ($c->connect_error) {
  echo "Unable to connect, please try again";
  die();
}
?>
