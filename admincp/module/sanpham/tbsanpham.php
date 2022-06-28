<?php
    require("../config/connect.php");
    $sql = "select * from dongho";
    $result= mysqli_query($conn, $sql);
?>

<div class="header-main">
    <div class="top">
    <p><span class="titel-main">Danh Sách Sản Phẩm</span></p>
    </div>
    <div class="tbmain">
        <table border="1" class="tb">
            <tr>
                <th>stt</th>
                <th>Mã đồng hồ</th>
                <th>Tên</th>
                <th>Hãng</th>
                <th>Giới tính</th>
                <th>Máy</th>
                <th>Loại dây</th>
                <th>Số Lượng</th>
                <th>Thông tin thêm</th>
                <th>Giá</th>
                <th colspan="2"><a href="indexadmin.php?menu=sanpham&action=add">Thêm</a></th>
            </tr>
            <?php
                $stt=1;
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $stt; $stt++;?></td>
                    <td><?php echo $row["ID"];?></td>
                    <td><?php echo $row["Name"];?></td>
                    <td><?php echo $row["Hang"];?></td>
                    <td><?php if($row["GioiTinh"]==1) echo "nam";
                                else if($row["GioiTinh"]==0) echo "Nữ";
                                else if($row["GioiTinh"]==2) echo "Đôi";
                                else if($row["GioiTinh"]==3) echo "Treo tường";
                    ?></td>
                    <td><?php if($row["May"]== 1)echo "cơ";
                                else echo "pin";
                    ?></td>
                    <td><?php if($row["Chat_Lieu_Day"]==1) echo "thép";
                                else if($row["Chat_Lieu_Day"]==0)echo "da";
                                else echo "nhựa";
                    ?></td>
                    <td><?php if($row["SoLuongCon"]==0)echo "Hết";
                                else echo $row["SoLuongCon"];
                    ?></td>
                    <td><?php echo $row["ThongTinThem"];?></td>
                    <td><?php echo $row["Gia"];?></td>
                    <td><a href="indexadmin.php?menu=sanpham&action=fix&key=<?php echo$row['ID']; ?>">Sửa</a></td>
                    <td><a href="indexadmin.php?menu=sanpham&action=delete&key=<?php echo$row['ID']; ?>" onclick="return confirm('bạn có chắc chắn không? ');">Xóa</a></td>
                </tr>
            <?php
                }
            ?>
        </table>
    </div>
</div>