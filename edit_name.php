<?php 
$con = mysqli_connect("localhost","root","","bakirkhata") or 
die("Failed to connect to database");
$id = $_POST['id'];
$name = $_POST['name'];
$sql = "UPDATE customers SET name = '$name' WHERE id = '$id'";
$result = mysqli_query($con,$sql);
if($result){
    Header("Location: list_names.php");
}


?>