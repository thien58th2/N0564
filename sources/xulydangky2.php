<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['username'])){
        die('');
    }
    //Nhúng file kết nối với database
    include ('../include/connection.php');
   
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['username']);
    $password   = addslashes($_POST['password']);
    $email      = addslashes($_POST['email']);
    $noio   = addslashes($_POST['noio']);
    $name   = addslashes($_POST['name']);

          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$email || !$noio || !$noio )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT username FROM users WHERE username='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT email FROM users WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    } 
    //Kiểm tra dạng nhập vào của ngày sinh
    
    //Lưu thông tin thành viên vào bảng
    @$addmember = mysql_query("
        INSERT INTO users (
            username,
            password,
            email,
            noio,
            name
            
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$noio}',
            '{$name}'
            
        )
    ");
    mysqli_query($conn,$sql);                    
    //Thông báo quá trình lưu
    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>

if (isset($_SESSION['permision']) == true) {
				// Ngược lại nếu đã đăng nhập
				$permission = $_SESSION['permision'];
				// Kiểm tra quyền của người đó có phải là admin hay không
				if ($permission == '0') {
					// Nếu không phải admin thì xuất thông báo
					echo "Xin chào admin<br>";
					header('Location : index.php');
					exit();
				}
				else
				header('Location: home.php');
			}
            if (isset($_SESSION['permision']) == 0) {
				// Ngược lại nếu đã đăng nhập
				
					// Nếu không phải admin thì xuất thông báo
					echo "Xin chào admin<br>";
					echo "<a href='index.php'> Click để vào trang của admin nào</a>";
			}
				
				else
				echo "<a href='home.php'> Click để vào trang chủ nào</a>";
			}
		}

        $('.songayvay input[type="radio"]').click(function(){
         ngay= $(this).val();
         tienv= $('.danhsachgoivay input[name="nhantien"]:checked').val();
        tientattoan = tienv*1000000;
        $("#sttt").html(tien);
    })
    $('.songayvay input[type="radio"]').click(function(){
         ngay= $(this).val();
         tienv= $('.danhsachgoivay input[name="nhantien"]:checked').val();
        tientattoan = (tienv*1000000)/ngayv;
        $("#sttt").html(tien);
    })