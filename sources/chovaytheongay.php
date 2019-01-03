

<?php include './include/header.php'; ?>
 <main>
     <div class="chovaytheongay">
        <div  class="content_chovay">
            <form method="post" name="dangkyhoso" id="dangkyhoso">
                <input name="action" type="hidden" value="taohoso">
                <div class="form_dangky_trang1">
                    <div class="dangkyhoso">
                        <h2 id="labelchovay"> Cho vay trả góp theo ngày</h2>
                        <ul class="content_dangky">
                            <ul class="danhsachgoivay">
                                <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="5" ><span> <span>5 triệu</span></span></label></li>
                                <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="10" ><span> <span>10 triệu</span></span></label></li>
                                <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="15" ><span> <span>15 triệu</span></span></label></li>
                                <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="20" ><span> <span>20 triệu</span></span></label></li>
                                <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="25" ><span><span>25 triệu</span></span></label></li>
                                <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="30" ><span> <span>30 triệu</span></span></label></li>
                                <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="35" ><span> <span>35 triệu</span></span></label></li>
                                <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="40" ><span> <span>40 triệu</span></span></label></li>
                                <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="45" ><span> <span>45 triệu</span></span></label></li>
                                <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="50" ><span> <span>50 triệu</span></span></label></li>
                                
                            </ul>
                            <div class="sotiencanvay"><p>Tôi cần vay<span>5.000.000</span> VNĐ </p></div>
                            <ul class="songayvay">
                                <h2 >Trong:</h2>
                                <li>
                                    <label>
                                    <input type="radio" name="ngayvay" class="ngayvay" autocomplete="off" value="50" >
                                    <span>
                                        50 ngày
                                     </span>
                                    </label>
                                    </li>
                                    <li>
                                    <label>
                                    <input type="radio" name="ngayvay" class="ngayvay" autocomplete="off" value="60" >
                                    <span>
                                        60 ngày
                                     </span>
                                    </label>
                                    </li>
                                    <li>
                                    <label>
                                    <input type="radio" name="ngayvay" class="ngayvay" autocomplete="off" value="100" >
                                    <span>
                                        100 ngày
                                     </span>
                                    </label>
                                    </li>
                                </ul>
                                <div class="boxnotevaytheongay">
                                <h3 style="margin-left:1cm">!!!Chú ý: Bạn cần có đầy đủ hồ sơ gốc (hộ khẩu, CMT) mới được phép vay gói vay này.</h3>
                                 </div>
                                 <div class="box-results">
                                    <p>
                                    <label >Số tiền cầm về:</label>
                                    <span class="stcv" id="stcv">0</span><span>.000</span>"VNĐ"
                                    </p>
                                    <p>
                                    <label>Số tiền tất toán:</label>
                                    <span class="sttt" id="sttt">0</span><span>.000</span>"VNĐ"
                                    </p>
                                    <p>
                                    <label>Số tiền trả góp hằng ngày:</label>
                                    <span class="sttt" id="sttghn">0</span><span>.000</span>"VNĐ"
                                    </p>

                                 </div>
                                 <div class="boxnotevaytheongay">
                                 <p><b>!!Vay trả góp theo ngày</b> là khoản vay vô cùng tiện lợi và phổ biến của chúng tôi.Gói vay giúp khách hàng tối ưu lãi suất nhất có thể và có thể dễ dàng tất toán khoản vay trong thời gian sớm nhất.</p>
                                 </div>
                        </div>
                        <input type="submit" value='vay' id='btnvay' name="vay">
                    </div>
                   
                
            </form>

        </div>

     </div>
 </main>
 <script>
    var tientattoan = 0;
    var tiencamve=0;
    var tientra=0;
    var tienv=0;
    var ngay=0;

    $('.danhsachgoivay input[type="radio"]').click(function(){
         tienv= $(this).val();
         ngay= $('.songayvay input[name="ngayvay"]:checked').val();
        tiencamve = (tienv*0.9)*1000;
      
      
        $("#stcv").html(tiencamve);
        
       

    })
    $('.songayvay input[type="radio"]').click(function(){
         ngay= $(this).val();
         tienv= $('.danhsachgoivay input[name="nhantien"]:checked').val();
         tiencamve = (tienv*0.9)*1000;
        
       
        $("#stcv").html(tiencamve);
      
       
    })
    $('.danhsachgoivay input[type="radio"]').click(function(){
         tienv= $(this).val();
         ngay= $('.songayvay input[name="ngayvay"]:checked').val();
        
        tientattoan = tienv*1000;
        
        
        $("#sttt").html(tientattoan);
        

    })
    $('.songayvay input[type="radio"]').click(function(){
         ngay= $(this).val();
         tienv= $('.danhsachgoivay input[name="nhantien"]:checked').val();
         
        tientattoan = tienv*1000;
        
      
        $("#sttt").html(tientattoan);
        
    })
    $('.danhsachgoivay input[type="radio"]').click(function(){
         tienv= $(this).val();
         ngay= $('.songayvay input[name="ngayvay"]:checked').val();
        
         tientra=(tienv/ngay)*1000;
        
        
         $("#sttghn").html(tientra);
        

    })
    $('.songayvay input[type="radio"]').click(function(){
         ngay= $(this).val();
         tienv= $('.danhsachgoivay input[name="nhantien"]:checked').val();
         
         tientra=(tienv/ngay)*1000;
        
      
         $("#sttghn").html(tientra);
        
    })

   
    //click vao nut vay
    $('#btnvay').click(function(){
       $.ajax({
           type: "POST",
           url: "themnguoivay.php",
           data: {
            tienvay : tienv,
            ngayvay : ngay,
            tiencamve : $("#stcv").html(),
            tientattoan:$("#sttt").html(),
            tientra:$("#sttghn").html()
          
           },
           dataType: "text",
           success: function (response) {
               alert(response);
           }
       }); 
    })
 </script>

 
<?php include './include/footer.php'; ?>