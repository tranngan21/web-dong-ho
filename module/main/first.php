<div class="conten">
    <div class="hearder-main">
        <div class="title-main-header">
            <div class="title">
                <span>ĐỒNG HỒ CHÍNH HÃNG CAO CẤP</span>
            </div>
            <div class="subtilte">
                <span>Chúng tôi cam kết mang lại những giá trị cao nhất, chế độ hậu đãi tốt nhất & đồng hồ chính hãng khi khách hàng đến với donghoALT.com</span>
            </div>
        </div>
        <div class="icon-warrap text-center">
            <div class="icon-list">
                <div class="icon-box-faicon">
                    <img src="images/icon/icon-chat-luong.png" alt="">
                </div>
                <div class="title-con">
                    <h5>BẢO HÀNH MÁY VÀ PIN 5 NĂM</h5>
                </div>
            </div>
            <div class="icon-list">
                <div class="icon-box-faicon">
                    <img src="images/icon/icon-khuyen-mai.png" alt="">
                </div>
                <div class="title-con">
                    <h5>GIẢ ĐẾN 50% GIÁ CHÍNH HÃNG</h5>
                </div>
            </div>
            <div class="icon-list">
                <div class="icon-box-faicon">
                    <img src="images/icon/icon-van-chuyen.png" alt="">
                </div>
                <div class="title-con">
                    <h5>CHUYỂN HÀNG COD MIỄN PHÍ TOÀN QUỐC</h5>
                </div>
            </div>
            <div class="icon-list">
                <div class="icon-box-faicon">
                    <img src="images/icon/icon-uy-tinh.png" alt="">
                </div>
                <div class="title-con">
                    <h5>CHẾ ĐỘ 1 ĐỔI 1 TRONG 7 NGÀY ĐẦU</h5>
                </div>
            </div>
            <div class="icon-list">
                <div class="icon-box-faicon">
                    <img src="images/icon/icon-qua-tang.png" alt="">
                </div>
                <div class="title-con">
                    <h5>TẶNG KHĂN LAU ĐỒNG HỒ CAO CẤP</h5>
                </div>
            </div><div class="icon-list">
                <div class="icon-box-faicon">
                    <img src="images/icon/icon-tiet-kiem.png" alt="">
                </div>
                <div class="title-con">
                    <h5>THAY DÂY DA GIẢM GIÁ 50%</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <?php
        require("admincp/config/connect.php");
        $sql="SELECT * FROM (SELECT DDH.IdDongHo FROM dondathang AS DDH 
        GROUP BY DDH.IdDongHo, DDH.SoLuong ORDER BY SOLUONG DESC LIMIT 8) AS TAP INNER JOIN dongho AS DH ON TAP.IdDongHo = dh.ID ";
        $result = mysqli_query($conn,$sql);
        
    ?>
    
    <div class="hot">
        <div class="title-sp">
            <p>ĐỒNG HỒ BÁN CHẠY NHẤT</p>
        </div>
        <div class="dongho">
            <ul class="list-dongho text-center">
                <?php while($row= mysqli_fetch_assoc($result)){ ?>
                <li class="list-con text-center"><a href="index.php?dongho=<?php echo $row['ID']; ?>">
                    <div class="img">
                        <img src="<?php echo "images/filesanpham/".$row['File_img']; ?>" alt="">
                    </div>
                    <div class="titel-list">
                        <span><?php echo $row['Name']; ?></span><br><br>
                        <span><?php solve($row['Gia']); ?></span>
                    </div>
                </a></li>
                <?php } mysqli_close($conn);?>
            </ul>
            <div class="clear"></div>
            <div class="button-add text-center">
                <a class="button" href="index.php?menu=top100">XEM THÊM</a>
            </div>
        </div>
    </div>
    <div class="img-menu">
        <div class="wrapper-img left-conten">
            <a href="index.php?menu=nam">
                <div class="main-wrap-img">
                    <img src="images/icon/banner-dong-ho-nam.jpg" alt="">
                </div>
                <div class="main-wrap-title">
                    <p>ĐỒNG HỒ NAM</p>
                </div>
            </a>
        </div>
        <div class="wrapper-img right-conten">
            <a href="index.php?menu=nu">
                <div class="main-wrap-img">
                    <img src="images/icon/dong-ho-nu-new-1.png" alt="">
                </div>
                <div class="main-wrap-title">
                    <p>ĐỒNG HỒ NỮ</p>
                </div>
            </a>
        </div>
        <div class="clear"></div>
        <div class="bottom">
            <div class="wrapper-img left-conten">
                <a href="index.php?menu=top100">
                    <div class="main-wrap-img">
                        <img class="sub" src="images/icon/dong-ho-hot-1.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="wrapper-img left-conten" style="margin-left: 20px;">
                <a href="index.php?menu=co">
                    <div class="main-wrap-img">
                        <img class="sub" src="images/icon/dong-ho-co-1.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="wrapper-img left-conten" style="margin-left: 20px;">
                <a href="index.php?menu=pin">
                    <div class="main-wrap-img">
                        <img class="sub" src="images/icon/dong-ho-pin.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="wrapper-img left-conten" style="margin-left: 20px;">
                <a href="index.php?menu=doi">
                    <div class="main-wrap-img">
                        <img class="sub" src="images/icon/dong-ho-doi.jpg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
        require("admincp/config/connect.php");
        $sql="SELECT * FROM dongho WHERE GioiTinh = 3 LIMIT 8";
        $result = mysqli_query($conn,$sql);
        
    ?>
    <div class="clear"></div>
    

</div>

