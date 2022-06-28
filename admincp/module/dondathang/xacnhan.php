<?php

    $id = $_GET["key"];
    $soluong =$_GET['sl'];
    $dongho= $_GET["dongho"];
    include("../config/connect.php");
    $sql = "UPDATE `dondathang` SET `TinhTrang`='2' WHERE IdDH='$id'";
    $sq = "UPDATE `dongho` SET`SoLuongCon`=SoLuongCon-'$soluong' WHERE ID='$dongho'";
    $result=mysqli_query($conn, $sql);
    $resul=mysqli_query($conn, $sq);
    mysqli_close($conn);
    if($result && $resul){
        echo"<script> location.href ='indexadmin.php?menu=dondathang';</script>";
    }
    else{
        echo 'loi roi';
    }
?>