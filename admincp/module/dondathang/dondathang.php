<?php
    require("../config/connect.php");
    $sql = "select * from dondathang";
    $result= mysqli_query($conn, $sql);
?>

<div class="header-main">
    <div class="top">
    <p><span class="titel-main">Đơn Dặt Hàng</span></p>
    </div>
    <div class="tbmain">
        <table border="1" class="tb">
            <tr>
                <th>Mã Đơn Hàng</th>
                <th>Tên khách hàng</th>
                <th>Mã Đồng hồ</th>
                <th>Số Lượng</th>
                <th>Địa chỉ giao hàng</th>
                <th>Tình trạng đơn hàng</th>
                <th>xác nhận đã giao</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $row["IdDH"];?></td>
                    <td><?php echo $row["Tenkh"];?></td>
                    <td><?php echo $row["IdDongHo"];?></td>
                    <td><?php echo $row["SoLuong"];?></td>
                    <td><?php echo $row["DiaChiGiao"];?></td>
                    <td><?php if($row["TinhTrang"]==1) echo "đã đặt";
                                else if($row["TinhTrang"]==2) echo "đã giao";
                                else echo "đã hủy";
                    ?></td>
                    <?php 
                        if($row["TinhTrang"]==1){
                            echo"<td><a href='indexadmin.php?menu=dondathang&action=fix&key=".$row["IdDH"]."&sl=".$row["SoLuong"]."&dongho=".$row["IdDongHo"]." onclick='return confirm('Bạn có chắc chắn không? ')'>giao</a></td>";
                        }
                        else echo"<td></td>";
                    ?>
                   
                </tr>
            <?php
                }
            ?>
        </table>
    </div>
</div>