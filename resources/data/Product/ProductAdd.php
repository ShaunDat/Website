<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/33a12d68d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Demowebsite(1)/Vendors/css/grid.css">
    <style>
/* --------------------------------------------------------------------------- */
/* -------------------------------------Repeat------------------------------- */
/* ------------------------------------------------------------------------- */
body{
    margin: 0;
    background-color :#d1d8e0;
}
*{
    box-sizing: border-box;
    font-family: "Lucida Sans", sans-serif;
}
@media screen and (max-width:768px) {
    .column {
    width: 100%;
  }
}
.clearfix::after{
    content: "";
    display: table;
    clear: both;
}
[class*="col-"] {
    float: left;
    padding: 15px;
  }
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
  }
  
  @media only screen and (min-width: 600px) {
    /* For tablets: */
    .col-s-1 {width: 8.33%;}
    .col-s-2 {width: 16.66%;}
    .col-s-3 {width: 25%;}
    .col-s-4 {width: 33.33%;}
    .col-s-5 {width: 41.66%;}
    .col-s-6 {width: 50%;}
    .col-s-7 {width: 58.33%;}
    .col-s-8 {width: 66.66%;}
    .col-s-9 {width: 75%;}
    .col-s-10 {width: 83.33%;}
    .col-s-11 {width: 91.66%;}
    .col-s-12 {width: 100%;}
  }
  @media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
  }
/* ---------------------------------------------------------------------------- */
/* -------------------------------header-------------------------------------- */
/* -------------------------------------------------------------------------- */

.header{
    background-color: #4b6584;
    color: #FF6FA5;
    padding: 10px;
    text-align:left;
    height: 100px;
}
.topnav{
    overflow: hidden;
    background-color: #4b6584;
}
.topnav a{
    float: left;
    display: block;
    color: #45aaf2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.topnav a:hover{
    background-color: white;
    color:#45aaf2;
    font-weight: bold;
}
.header a{
    float: left;
    color:#45aaf2;
    text-align: center;
    padding: 10px 0px;
    text-decoration: none;
    font-size: 40px;
}
.header a:hover{
    color:aliceblue;
    font-weight: bold;
}

/* ---------------------------------------------------------------------------- */
/* -------------------------------section-------------------------------------- */
/* -------------------------------------------------------------------------- */
section{
    text-align: center;
}

/* ---------------------------------------------------------------------------- */
/* -------------------------------footer-------------------------------------- */
/* -------------------------------------------------------------------------- */
footer{
    background-color:#4b6584;
    color: #45aaf2;
    padding: 5px;
    text-align: center;
}
.footer_1, tr, td{
    text-align: center;
}
  
    </style>
</head>

<body>
<header>
    <?php $connect = mysqli_connect('localhost','root','','mysql_dat');
     ?>     
        <div class="header">
            <a href="../Edit.php"><i class="fas fa-tshirt col-4"></i></a>
            <input class="col-4" type="search" name="SearchName" id="search" placeholder="SEARCH">
            <a href="#"><i class="fas fa-search col-1" name="Search"> </i></a>
            <a href="#"><i class="far fa-bell col-1"></i></a>
            <a href="#"><i class="fas fa-user-plus col-1"></i></a>
            <a href="#"><i class="far fa-question-circle col-1"></i></a>
        </div>
        <div class="clearfix"></div>
        <div class="topnav">
            <a href="../Edit.php" class="col-2"> HOME</a>
            <a href="../Catagory/CatagoryAdd.php" class="col-2">CATEGORY ADD</a>
            <a href="../Catagory/CatagoryView.php" class="col-2">CATEGORY VIEW</a>
            <a href="ProductAdd.php" class="col-2">PRODUCT ADD</a>
            <a href="ProductView.php" class="col-2">PRODUCT VIEW</a>
            <a href="../../../Index.php" class="col-2">LOGOUT</a>
        </div>
        <div class="clearfix"></div>
    </header>   
    <section>
    <div class="adv col-2 col-s-3">
        <img src="../../img/ShopSecondHand.jpg" alt="HinhAnh" width="250px" height= "250px">
        </div>
        <div class=" col-10 col-s-9">
            <form method= "post" enctype="multipart/form-data"> 
            <table class="col-10 col-s-12">
                <tr>
                    <td><label for="">ProductName </label></td>
                </tr>
                <tr>
                    <td><input type="text" required placeholder="ProductName" name="ProductName"></td>
                </tr>
                <tr>
                    <td><label for="">ProductPrice </label></td>
                </tr>
                <tr>
                    <td><input type="text" required placeholder="ProductPrice" name="ProductPrice"></td>
                </tr>
                <tr>
                    <td><label for="">ProductDes </label></td>
                </tr>
                <tr>
                    <td><input type="text" required placeholder="ProductDes" name="ProductDes"></td>
                </tr>
                <tr>
                    <td><label>Images</label></td>
                </tr>
                <tr>
                    <td><input type="File" required placeholder="Images" name="Product_images"></td>
                </tr>
                <tr>
                    <td><label for="">CategoriID </label></td>
                </tr>
                <tr>
                <td>
					<select name="product_cat">
						<option>Select a category</option>
						<?php 
                $connect = mysqli_connect('localhost','root','','mysql_dat');
				$sql ="select * from categori" ;
				$result = mysqli_query($connect,$sql);
				while($row_cats=mysqli_fetch_array($result)){
					$CategoriID = $row_cats['CategoriID'];
					$CategoriName = $row_cats['CategoriName'];
					echo "<option value='$CategoriID'>$CategoriName</option>";
				}
		        ?>
					</select>
				</td>
                </tr>
                <tr>
                <tr>
                    <td> <input type="submit" value="More" name='Done'></td>
                </tr>
           </table>
           </form>
           <?php
            mysqli_set_charset($connect,"utf8");
            if(isset($_POST['Done'])){
            $file = $_FILES['Product_images']['name'];
            $file_tmp = $_FILES['Product_images']['tmp_name'];
            $path = "../../../../Images/";
            move_uploaded_file($file_tmp,$path.$file);
            $ProductName = $_POST['ProductName'];
            $ProductPrice = $_POST['ProductPrice'];
            $ProductDis = $_POST['ProductDes'];
            $spl = " select * from categori";
            $CategoriID = $_POST['CategoriID'];
            $sql="Insert into product values ('NULL','$ProductName','$ProductPrice','$ProductDis','$file','$CategoriID')";
            $result = mysqli_query($connect,$sql);
            if($result){
                echo"<script>alert('Account has been created successfully!')</script>";
                echo"<script>window.open('ProductView.php','_self')</script>";
            }
                else{
                echo"<script>alert('Error')</script>";
                echo"<script>window.open('ProductAdd.php','_self')</script>";
            }
        }
            ?>
        </div>
        <div class="clearfix"></div>
    </section>
    <footer>
        <div class="footer col-12">
        <table class="footer_1">
                <tr>
                    <td>Contact by phone number:096425400</td>
                </tr>
                <tr>
                    <td>or by email:datvmbhaf190170@fpt.edu.vn</td>
                </tr>
                <tr>
                    <td>or by Facebook:www.facebook.com/Vimanhdat</td>
                </tr>
            </table>
        </div>
        <div class="clearfix"></div>
    </footer>
</body>

</html>