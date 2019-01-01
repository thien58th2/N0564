
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./style/style1.css">
	<title>dangnhap</title>
</head>



 <body class="hinhnen">
	 <div >
 <a href="home.php" style="text-decoration:none;"> <h2 id="h2-logo">
                                            toichobanvay.com
                                        </h2>
                                     </a>
	 <div class="dangnhap">
	<form method="POST" action="xulydangnhap.php" style="border:solid 1px blue;
    background-color:aqua;">
	<fieldset>
	    <legend style="font-weight:bold;font-size:40px;color:red;text-align:center;">Đăng nhập</legend>
	    	<table 
	    		<tr>
					<td  >Tên đăng nhập</td>
					
	    			<td ><input type="text" name="username" size="30" autocomplete="off" placeholder="Vui lòng nhập tên đăng nhập..."></td>
	    		</tr>
	    		<tr>
	    			<td>Mật khẩu</td>
	    			<td><input type="password" name="password" size="30" autocomplete="off" placeholder="Vui lòng nhập mật khẩu..."></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng nhập" style="margin-left:6cm"></td>
				</tr>
				
	    			
	    		
			</table>
			<h3 align="center"><a href="dangky.php" >Bạn chưa có tài khoản?</a></td></h3>
  </fieldset>
  </form>
  </div>
</div>
  </body>
  </html>
