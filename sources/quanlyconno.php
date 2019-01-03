<?php
	session_start(); 
 ?>
<?php require_once("include/connection.php");?>

<?php include ("include/admin-header.php"); ?>
<?php
	$sql = "SELECT users.username,thongtindangky1.hovaten,thongtindangky1.facebook,thongtindangky1.socmt,thongtindangky1.sotienvay,thongtindangky1.songayv,thongtindangky1.sotientt,thongtindangky1.sotienphaitra,thongtindangky1.tenbode,thongtindangky1.diachibo,thongtindangky1.tenmede,thongtindangky1.diachime,thongtindangky1.tennt,thongtindangky1.diachint from users,thongtindangky1 where users.id_user=thongtindangky1.id_user";
	$query = mysqli_query($conn,$sql);
?>

	
		
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
			<th bgcolor="#E6E6FA">Số cmt</td>
            <th bgcolor="#E6E6FA">Số tiền vay</td>
            <th bgcolor="#E6E6FA">Thời gian vay</td>
            <th bgcolor="#E6E6FA">Số tiền phải trả</td>
            <th bgcolor="#E6E6FA">Số tiền phải trả theo ngày</td>
			<th bgcolor="#E6E6FA">Nơi ở hiện tại</td>
            <th bgcolor="#E6E6FA">Hộ khẩu thường trú</td>
            <th bgcolor="#E6E6FA">Nơi làm việc</td>
            <th bgcolor="#E6E6FA">Tên bố đẻ</td>
            <th bgcolor="#E6E6FA">Địa chỉ của bố</td>
            <th bgcolor="#E6E6FA">Tên mẹ đẻ</td></td>
            <th bgcolor="#E6E6FA">Địa chỉ của mẹ</td>
            <th bgcolor="#E6E6FA">Tên Anh/Chị/Em/Vợ</th></td>
            <th bgcolor="#E6E6FA">Địa chỉ </td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>uyen1</td>
              <td>Lại Uyên</td>
              <td>laiuyen@gmail.com</td>
              <td>013508098</td>
              <td>0</td>
              <td>0</td>
              <td>Thái Nguyên</td>
              <td>Quảng Ninh</td>
              <td>Thái Nguyên</td>
              <td>Lại Văn A</td>
              <td>Thái Nguyên</td>
              <td>Trần Tị B</td>
              <td>Thái Nguyên</td>
              <td>Nguyễn văn B</td>
              <td>Thái Nguyên</td>
              <td><a href="sua.php?id=1">Sửa</a> 
              <a href="xoa.php?id=1">Xóa</a></td>
            </tr>
            
          </tbody>
        </table>
      </div>
 
    </div>

 
<?php include "include/footer.php" ?>