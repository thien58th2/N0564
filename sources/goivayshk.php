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
                            <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="50" ><span> <span>50 triệu</span></span></label></li>
                            <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="100" ><span> <span>100 triệu</span></span></label></li>
                            <li><label><input type="radio" name="nhantien" class="nhantien" autocomplete="off" value="150" ><span> <span>150 triệu</span></span></label></li>
                            </ul>
                        </ul>

                        <div class="sotiencanvay"><p>Tôi cần vay:<span> 100.000.000</span> VNĐ </p></div>
                        <h3>!!Chú ý: Bạn cần có đầy đủ hồ sơ gốc (hộ khẩu, CMT) mới được phép vay gói vay này.</h3>
                        <ul class="songayvay">
                                <h2 class="note_dangky">Trong:</h2>
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
                                    <input type="radio" name="ngayvay" class="ngayvay" autocomplete="off" value="100" >
                                    <span>
                                        100 ngày
                                     </span>
                                    </label>
                                    </li>
                                    <li>
                                    <label>
                                    <input type="radio" name="ngayvay" class="ngayvay" autocomplete="off" value="150" >
                                    <span>
                                        150 ngày
                                     </span>
                                    </label>
                                    </li>
                                </ul>
                    </div>
                    <div class="boxnotevaytheoshk"><p>
                    <b>!!Vay theo Sổ hộ khẩu gốc</b> là khoản vay mà chúng tôi chỉ giữ của bạn sổ hộ khẩu photo.Gói vay giúp khách hàng được nhận tiền về một cách thỏa đáng với lãi suất vô cùng hấp dẫn.
                    </p>
                    </div>
                    <?php include './include/thongtindangky1.php' ?>
                    <br>
                </div>
                </form>
            </div>
        </div>
    </main>
<?php include './include/footer.php'; ?>