<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names of list:</title>
</head>
<body>
    <?php 
    $con = mysqli_connect("localhost","root","","bakirkhata") or die("Failed to connect to database");
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($con,$sql);

    ?>
    <table>
       
        <tr>
            <th>ID</th>
            <th>Name:</th>
            <th></th>
            <th></th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['name']?></td>
            <th><a href="update.php?id=<?= $row['id'] ?>" >Editar</a></th>
            <td><a href="delete.php?id=<?= $row['id'] ?>">Borrar</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>