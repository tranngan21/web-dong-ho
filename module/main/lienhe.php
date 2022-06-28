<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mess= $_POST['message'];

		$sql="INSERT INTO `cauhoi`(`name`, `email`, `messenger`) VALUES ('$name','$email','$mess')";
		require('admincp/config/connect.php');
		$result= mysqli_query($conn, $sql);
		if($result){
			echo "<script>alert('cảm ơn bạn đã gởi câu hỏi cho chúng tôi Nhân viên sẽ liên hệ lại ban sau!');</script>";

		}
        else echo "<script>alert('sai roi!');</script>";
	}
?>

<div class="header-title-main text-center">
        <span>LIÊN HỆ SHOP ĐỒNG HỒ CHÍNH HÃNG VIỆT NAM</span>
    </div>
<div class="contact-section">
		<div class="contact-info">
			<div><i class="fas fa-map-marker-alt"></i>566 Núi Thành, P. Hòa Cường Nam, Q. Hải Châu, TP. Đà Nẵng</div>
			<div><i class="fas fa-envelope"></i>Shopdonghoalt@gmail.com</div>
			<div><i class="fas fa-phone"></i>0902.678.910</div>
			<div><i class="fas fa-clock"></i>8h30 – 21h30</div>
			<div class="contact-form">
				<h2>Liên hệ đến chúng tôi</h2>
				<form class="contact"  method="POST">
					<input type="text" name="name" class="text-box" placeholder="Tên của bạn" required="" id="name">
					<input type="text" name="email" class="text-box" placeholder="Email or phone number" id="email" required="">
					<input type='textarea' name="message" rows="3" cols="60" placeholder="Nhập câu hỏi của bạn" id="mes" class= textarea>
					<input type="submit" name="submit" class="send-btn" value="Gửi" onclick="return checkspase()">
				</form>
			</div>
		</div>
	</div>
	<script src="js/check.js"></script>