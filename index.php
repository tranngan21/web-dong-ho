<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop đồng hồ ALT</title>
    <link rel="stylesheet" type="text/css" href="css/stype_index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <?php
        function solve($n){
            $str= (string)$n;

            $len =strlen($str);
            $con1 = (string)substr($str, -3);

            $con2 = (string)substr($str,-6,-3);

            $con3 = (string)substr($str,0,-6);

            if($con3!="")
            echo $con3.'.'.$con2.'.'.$con1.'VND';
            else  echo $con2.'.'.$con1.'VND';
            } 
        include("module/header.php");
        include("module/main.php");
        include("module/footer.php");
    ?>
    </div>
    <script src="js/slide.js"></script>
</body>
</html>