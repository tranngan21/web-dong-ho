<div class="main">
    
    <?php
        if(isset($_GET["menu"])){
            $menu= $_GET['menu'];
            if($menu=='top100'|| $menu=='Hang'|| $menu=='nam'|| $menu=='nu' || $menu =='doi' || $menu=='treotuong'|| $menu=='co'|| $menu=='pin' ){
                include('main/danhmuc.php');
            }
            if($menu=='cart'){
                include("module/main/giohang.php");
            }
            if($menu=='suachua'){
                include("module/main/suachua.php");
            }
            if($menu=='lienhe'){
                include('module/main/lienhe.php');
            }
            if($menu=='dondathang'){
                include('module/main/dondathang.php');
            }
            if($menu=='dathang'){
                include('module/main/dathang.php');
            }
            
            
        }
        else if(isset($_GET["dongho"])){
            include("main/chitietdongho.php");
        }
        else if(isset($_GET['txtSearch'])){
            include('module/main/search.php');
        }
        else{
            require("slide/slide.php");
            require("main/first.php");
        }
    
    ?>
    
    <?php 
        if(isset($_GET["action"])){
            if($_GET["action"]=="login"){
                include("module/login.php");
            }
            else if($_GET["action"]="lognup"){
                include("module/signup.php");
            }else{
                
            }
        }
        
    ?>
</div>
<div class="clear"></div>