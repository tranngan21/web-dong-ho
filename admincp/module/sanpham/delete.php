<?php 
    $id =$_GET['key'];
    require("../config/connect.php");
    $sql = "delete from dongho where ID = '$id'";
    if(mysqli_query($conn, $sql)){
        mysqli_close($conn);
        echo"<script> location.href ='indexadmin.php?menu=sanpham';</script>";
    }

?>