<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/33a12d68d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/resources/css/Style.css">
    <link rel="stylesheet" href="../Website/vendors/css/grid.css">
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
            <a href="../../../Index.php"><i class="fas fa-tshirt col-2"></i></a>
            <input class="col-4" type="search" name="" id="search" placeholder="tìm kiếm">
            <a href="#"><i class="fas fa-search col-1"></i></a>
            <a href="#"><i class="far fa-bell col-1"></i></a>
            <a href="..\Admin\FormLogin.php"><i class="far fa-user-circle col-1"></i></a>
            <a href="..\Admin\FormSignUp.php"><i class="fas fa-user-plus col-1"></i></a>
            <a href="#"><i class="fas fa-shopping-bag col-1"></i></a>
            <a href="#"><i class="far fa-question-circle col-1"></i></a>
        </div>
        <div class="clearfix"></div>
        <div class="topnav">
            <a href="../../../Index.php" class="col-2"> HOME</a>
            <a href="CatagoryAo.php" class="col-2">SHIRT</a>
            <a href="CatagoryQUan.php" class="col-2">TROUSERS</a>
            <a href="CatagoryGiay.php" class="col-2">SHOES</a>
            <a href="CatagoryAcc.php" class="col-2">ACCESSORIES</a>
            <a href="../FormLoginAdmin.php" class="col-2">ADMIN AREA</a>
        </div>
        <div class="clearfix"></div>
    </header>   
    <section>
        <div class="adv col-2 col-s-3">
        <img src="../../img/ShopSecondHand.jpg" alt="HinhAnh" width="250px" height= "250px">
        </div>
        <div class="form_main col-10 col-s-9">  
            <?php
                if (isset($_GET['ProductID'])) {	 
                $ProductID = intval($_GET['ProductID']); 		
                // $sql = " select  ProductID, ProductName, ProductPrice, ProductDes, Product_images, CategoriID from product, categori where product.CategoriID = categori.CategoriID AND ProductID=$ProductID";
                $sql = " SELECT `ProductID`, `ProductName`, `ProductPrice`, `ProductDes`, `Product_images`, `CategoriID` FROM `product` WHERE  product.CategoriID = categori.CategoriID AND ProductID=$ProductID";
                $result = mysqli_query($connect, $sql);
                while($row_pro =  mysqli_fetch_array($result)){
                    $ProductID =$row_pro['ProductID'];
                    $ProductName =$row_pro['ProductName'];
                    $ProductPrice =$row_pro['ProductPrice'];
                    $ProductDes =$row_pro['ProductDes'];
                    $Product_images =$row_pro['Product_images'];
                    $CategoriID =$row_pro['CategoriID'];
                    echo"
                    <div>
                    <h2>$ProductName</h2>
                    </div>
                    <div>
                        <div>
                              <img src='$Product_images'>
                        </div>
                        <div>
                              <h4>$ProductPrice</h4>
                        <div>	
                              <p> align='left'<b>Desscription</b> $ProductDes</p> 
                        </div>
                    </div>
                    ";
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