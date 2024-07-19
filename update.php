
<?php
$con = mysqli_connect("localhost","root","","bakirkhata") or 
die("Failed to connect to database");
$id = $_GET['id'];
$sql = "SELECT * FROM customers WHERE id = '$id'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update of names.</title>
</head>
<body>
    <form action="edit_name.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id']?>">
        <input type="text" name="name" id="name" value="<?= $row['name'];?>" placeholder="Name" required maxlength="200">
        <input type="submit" value="Modify">
    </form>
</body>
</html>