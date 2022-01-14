<?php
$conn= new mysqli("localhost","root","","cart1");
if($conn->connect_error){
	die("Connection failed!".$conn->connect_error);
}
?>