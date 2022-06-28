<?php
    $tim=$_GET['txtSearch'];
    if($tim=="đồng hồ nam"){
        $sql= "select * from dongho where GioiTinh=1";
    }
    else if($tim=="đồng hồ nữ"){
        $sql= "select * from dongho where GioiTinh=0";
    }
    else if($tim=="đồng hồ đôi"){
        $sql= "select * from dongho where GioiTinh=2";
    }
    else if($tim=="đồng hồ treo tường"){
        $sql= "select * from dongho where GioiTinh=3";
    }
    else{
        $sql = "select * from dongho where Hang='$tim' or Name='$tim'";
    }
    require('admincp/config/connect.php');
    $result=mysqli_query($conn,$sql);

?>
<div class="danhmuc-conten">
    <div class="header-title-main text-center">
        <span><?php 
                echo "Kết quả tìm kiếm: ".$tim;
        ?></span>
    </div>
    <?php 
        if(mysqli_num_rows($result)>0){

        
    ?>
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
    </div>
    <?php }else{?>
        <div class="search-none">
            <img src="images/icon/th.jfif" width="300px" alt="">
            <h2>Không tìm thấy kết quả</h2>
        </div>
    <?php }?>
</div>