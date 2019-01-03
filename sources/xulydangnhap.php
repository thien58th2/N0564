<!-- <?php   session_start(); ?>
<?php

require_once("./include/connection.php");
	
if (isset($_POST["btn_submit"])) {
		
	$username = $_POST["username"];
	$password = $_POST["password"];

	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		echo "username hoặc password bạn không được để trống!";
	}else{
		$sql = "select * from users where username = '$username' and password = '$password' ";
		echo $sql;
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		}else{
			
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["name"] = $data["name"];
				$_SESSION["noio"] = $data["noio"];
				$_SESSION["permision"] = $data["permision"];
	    	}
			
			if ($_SESSION['permision']=='0') {
				
				echo "<script>javascript: alert('Chào anh admin Thiện đẹp trai')></script>";
				header('Location: index.php');
				}
				else 
				{	
					echo "<script>javascript: alert('Chào anh' .$name. 'đẹp trai')></script>";
					header('Location: home.php');
				}
		}
		}
	}

 ?> 