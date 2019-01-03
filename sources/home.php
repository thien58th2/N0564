<?php session_start(); ?>
<?php include './include/header.php'; ?>
<?php require_once ('./include/connection.php'); ?>
<main>
 
<div style="text-align:right;background-color: rgb(160, 20, 20);color:yellow;font-size:25px;">
        <?php 
         if (isset($_SESSION['username']) && $_SESSION['username']){
            echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
            echo 'Click vào đây để <a href="dangxuat.php" style="border:1px solid;color:white">Logout</a>';
        }
        else{
            echo 'Bạn chưa đăng nhập';
        }
        ?>
       </div>
          <div class="image-main">
              <img alt="anh dep" src="./style/image/thanthien.jpg" height="378px" width="1230px"/>
          </div>
          <div class="content-main" >
              <h1 class="head-content">Giới thiệu</h1>
              <br>
              

              <h4 class="main-content">Tôi cho bạn vay chính là phương châm của chúng tôi.Chúng tôi tự tin với khả năng chuyên nghiệp của đội ngũ nhân viên với tinh thần phục vụ nhiệt tình,không ngừng học hỏi và trau dồi kinh nghiệm.</h4>
              <br>
              <h4 class="main-content">Chúng tôi cung cấp dịch vụ thuận tiện cho phép khách hàng đăng ký khoản vay online , ký hợp đồng tại địa điểm khách hàng chỉ định. Thủ tục đơn giản, điều kiện cho vay linh hoạt, dễ dàng giúp bạn tiếp cận nguồn vốn cần thiết</h4><br>
              <h4 class="footer-content">
              Hotline 24/7 : 0387631629.
              </h4>
          </div>
         </main>
<?php include './include/footer.php'; ?>