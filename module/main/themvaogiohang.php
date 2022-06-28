<?php 
    session_start();
    require('../../admincp/config/connect.php');

    //coong
    if(isset($_SESSION['cart'])&& isset($_GET['cong'])){
        $id= $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
            }
            else{
                $tangsoluong = $cart_item['soluong']+1;
                printf($tangsoluong);
                if($cart_item['soluong']<10){
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
                }
                else{
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
                }

            }
        }
        $_SESSION['cart']=$product;
        header("location:../../index.php?menu=cart");

    }
    //tru
    if(isset($_SESSION['cart'])&& isset($_GET['tru'])){
        $id= $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
            }
            else{
                $tangsoluong = $cart_item['soluong']-1;
                printf($tangsoluong);
                if($cart_item['soluong']>1){
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
                }
                else{
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
                }

            }
        }
        $_SESSION['cart']=$product;
        header("location:../../index.php?menu=cart");

    }

    //xoa
    if(isset($_SESSION['cart'])&& isset($_GET['xoa'])){
        $id= $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
            }
        }
        $_SESSION['cart']=$product;
        header("location:../../index.php?menu=cart");

    }
    //them
    if(isset($_POST['themsanpham'])){

    //     session_destroy();
    // }
        $id= $_GET['idsanpham'];
        $soluong=$_POST['soluong'];
        echo $id.'soluong'.$soluong;
        $sql ="select * from dongho where ID='$id' LIMIT 1";
        $result =mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        if($row){
            $new_product= array(array('tensanpham'=>$row['Name'], 'id'=>$id, 'soluong'=>$soluong,'giasp'=>$row['Gia'],'hinhanh'=>$row['File_img']));
        }
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['id']==$id){
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong']+$soluong,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
                    $found=true;  
                }else{
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
                }
            }
            if(!$found){
                $_SESSION['cart']=array_merge($new_product,$product);

            }else{
                $_SESSION['cart']=$product;
            }
        }
        else $_SESSION['cart']=$new_product;
        header('location:../../index.php?dongho='.$id);
        
    }
   
?>
