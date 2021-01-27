<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $connect = mysqli_connect('localhost','root','','mysql_dat');
    $ProductID = $_GET['ProductID']
    $sql = "delete form product where ProductID = $ProductID ";
    mysqli_query($connect,$sql);
    header('Location: ProductView.php');
    ?>
</body>
</html>