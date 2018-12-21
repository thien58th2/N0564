<?php require_once ('./include/connection.php'); ?>
<?php include './include/header.php'; ?>

<div class="dangky">
    <form action="dangky.php" method="POST">
        <table style="margin:auto;">
            <tr>
                <td colspan="3" style="font-weight:bold;font-size:40px;color:red;text-align:center">Đăng ký thành viên</td>

            </tr>
            <tr>
                <td >Tên đăng nhập: </td>
                <td><input type="text" id="username" name="username" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" id="pass" name="pass" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" id="email" name="email" autocomplete="off"></td>
                <td><?php 
                if($_POST)
                        {
                            $string=$_POST["email"];
                            $pattern="/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*\@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/";
                            if(preg_match($pattern,$string,$match)==1)
                                {
                                        echo '<span style=\'color:green\'>**Bạn nhập email hợp lệ!**</span>';
                                     }
                            else{
                                echo '<span style=\'color:red\'>**Bạn phải nhập email hợp lệ!**</span>';
                                }
                        } ?>
                </td>
            </tr>
            <tr>
                <td>Tên người dùng:</td>
                <td><input type="text" id="name" name="name" autocomplete="off"> </td>
            </tr>
            <tr>
                <td>Số chứng minh nhân dân:</td>
                <td><input type="text" id="number_idcard" name="number_idcard" autocomplete="off"></td>
                <td><?php 
    if($_POST)
    {
        $string=$_POST["number_idcard"];
        $pattern="/^[0-9]{9}/";
        if(preg_match($pattern,$string,$match)==1)
        {
            $report="<span style=\'color:green\'>**Bạn nhập số chứng minh thư hợp lệ!**</span>";
        }
        else{
            $report="<span style=\'color:red\'>**Bạn phải nhập số chứng minh thư hợp lệ(có từ 9-12 số)!**</span>";
        }
    } ?>
                <?php if(isset($report)){echo $report;} ?>
</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Đăng Ký"></td>
            </tr>


        </table>
    </form>
</div>             
<?php 
    if (isset($_POST ["btn_submit"]))
    {
        $username=$_POST["username"];
        $password=$_POST["pass"];
        $email=$_POST["email"];
        $name=$_POST["name"];
        $number_idcard=$_POST["number_idcard"];
        if($username=="" or $password=="" or $email=="" or $name=="" or $number_idcard=="")
        {
            echo 'BẠN VUI LÒNG NHẬP ĐẦY ĐỦ THÔNG TIN';

        }
        else{
            $sql="INSERT INTO users('"+username+"','"+password+"','"+email+"','"+number_idcard+"','"+name+"') values('$username','$password','$email','$name','$number_idcard',row())";
            mysqli_query($conn,$sql);
            echo 'CHÚC MỪNG BẠN ĐÃ ĐĂNG KÝ THÀNH CÔNG';

        }
    }
    ?>
<?php include './include/footer.php'; ?>