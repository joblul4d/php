<?php 
$con = mysqli_connect("localhost","root","","bakirkhata");
$id = $_GET['id'];
$sql = "DELETE FROM customers WHERE id = '$id'";
$result = mysqli_query($con,$sql);
if($result){
    Header("Location: list_names.php");
}


?>