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
    if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST[''])){
    $file = $_FILES['Product_Images']['name'];
    $file_tmp = $_FILES['Product_Images']['tmp_name'];
    $path = "../../../../Images/";
    move_uploaded_file($file_tmp,$path.$file);
}
if (isset($_POST[''])) {
    $ProductID =$row_prod['ProductID'];
    $ProductName =$row_prod['ProductName'];
    $ProductPrice =$row_prod['ProductPrice'];
    $ProductDes =$row_prod['ProductDes'];
    $CategoriID =$row_prod['CategoriID'];
}

?>
</body>
</html>