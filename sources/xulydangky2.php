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
    
<main>
		
        <div class="container">
      <div class="row">
        <h3> Quản lý con nợ</h3>
        <table class="table">
          <caption>Danh sách con nợ đã vay tiền</caption>
          <thead>
            <tr>
            <th bgcolor="#E6E6FA">STT</th>
            <th bgcolor="#E6E6FA">Tên đăng nhập</th>
			<th bgcolor="#E6E6FA">Họ và tên</th>
			<th bgcolor="#E6E6FA">Facebook</th>
			<th bgcolor="#E6E6FA">Số cmt</th>
            <th bgcolor="#E6E6FA">Số tiền vay</th>
            <th bgcolor="#E6E6FA">Thời gian vay</th>
            <th bgcolor="#E6E6FA">Số tiền phải trả</th>
            <th bgcolor="#E6E6FA">Số tiền phải trả theo ngày</th>
			<th bgcolor="#E6E6FA">Nơi ở hiện tại</th>
            <th bgcolor="#E6E6FA">Hộ khẩu thường trú</th>
            <th bgcolor="#E6E6FA">Nơi làm việc</th>
            <th bgcolor="#E6E6FA">Tên bố đẻ</th>
            <th bgcolor="#E6E6FA">Địa chỉ của bố</th>
            <th bgcolor="#E6E6FA">Tên mẹ đẻ</th>
            <th bgcolor="#E6E6FA">Địa chỉ của mẹ</th>
            <th bgcolor="#E6E6FA">Tên Anh/Chị/Em/Vợ</th>
            <th bgcolor="#E6E6FA">Địa chỉ  </th>
            </tr>
          
          <tbody>
          <?php 
		while ( $data = mysqli_fetch_array($query) ) {
			$i = 1;
			$id = $data['id'];
	            ?>
            <tr>
              <th scope="row">1</th>
              <td><?php echo $data['username'];?></td>
              <td><?php echo $data['hovaten'];?></td>
              <td><?php echo $data['facebook'];?></td>
              <td><?php echo $data['socmt'];?></td>
              <td><?php echo $data['sotienvay'];?></td>
              <td><?php echo $data['songayv'];?></td>
              <td><?php echo $data['sotientt'];?></td>
              <td><?php echo $data['sotienphaitra'];?></td>
              <td><?php echo $data['tenbode'];?></td>
              <td><?php echo $data['diachibo'];?></td>
              <td><?php echo $data['tenmede'];?></td>
              <td><?php echo $data['diachime'];?></td>
              <td><?php echo $data['tennt'];?></td>
              <td><?php echo $data['diachint'];?></td>
              
            
             <td> <a href="xoa.php?id=1">Xóa</a></td>
            </tr>
            
          </tbody>
        </table>
      </div>
 
    </div>

    </main>	 <?php
              $sql = "SELECT users.username,thongtindangky1.hovaten,thongtindangky1.facebook,thongtindangky1.socmt,thongtindangky1.sotienvay,thongtindangky1.songayv,thongtindangky1.sotientt,thongtindangky1.sotienphaitra,thongtindangky1.tenbode,thongtindangky1.diachibo,thongtindangky1.tenmede,thongtindangky1.diachime,thongtindangky1.tennt,thongtindangky1.diachint from users,thongtindangky1 where users.id_user=thongtindangky1.id_user";
                $result= mysql_query($sql)

          ?>
          <?php   
    session_start();
    
    include './include/connection.php';

        if($_POST(["vay"]=="vay")){
    $nhantien=$_POST["sotienvay"];
    $ngayvay=$_POST["ngayvay"];
    $stcv=$_POST["stcv"];
    $sttt=$_POST["sttt"];
    $sttghn=$_POST["sttghn"];
    $sql="INSERT into chovaytratheongay value ('$nhantien','$ngayvay','$stcv','$sttt','$sttghn',013509098)";
    mysqli_query($conn,$sql);
    echo 'Vay thành công';


    mysqli_close($conn);
        }

    
    ?>