<?php
    session_start();
    if(isset($_SESSION['username'])&& $_SESSION['username']!=""){

    }
    else{
        header("location:../../index.php?action=login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/stypeadmin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header-menu">
            <div class="header">
                <h3>Wellcome To Admin</h3>
            </div>
            <div class="logout">
            <a href='log-out.php' onclick="return confirm('bạn có muốn đăng xuất không?') "><i class='fa fa-sign-out' style='font-size:35px; color:red'></i></a>
            </div>
            <div class="menu">
                <ul class="list_menu">
                    <li><a href="indexadmin.php?menu=dondathang">ĐƠN ĐẶT HÀNG</a></li>
                    <li><a href="indexadmin.php?menu=sanpham">SẢN PHẨM</a></li>
                    <li><a href="indexadmin.php?menu=cauhoi">CÂU HỎI</a></li>
                   
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="main">
            <?php 
                if(isset($_GET["menu"])){
                    $tmp = $_GET["menu"];
                }
                else{
                    $tmp ="";
                }
                if($tmp=="dondathang"){
                    include("dondathang/dondathang.php");
                    if(isset($_GET["action"])){
                        $next=$_GET["action"];
                    }
                    else{
                        $next ="";
                    }
                    
                    if($next=="fix"){
                        include("dondathang/xacnhan.php");
                    }
                }
                else if($tmp=="sanpham"){
                    include("sanpham/tbsanpham.php");
                    if(isset($_GET["action"])){
                        $next=$_GET["action"];
                    }
                    else{
                        $next ="";
                    }
                    if($next=="add"){
                        include_once("sanpham/add.php");
                    }
                    else if($next=="fix"){
                        include_once("sanpham/fix.php");
                    }
                    else if($next== "delete"){
                        include("sanpham/delete.php");
                    }
                }
                else if($tmp=="cauhoi"){
                    include("cauhoi.php");
                }
                else{
                    include("dondathang/dondathang.php");
                }
            ?>
        </div>
        <div class="footer">

        </div>
    </div>
</body>
</html>