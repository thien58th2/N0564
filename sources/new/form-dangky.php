<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang đăng lý</title>
    </head>
    <body>
        <h1>Trang đăng ký thành viên</h1>
        <form action="xuly.php" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        Tên đăng nhập : 
                    </td>
                    <td>
                        <input type="text" name="username" size="50" autocomplete="off" />
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="password" size="50" autocomplete="off" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="text" name="email" size="50"  autocomplete="off" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ và tên :
                    </td>
                    <td>
                        <input type="text" name="name" size="50"  autocomplete="off" />
                    </td>
                </tr>
                
            </table>
            <input type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
        </form>
    </body>
</html>