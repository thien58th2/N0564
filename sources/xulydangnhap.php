<?php   session_start(); ?>
<?php
 require_once ('./include/connection.php'); 
 if (isset($_POST["btn_submit"])) {
	// lấy thông tin người dùng
	$username = $_POST["username"];
	$password = $_POST["password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
	}else{
		$sql = "select * from users where username = '$username' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			// while ( $data = mysqli_fetch_array($query) ) {
	    	// 	$_SESSION["user_id"] = $data["id"];
			// 	$_SESSION['username'] = $data["username"];
			// 	$_SESSION["email"] = $data["email"];
			// 	$_SESSION["fullname"] = $data["fullname"];
			// 	$_SESSION["is_block"] = $data["is_block"];
			// 	$_SESSION["permision"] = $data["permision"];
	    	// }
			
            //     Thực thi hành động sau khi lưu thông tin vào session
            //     ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			// header('Location: index.php');
			$row = mysql_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='home.php'>Về trang chủ</a>";
    die();
		}
	}
}
 ?>