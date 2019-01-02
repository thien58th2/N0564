<?php include './include/header.php'; ?>
    <main>
    <?php include './include/thongtindangky.php';?>
    <?php

	if (isset($_POST["taohoso"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$hovaten = $_POST["hovaten"];
		$phone = $_POST["phone"];
		
        $email = $_POST["email"];
        $facebook = $_POST["facebook"];
        $socmt = $_POST["socmt"];
        $ngaycap = $_POST["ngaycap"];
        $noicap = $_POST["noicap"];
        $sinhnhat = $_POST["sinhnhat"];
        $noiohientai = $_POST["noiohientai"];
        $hokhautt = $_POST["hokhautt"];
        $nghenghiep = $_POST["nghenghiep"];
        $noilamviec = $_POST["noilamviec"];
        $Sdtnoilamviec = $_POST["Sdtnoilamviec"];
        $luong = $_POST["luong"];
        $sex = $_POST["sex"];
        $relative = $_POST["relative"];
        $tenbode = $_POST["tenbode"];
        $namsinhbo = $_POST["namsinhbo"];
        $congviecbo = $_POST["congviecbo"];
        $diachibo = $_POST["diachibo"];
        $tenmede = $_POST["tenmede"];
        $namsinhme = $_POST["namsinhme"];
        $congviecme = $_POST["congviecme"];
        $diachime = $_POST["diachime"];
        $tennt = $_POST["tennt"];
        $namsinhnt = $_POST["namsinhnt"];
        $congviecnt = $_POST["congviecnt"];
        $diachint = $_POST["diachint"];

       



		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if (!$fullname || !$phone || !$email || !$facebook || !$socmt || !$ngaycap || !$noicap || !$sinhnhat || !$noiohientai || !$hokhautt || !$nghenghiep || !$noilamviec ||!$Sdtnoilamviec || !$luong || !$sex || !$relative || !$tenbode || !$congviecbo || !$diachibo || !$namsinhbo || !$tenmede || !!$congviecme || $diachime || !$namsinhme ||! $tennt || !$congviecnt || !$diachint || !$namsinhnt) {
			echo "Vui lòng nhập đầy đủ thông tin. ";
            exit;
		}else{
			$sql = "INSERT INTO dangkyhoso(fullname, phone, email,facebook,socmt,ngaycap,noicap,sinhnhat,noiohientai,hokhautt,nghenghiep,noilamviec,Sdtnoilamviec,luong,sex,relative,tenbode,namsinhbo,congviecbo,diachibo,tenmede,namsinhme,congviecme,diachime,tennt,samsinhnt,congviecnt,diachint  ) VALUES ( 
            '$fullname', '$phone', '$email','$facebook','$socmt','$ngaycap','$noicap','$sinhnhat','$noiohientai','$hokhautt','$nghenghiep','$noilamviec','$Sdtnoilamviec','$luong','$sex','$relative','$tenbode','$namsinhbo','$congviecbo','$diachibo','$tenmede','$namsinhme','$congviecme','$diachime','$tennt','$samsinhnt','$congviecn't,'$diachint' )";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
            echo "chúc mừng bạn đã đăng ký thành công";
            echo "<a href='home.php'> Mời bạn đến trang chủ</a>";
		}
	}
 
?>
    
    </main>
<?php include './include/footer.php'; ?>