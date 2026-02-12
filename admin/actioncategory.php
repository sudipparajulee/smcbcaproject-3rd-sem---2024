<?php 
$name = $_POST['name'];
$priority = $_POST['priority'];
echo $priority;
echo $name;
//create connection 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'smc_bca3rd2024';

$conn = new mysqli($server, $username, $password, $database);
//setup query 
$qry = "INSERT INTO categories (name, priority) VALUES ('$name', $priority)";

//run query 
?>