<?php

function connect()
{
  $dbhost="localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="profile form";

//create connection
$conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname) or die($conn->connect_error);
return $conn;
}
?>
