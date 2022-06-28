<?php
    require("admincp/config/connect.php");
    $sql = "select * from dongho";
    $result= mysqli_query($conn, $sql);
   
    

    
?>
<div class="mid">
    <div class="hot">
        <p style="font-size: 25px;">SẢN PHẨM HOT</p>
        <ul class="hot_list">
        <?php while($row = mysqli_fetch_assoc($result)){?>
            <li class="list_con"><a href="#">
                <div class="text-center">
                    <img src="<?php echo"images/filesanpham/".$row['File_img']; ?>" alt="" width="100px">
                    <p><?php echo $row["Name"]; ?></p>
                    <p><?php echo $row["Gia"]."đ"; ?></p>
                </div>
            </a></li>
            <?php } mysqli_close($conn);?>
        </ul>
        
    </div>
</div>






        <!-- <div class="mid">
            <div class="hot">
                <p style="font-size: 25px;"> SẢN PHẨM HOT</p>
                <ul class= "hot_list">
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></>
                </ul>
                
            </div>
            <div class="clear"></div>
            <div class="sanphammoi">
                <p style="font-size: 25px;">SẢN PHẨM MỚI</p>
                <ul class= "hot_list">
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></li>
                    <li class="list_con"><a href="#">
                        <div class="text-center">
                            <img src="images/rolex-submariner-116613-blkdd-date-116613.jpg" width="100px" >
                            <p> rolex-submariner</p>
                            <p>1.500.000đ</p>
                        </div>
                    </a></>
                </ul>
            </div>
        </div> -->
   