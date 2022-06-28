<?php 
    $tmp=$_GET['huy'];
    require('../../admincp/config/connect.php');
    $sql = "UPDATE `dondathang` SET `TinhTrang`='0' WHERE IdDH='$tmp'";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo"<script> location.href ='../../index.php?menu=dondathang';</script>";
    }
    else{
        echo 'loi roi';
    }
?>
