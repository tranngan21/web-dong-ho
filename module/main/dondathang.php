<?php 
    require('admincp/config/connect.php');
    $sql="SELECT * FROM `dondathang` as ddh INNER JOIN dongho as dh ON ddh.IdDongHo=dh.ID WHERE ddh.IdKhach='".$_SESSION['username']."'";
    $result= mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    

?>

<div class="danhmuc-conten">
    <div class="header-title-main text-center">
        <span>Đơn Đặt Hàng</span>
    </div>
    <div class="dondathang">
        <table border="1" >
            <tr>
                <th> Mã hóa đơn</th>
                
                <th> Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Tình trạng đơn hàng</th>
                <th>Hủy đơn hàng</th>
            </tr>
            <?php 
                if($num!=0){
                while($row=mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td>
                        <?php 
                            echo $row['IdDH'];
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo$row['Name'];
                        ?>
                    </td>
                    <td>
                    <img src="<?php echo "images/filesanpham/".$row['File_img']; ?>" alt="">   
                    </td>
                    <td>
                        <?php 
                            echo$row['SoLuong'];
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo$row['Tongtien'];
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($row['TinhTrang']==1){
                                echo "Đã đặt hàng";
                            }
                            if($row['TinhTrang']==2){
                                echo "Đã giao hang";
                            }
                            if($row['TinhTrang']==0){
                                echo "Đã hủy";
                            }
                        ?>
                    </td>
                    <?php 
                        if($row["TinhTrang"]==1){ ?>
                           <td><a href="<?php echo"module/main/huy.php?huy=".$row['IdDH'];?>" onclick="return confirm('Bạn chắc chắn hủy đơn hàng?')" class="btn-x" style="background-color: red;"> X</a></td>
                            <?php
                        }
                        else echo"<td></td>";
                    ?>
                    
                </tr>
            <?php 
                }
            }
            else{
                echo"<td colspan='7'>
                Không có đơn đặt hàng
            </td>";
            }
            ?>
        </table>
    </div>
</div>
