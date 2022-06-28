<?php
    $tmp ="";
    require("admincp/config/connect.php");
    if(isset($_POST["btn_submit"])){
        $user = $_POST["username"];
        $phone = $_POST["phone"];
        $pass = $_POST["pass"];
        $sql= "SELECT * FROM `accout` WHERE User='$user'";
        $result= mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row!=0){
            
            mysqli_close($conn);
            echo"<script>alert('tài khoản đã tồn tại');l</script>";
        }
        else{
            $sql = "insert into accout(user, pass, phone) value ('$user','$pass', '$phone' )";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo"<script>alert('đăng kí tài khoản thành công!');location.href='index.php?action=login';</script>";
        }
    }
?>

<div class="fullview"></div>
<div class="wrapper-login">
<a href="index.php"><button class="button-exit"><i class="fa fa-close"></i></button></a>
        <div class="title-text">
            <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form method="POST" class="login">
                    <div class="field">
                        <input type="text" placeholder="Tên đăng nhập" name="username" id="" required="">
                    </div>
                    <div class="messenger"><?php echo $tmp; ?></div>
                    <div class="field">
                        <input type="text" placeholder="Số điện thoại" name="phone" id="" required="">
                    </div>
                    <div class="field"><div class="eyes-1"><i class="fa fa-eye" style="font-size:24px;" onclick="show(this)"></i></div>
                        <input type="password" placeholder="Mật khẩu" name="pass" id="pass" required="">
                    </div>
                    <div class="field"><div class="eyes-2"><i class="fa fa-eye" style="font-size:24px;" onclick="show1(this)"></i></div>
                        <input type="password" placeholder="Nhập lại mật khẩu" name="repass" id="repass" required="">
                    </div>
                    <div class="field">
                        <input type="submit" value="Singup" name="btn_submit" onclick="return checkpass()">
                    </div>
                    <div class="signup-link">Bạn đã có tài khoản? <a href="index.php?action=login">Đăng nhập</a></div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/check.js"></script>
