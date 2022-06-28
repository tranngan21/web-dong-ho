<?php
    require("../config/connect.php");
    $sql = "select * from cauhoi";
    $result= mysqli_query($conn, $sql);
?>
<div class="header-main">
    <div class="top">
    <p><span class="titel-main">Câu Hỏi Gởi Về</span></p>
    </div>
    <div class="tbmain">
        <table border="1" class="tb">
            <tr>
                <th>Tên</th>
                <th>email</th>
                <th>Câu Hỏi</th>
            
            </tr>
            <?php
                if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["messenger"];?></td>
                </tr>
            <?php }}
                else echo "<tr><td colspan='3'>Không có câu hỏi</td></tr>";
            ?>
            
        </table>
    </div>
</div>