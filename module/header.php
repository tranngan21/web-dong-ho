<div class="header-wapper">
    <div class="header">
        <div class="search">
            <form action="" method="get">
                <input type="search" name="txtSearch" id="" placeholder="Search...">
                <button style="font-size:24px"><i class="fa fa-search"></i></button>
            </form>
            
        </div>
        <div class="login">
            <a href="index.php?menu=cart"><i class="fa fa-shopping-cart" style="font-size:40px;color:while"></i></a>
            <ul class="menulogin">
                <li>
                    <a href=""><i class="fa fa-user" style="font-size:30px;color:while"></i></a>
                        <ul class="menu-login">
                            <?php if(isset($_SESSION['username'])&& $_SESSION['username']!=""){ ?>
                                <li><a href='module/log-out.php' onclick="return confirm('bạn có muốn đăng xuất')"><i class='fa fa-sign-out' style='font-size:24px; color:red'></i>log-out</a></li>
                                <li><a href='index.php?menu=dondathang'>Đơn đặt hàng</a></li>"
                                <?php
                                }
                                else{
                                    echo" <li><a href='index.php?action=login'>Login</a></li>";
                                }
                            ?>
                        </ul>
                </li>
                
            </ul>
            <?php if(isset($_SESSION['cart'])){
                echo"<div class='tb-number'><P> 
                       ".count($_SESSION['cart'])."
                    </P></div>";
            }?>
        </div>
    </div>
    <?php 
        require("admincp/config/connect.php");
        $sql="SELECT Hang FROM dongho WHERE not Hang ='None' GROUP by Hang";
        $result = mysqli_query($conn, $sql);
    ?>
    <div class="menu">
        <ul class="list_menu">
            <div class="left-menu ">
                <li class="li-menu"><a href="index.php?menu=top100"> TOP100</a></li>
                <li class="li-menu"><a href=""> THƯƠNG HIỆU</a>
                    <ul class="submenu">
                        <?php while($row=mysqli_fetch_assoc($result)){ ?>
                                <li><a href="index.php?menu=Hang&value=<?php echo $row['Hang'];?>"><?php echo $row['Hang']?></a></li>
                        <?php } mysqli_close($conn);?>
                    </ul>
                </li>
                <li class="li-menu"><a href="index.php?menu=nam"> NAM</a></li>
                <li class="li-menu"><a href="index.php?menu=nu"> NỮ</a></li>
            </div>
                <a href="index.php"><span class="titel_header">donghoTTN.com</span></a>
            <diiv class="right-menu">
                <li class="li-menu"><a href="index.php?menu=doi"> ĐÔI</a></li>
                <li class="li-menu"><a href="index.php?menu=treotuong"> TREO TƯỜNG</a></li>
                <li class="li-menu"><a href="index.php?menu=suachua"> SỬA CHỬA</a></li>
                <li class="li-menu"><a href="index.php?menu=lienhe"> LIÊN HỆ</a></li>
            </diiv>
        </ul>
    </div>
</div>
<div style="height: 111px; width: 100%;"></div>