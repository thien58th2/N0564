 

<!-- 
		// / Nếu không phải là sự kiện đăng ký thì không xử lý
    //     if (!isset($_POST['username'])){
    //         die('');
    //     }
    //     Nhúng file kết nối với database
    //     include ('./include/connection.php');
       
              
    //     Khai báo utf-8 để hiển thị được tiếng việt
    //     header('Content-Type: text/html; charset=UTF-8');
              
    //     Lấy dữ liệu từ file dangky.php
    //     $username   = addslashes($_POST['username']);
    //     $password   = addslashes($_POST['password']);
    //     $email      = addslashes($_POST['email']);
    //     $noio   = addslashes($_POST['noio']);
    //     $name   = addslashes($_POST['name']);
    
              
    //     Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    //     if (!$username || !$password || !$email || !$noio || !$noio )
    //     {
    //         echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //         exit;
    //     }
              
    //         Mã khóa mật khẩu
    //         $password = md5($password);
              
    //     Kiểm tra tên đăng nhập này đã có người dùng chưa
      
    //     Kiểm tra dạng nhập vào của ngày sinh
        
    //     Lưu thông tin thành viên vào bảng
    //     @$addmember = mysql_query("
    //         INSERT INTO users (
    //             username,
    //             password,
    //             email,
    //             noio,
    //             name
                
    //         )
    //         VALUE (
    //             '{$username}',
    //             '{$password}',
    //             '{$email}',
    //             '{$noio}',
    //             '{$name}'
                
    //         )
    //     ");
    //     mysqli_query($conn,$sql);                    
    //     Thông báo quá trình lưu
    //     if ($addmember)
    //         echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
    //     else
    //         echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
	// ?> -->
    <?php require_once("include/connection.php"); ?>
<?php

	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["password"];
		
        $email = $_POST["email"];
        $noio = $_POST["noio"];
        $name = $_POST["name"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if (!$username || !$password || !$email || !$noio || !$name) {
			echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
		}else{
            if($_POST){
                $string = $_POST['username'];
                    $pattern = '#^[A-z][\w\.]{5,31}$#';
                    if(preg_match($pattern, $string, $match) == 1){
                        $report = '<span style=\'color:#298426\'>Bạn vừa nhập vào một tài khoản hợp lệ!</span>';
                }
                else{
            
               
			$sql = "INSERT INTO users(username, password, email,noio,permision,name  ) VALUES ( '$username', '$password', '$email', '$noio','1', '$name')";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
            echo "chúc mừng bạn đã đăng ký thành công";
            echo "<a href='home.php'> Mời bạn đến trang chủ</a>";
                
            }
		}
    }
}
    

 
 
?>
