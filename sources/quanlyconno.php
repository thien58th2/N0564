<?php
	session_start(); 
 ?>
<?php require_once("./include/connection.php");?>

<?php include ('./include/admin-header.php'); ?>

<?php
	$sql = "SELECT users.username,thongtindangky1.hovaten,thongtindangky1.facebook,thongtindangky1.socmt,thongtindangky1.sotienvay,thongtindangky1.songayv,thongtindangky1.sotientt,thongtindangky1.sotienphaitra,thongtindangky1.tenbode,thongtindangky1.diachibo,thongtindangky1.tenmede,thongtindangky1.diachime,thongtindangky1.tennt,thongtindangky1.diachint from users,thongtindangky1 where users.id_user=thongtindangky1.id_user";
	$query = mysqli_query($conn,$sql);
?>
<main>
    <div class="danhsach">
    <div class="conno">
    <h1 style="text-align:center;color:blue;font-weight:bold">Quản lý con nợ</h1>
    <table class="danhsachconno" width=100%>
    <h3>Danh sách con nợ đã vay tiền</h3>
    <tr>
            
            <th bgcolor="#E6E6FA">Tên đăng nhập</th>
			<th bgcolor="#E6E6FA">Họ và tên</th>
			<th bgcolor="#E6E6FA">Facebook</th>
			<th bgcolor="#E6E6FA">Số cmt</th>
            <th bgcolor="#E6E6FA">Số tiền vay</th>
            <th bgcolor="#E6E6FA">Thời gian vay</th>
            <th bgcolor="#E6E6FA">Số tiền cầm về</th>
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
           
              <tr>
                
                <td>sam123</td>
                <td>Lại Văn Sâm</td>
                <td>Sâm đẹp trai</td>
                <td>013508098</td>
                <td>5.000.000</td>
                <td>50</td>
                <td>4.500.000</td>
                <td>100.000</td>
                <td>Hà Nội</td>
                <td>Nguyễn Chí Thanh</td>
                <td>Huỳnh Thúc Kháng</td>
                <td>Lại Văn Xiêm</td>
                <td>Hà Nội</td>
                <td>Trần Thị Mỹ</td>
                <td>Thanh Hóa</td>
                <td>Lại Văn Ngọt</td>
                <td>Hà Nội</td>
                
              
               <td> <a href="xoa.php?id=1">Xóa</a></td>
              </tr>
           
              
            </tbody>
            
    </table>
    </div></div>
</main>


<?php include ('./include/footer.php'); ?> 