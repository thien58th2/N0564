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
    <h2>Quản lý con nợ</h2>
    <table class="danhsachconno" width=50%>
    <h3>Danh sách con nợ đã vay tiền</h3>
    <tr>
            
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
              $stt = 1;
              $id = $data['id'];
                  ?>
              <tr>
                <th scope="row"><?php echo $stt; ?></th>
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
              <?php 
			$stt++;
		}
	?>

              
            </tbody>
            
    </table>
    </div></div>
</main>


<?php include ('./include/footer.php'); ?> 