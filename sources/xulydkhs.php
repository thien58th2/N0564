<?php require_once("include/connection.php"); ?>
<?php

	if (isset($_POST["taohoso"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$hovaten = $_POST["hovaten"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
        $facebook = $_POST["facebook"];
        $socmt = $_POST["socmt"];
        $noicap = $_POST["noicap"];
        $noiohientai = $_POST["noiohientai"];
        $hokhautt = $_POST["hokhautt"];
        $nghenghiep = $_POST["nghenghiep"];
        $noilamviec = $_POST["noilamviec"];
        $Sdtnoilamviec = $_POST["Sdtnoilamviec"];
        $luong = $_POST["luong"];
        $tenbode = $_POST["tenbode"];
         $congviecbo = $_POST["congviecbo"];
        $diachibo = $_POST["diachibo"];
        $tenmede = $_POST["tenmede"];
        $congviecme = $_POST["congviecme"];
        $diachime = $_POST["diachime"];
        $tennt = $_POST["tennt"];
        $congviecnt = $_POST["congviecnt"];
        $diachint = $_POST["diachint"];

       



		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if (!$hovaten || !$sdt || !$email || !$facebook || !$socmt ||  !$noicap  || !$noiohientai || !$hokhautt || !$nghenghiep || !$noilamviec ||!$Sdtnoilamviec || !$luong  || !$tenbode || !$congviecbo || !$diachibo  || !$tenmede || !!$congviecme || !$diachime ||! $tennt || !$congviecnt || !$diachint ) {
			echo "Vui lòng nhập đầy đủ thông tin.<a href='dangkyhoso.php'>Trở lại</a> ";
            exit;
		}else{
			$sql = "INSERT INTO thongtindangky1(fullname, phone, email,facebook,socmt,noicap,noiohientai,hokhautt,nghenghiep,noilamviec,Sdtnoilamviec,luong,tenbode,congviecbo,diachibo,tenmede,congviecme,diachime,tennt,congviecnt,diachint,socmt ) VALUES ( 
            '$hovaten', '$sdt', '$email','$facebook','$socmt','$noicap','$noiohientai','$hokhautt','$nghenghiep','$noilamviec','$Sdtnoilamviec','$luong','$tenbode','$congviecbo','$diachibo','$tenmede','$congviecme','$diachime','$tennt','$congviecnt','$diachint',013509098 )";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
            echo "chúc mừng bạn đã đăng ký thành công";
            echo "<a href='home.php'> Mời bạn đến trang chủ</a>";
		}
	}
 
?>