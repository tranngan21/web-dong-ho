<?php 
    if(isset($_POST['dat'])){
        require('admincp/config/connect.php');
        $acc= $_SESSION['username']; 
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        foreach($_SESSION['cart'] as $cart_item){
            $idhd="".uniqid("",true);
            $iddh=$cart_item['id'];
            $sl=$cart_item['soluong'];
            $gia=$cart_item['giasp'];
            $tongtien=$sl*$gia;
            $sql= "INSERT INTO `dondathang`(`IdDH`, `IdKhach`, `Tenkh`, `IdDongHo`, `SoLuong`, `Phone`, `DiaChiGiao`, `tongtien`, `TinhTrang`) 
            VALUES ('$idhd','$acc','$name','$iddh',$sl,$phone,'$address',$tongtien,1)";
            $result=mysqli_query($conn,$sql);
            
           
        }
        mysqli_close($conn);
        if($result){
            unset($_SESSION['cart']);
            echo"<script>alert('Xin cảm ơn quý khách đã đăt hàng tại donghoALT.com'); location.href ='index.php';</script>";
        }
        else{
            echo "<script>alert('bạn chưa điền đầy đủ thông tin!');</script>";
        }
       
    }
?>

<div class="danhmuc-conten">
    <div class="header-title-main text-center">
        <span>Thanh Toán và Giao Hàng</span>
    </div>
    <div class="dathang text-center">
        <h2>Thông tin người nhận</h2>
    
        <form method="POST">
            <table>
                <tr>
                    <td><input class="firstname" type="text" name="name" placeholder="Nhập đầy đủ họ tên" id="name"></td>
                    <td><input class="phone" type="number" name="phone" placeholder="Nhập số điện thoại" id='phone'></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="address" type="text" name="address" placeholder="Nhập địa chỉ" id='address'></td>
                </tr>
                <tr>
                        <td colspan="2"><select class="option" name="subject">
                    <option selected="selected">Thanh toán qua ví điện tử</option>
                    <option >Thanh toán qua visa</option>
                    <option >Thanh toán khi nhận hàng</option>
                </select></td>
                </tr>
                <tr><td colspan="2">
                    <input type="submit" value="Đặt hàng" class="submit" name="dat" onclick="return checkdk()">
                </td></tr>
            </table>
        </form>
    </div>
</div>
<script src="js/check.js"></script>