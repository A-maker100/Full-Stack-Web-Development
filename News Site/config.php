<?php
$database_user="root";
$database_name="NewsWebsite";
$user_password ="";

$db_connection = new PDO("mysql:host=localhost;dbname=".$database_name.";charset=utf8",$database_user,$user_password);

$db_connection->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$db_connection->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$db_connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

define("APP NAME","PHP API");
?>