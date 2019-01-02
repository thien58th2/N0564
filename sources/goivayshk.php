<?php include './include/header.php'; ?>
    <main>
        <div class="goivayshk">
            <div class="content_chovayshk">
                <form method="post" name="dantkyhoso" id="dangkyhoso">
                 <input name="action" type="hidden" value="taohoso">
                 <div class="form_dangky_trang1">
                    <div class="dangkyhoso">
                        <h2>Cho vay theo Sổ hộ khẩu gốc </h2>
                        <ul class="conten_dangky">
                            <ul class="dangkygoivay">
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
                        </ul>

                        <div class="sotiencanvay"><p>Tôi cần vay:<span> 100.000.000</span> VNĐ </p></div>
                        <h3>!!Chú ý: Bạn cần có đầy đủ hồ sơ gốc (hộ khẩu, CMT) mới được phép vay gói vay này.</h3>
                        <ul class="songayvay">
                                <h2 class="note_dangky">Trong:</h2>
                                <li>
                                    <label>
                                    <input type="radio" name="ngayvay1" class="ngayvay1" autocomplete="off" value="50" >
                                    <span>
                                        30 ngày
                                     </span>
                                    </label>
                                   
                                </ul>
                    </div>
                    <div class="box-results">
                                    <p>
                                    <label >Số tiền cầm về:</label>
                                    <span class="stcv1" id="stcv1">0</span><span>.000</span>"VNĐ"
                                    </p>
                                    <p>
                                    <label>Số tiền tất toán:</label>
                                    <span class="sttt1" id="sttt1">0</span><span>.000</span>"VNĐ"
                                    </p>
                                    <p>
                                    
                    <div class="boxnotevaytheoshk"><p>
                    <b>!!Vay theo Sổ hộ khẩu gốc</b> là khoản vay mà chúng tôi chỉ giữ của bạn sổ hộ khẩu photo.Gói vay giúp khách hàng được nhận tiền về một cách thỏa đáng với lãi suất vô cùng hấp dẫn.
                    </p>
                    </div>
                   
                </div>
                </form>
            </div>
        </div>
        
    </main>
    <script>
    var tientattoan = 0;
    var tiencamve=0;
    
    var tienv=0;
    var ngay=0;

    $('.dangkygoivay input[type="radio"]').click(function(){
         tienv= $(this).val();
         ngay= $('.songayvay input[name="ngayvay1"]:checked').val();
        tiencamve = tienv*1000;
      
      
        $("#stcv1").html(tiencamve);
        
       

    })
    $('.songayvay input[type="radio"]').click(function(){
         ngay= $(this).val();
         tienv= $('.danhsachgoivay input[name="nhantien"]:checked').val();
         tiencamve = tienv*1000;
        
       
        $("#stcv1").html(tiencamve);
      
       
    })
    $('.dangkygoivay input[type="radio"]').click(function(){
         tienv= $(this).val();
         ngay= $('.songayvay input[name="ngayvay1"]:checked').val();
        
        tientattoan = ((tienv*0.1)+tienv)*1000;
        
        
        $("#sttt1").html(tientattoan);
        

    })
    $('.songayvay input[type="radio"]').click(function(){
         ngay= $(this).val();
         tienv= $('.danhsachgoivay input[name="nhantien"]:checked').val();
         
        tientattoan = ((tienv*0.1)+tienv)*1000;
        
      
        $("#sttt1").html(tientattoan);
        
    })
   
   
    //click vao nut vay
    $('#btnvay').click(function(){
       $.ajax({
           type: "POST",
           url: "themnguoivay.php",
           data: {
            tienvay : tienv,
            ngayvay1 : ngay,
            tiencamve : $("#stcv1").html(),
            tientattoan:$("#sttt1").html(),
            
          
           },
           dataType: "text",
           success: function (response) {
               alert(response);
           }
       }); 
    })
 </script>
<?php include './include/footer.php'; ?>