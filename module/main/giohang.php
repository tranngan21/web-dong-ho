<div class="giohang ">
    <div class="header-title-main text-center">
        <span>Giỏ Hàng</span>
    </div>
<?php
    if(isset($_SESSION['cart'])){

    
?>
    <div class="conten-giohang">
    <?php $sumMoney = 0; foreach($_SESSION['cart'] as $cart_item){ ?>
        <div class="list-hang"><a href="index.php?dongho=<?php echo $cart_item['id'];?>">
            <div class="img">
                <img src="images/filesanpham/<?php echo $cart_item['hinhanh'];?>" alt="">
            </div>
            <div class="info-sanpham">
                <h3>Đồng hồ <?php echo $cart_item['tensanpham'] ?></h3>
                <p>Giá: <?php solve($cart_item['giasp']);?></p>
                <p>Số lượng:<a class="btn-x" href="module/main/themvaogiohang.php?tru=<?php echo$cart_item['id']; ?>">-</a> 
                <?php echo $cart_item['soluong'];?> 
                <a class="btn-x" href="module/main/themvaogiohang.php?cong=<?php echo$cart_item['id']; ?>">+</a>  </p>
            </div></a>
            <div class="footer-info">
                <a href="module/main/themvaogiohang.php?xoa=<?php echo$cart_item['id'];?>" class="btn">Xóa</a> 
                <p class="sum-money"><b>Thành tiền:</b> <?php $sumMoney+=$cart_item['giasp']*$cart_item['soluong']; solve($cart_item['giasp']*$cart_item['soluong']) ;?></p>
            </div>
            <div class="clear"></div>
            
        </div>
    </div>
</div>
<?php 
        }
?>
    <div class="tongtien text-center">
        <h3>TỔNG TIỀN: <?php solve( $sumMoney);?></h3>
        <a href="<?php if(isset($_SESSION['username'])&& $_SESSION['username']!=""){
            echo"index.php?menu=dathang";
        }
        else{
            echo"index.php?menu=dathang&action=login";
        }
        
        ?>
        " class="btn adress" onclick="check_user()">Đặt hàng</a>
    </div>
    
<?php
    }
    else{
?>
    <div class="empty-cart text-center">
        <h3>GIÕ HÀNG RỖNG</h3>
        <img src="images/icon/empty-cart.png" alt="">
        
    </div>
<?php
    }
?>