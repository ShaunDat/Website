<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/33a12d68d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/resources/css/Style.css">
    <link rel="stylesheet" href="../Website/vendors/css/grid.css">
    <link rel="stylesheet" href="../Website/vendors/fonts/open-iconic-master/package.json">
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
        <?php 
             $connect = mysqli_connect('localhost','root','','mysql_dat');
        ?>
       
        <div class="clearfix"></div>
    </header>
    <section>
        <div class="adv col-2 col-s-3">
        <img src="../img/ShopSecondHand.jpg" alt="HinhAnh" width="250px" height= "250px">
        </div>
        <div class="form_main col-10 col-s-9">
            <form method= "post"> 
                <table class="col-10 col-s-12">
                    <tr>
                    <td><p style="font-size: 35px"> Sign in to Admin of Show Second Hand</p></td>
                    </tr>
                    <tr>
                    <td><label>Account Admin</label></td>
                    </tr>
                    <tr>
                    <td><input type="text" required placeholder="Account" name="AccountAdmin"></td>
                    </tr>
                    <tr>
                    <td><ladel> Password Admin</ladel></td>
                    </tr>
                    <tr>
                    <td><input type="Password" required placeholder="Password" name = "PasswordAdmin"></td>
                    </tr>
                    <td><input type="submit" value="Login" name="Login"></td>				  
                </table>
            </form>
            <?php if(isset($_POST['Login'])){
		 $AccountAdmin = $_POST['AccountAdmin'];
		 $PasswordAdmin = $_POST['PasswordAdmin'];
		 $sql = "select * from account where AccountAdmin = '$AccountAdmin' AND PasswordAdmin = '$PasswordAdmin'"; 
		 $result = mysqli_query($connect,$sql);
         $checkLogin = mysqli_num_rows($result);
         $row_Login = mysqli_query($result);
		 if($checkLogin == 0)
		 {
             echo "<script>alert('Password or username is incorrert, please try again!') </script>";
             echo"<script>window.open('FormLoginAdmin.php','_self')</script>";
			 exit();
		 }
		 if($checkLogin > 0)
		 {
            //  $_SESSION['AccountID'] = $row_Login['AccountID'];
            //  $_SESSION['AccountID'] = $AccountName;
             echo"<script>alert('You have logged in succesfully!')</script>";
             echo"<script>window.open('Edit.php','_self')</script>";
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