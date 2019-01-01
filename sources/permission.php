
<?php
if (isset($_SESSION['user_id']) == false) {

	header('Location: dang-nhap.php');
}else {
	if (isset($_SESSION['permision']) == true) {
		// Ngược lại nếu đã đăng nhập
		$permission = $_SESSION['permision'];
		
		if ($permission == '1') {
		
			echo "Em chào anh admin đẹp trai ạ";
			header("location:admin.php");
			
        }
        else {
            header("location:index.php");
            exit();

        }
        
        
	}
}
?>
