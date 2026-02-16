<?php 
$name = $_POST['name'];
$priority = $_POST['priority'];

//get connection 
include 'includes/dbconnection.php';
//setup query 
$qry = "INSERT INTO categories (name, priority) VALUES ('$name', $priority)";

//run query 
$result = $conn->query($qry);
if($result)
{
    echo "Category added successfully";
}
else
{
    echo "Error: " . $conn->error;
}

//close connection
include 'includes/closeconnection.php';
?>