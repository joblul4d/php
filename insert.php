<?php 
$con = mysqli_connect("localhost","root","","bakirkhata") or 
die("Failed to connect to database");
$id = null;
$name = $_POST['name'];
$sql = "INSERT INTO customers (name) VALUES ('$name')";
$result = mysqli_query($con,$sql);
if($result){
   Header("Location:index.php");
    
}


?>