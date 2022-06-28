<?php
    $tmp ="";
    require("admincp/config/connect.php");
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["pass"];
        $sql="SELECT * FROM `accout` WHERE User='$username' and Pass='$password'";
        $result= mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row!=0){
            if($username=="UserADmin"){
                $_SESSION["username"]="admin";
                echo"<script> location.href ='admincp/module/indexadmin.php';</script>";
            }
            else{
                $_SESSION["username"]=$username;
                if(isset($_GET['menu'])){
                    exit();
                }
                else{
                    echo"<script> location.href ='index.php';</script>";
                }
            }
                
        }
        else{
            $tmp ="Mật khẩu sai!";
        }
        
        
    }
?>

<div class="fullview"></div>
<div class="wrapper-login">
    <div class="title-text">
    <a href="index.php"><button class="button-exit"><i class="fa fa-close"></i></button></a>
        <div class="title login">Đăng nhập</div>
    </div>
    <div class="form-container">
        <div class="form-inner" >
            <form method="POST" class="login">
                <div class="field">
                    <input type="text" placeholder="Tên đăng nhập" name="username" id="username" required="">
                </div>
                <div class="eyes"><i class="fa fa-eye" style="font-size:24px;" onclick="show(this)"></i></div>
                <div class="field">
                    <input type="password" placeholder="Mật khẩu" name="pass" id="pass" required="">
                </div>
                <div class="pass-link"><a href="#">Quên mật khẩu? </a></div>
                <div style="color:red"><?php echo $tmp?></div>
                <div class="field">
                    <input type="submit" value="Login" name="submit">
                </div>
                <div class="signup-link">Bạn chưa tài khoản? <a href="index.php?action=signup">Đăng ký ngay</a></div>
            </form>
        </div>
    </div>
</div>
<script src="js/check.js"></script>