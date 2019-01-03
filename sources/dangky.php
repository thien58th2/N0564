<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./style/style1.css">
	<title>dangky</title>
</head>



 <body class="hinhnen2">

    <div class="dangky">
        
        <form action="xulydangky.php" method="POST" >
            <fieldset>   
            <legend style="font-weight:bold;font-size:40px;color:red;text-align:center;">Đăng ký tài khoản</legend>

            <table >
                
                <tr>
                    <td>
                        Tên đăng nhập : <?php if(isset($report)){echo $report;}?><br />
                    </td>
                    <td>
                        <input type="text" name="username" size="50" autocomplete="off" placeholder="Mời bạn điền thông tin vào đây..."/>
                    </td>
                   
                    
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="password" size="50" autocomplete="off" placeholder="Mời bạn điền thông tin vào đây..."/>
                    </td>
                   
                </tr>
               
                <tr>
                    <td>
                        Email :<?php if(isset($report)){echo $report;}?><br />
                    </td>
                    <td>
                        <input type="text" name="email" size="50"  autocomplete="off" placeholder="Mời bạn điền thông tin vào đây..."/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nơi ở:
                    </td>
                    <td>
                        <input type="text" name="noio" size="50"  autocomplete="off" placeholder="Mời bạn điền thông tin vào đây..."/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tên sử dụng:
                    </td>
                    <td>
                        <input type="text" name="name" size="50"  autocomplete="off" placeholder="Mời bạn điền thông tin vào đây..."/>
                    </td>
                </tr>
                
            </table>
            <input type="submit" value="Đăng ký" class="anvao" name="btn_submit" />

            
            </fieldset>
        </form>
        </div>
        
    
</body>
</html>