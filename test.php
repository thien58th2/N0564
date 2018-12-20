<form>
<label>dangnhap</label>
<input type="text" id="username" name="username" autocomplete="off">
<input type="submit " id="btn_submit" value="dangnhap">
<?php
if($_POST)
$string=$_POST["username"];
$pattern="/(\d{10})^{\@wru\.vn}$/";
if (preg_match($pattern,$string,$match)==1)
{
    echo '<span style=\'color:green\'>**Bạn nhập username hợp lệ!**</span>';
 }
else{
echo '<span style=\'color:red\'>**Bạn phải nhập username hợp lệ!**</span>';
}
 ?>
<?php
     if (isset($_POST ["btn_submit"]))
     {
        $username=$_POST["username"];
        if($username=="")
        {
            echo 'BẠN VUI LÒNG NHẬP ĐẦY ĐỦ THÔNG TIN';

        }
        else
        {
            echo 'CHÚC MỪNG BẠN ĐÃ ĐĂNG KÝ THÀNH CÔNG';
        }
    }

?>
</form>