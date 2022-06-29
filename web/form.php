<?php include './layout.php' ?>
<link rel="stylesheet" href="../style/form.css">
<div class="content">
    <div class="tieu_de">
        <h2>ĐĂNG KÝ THÀNH VIÊN ĐỂ NHẬN ƯU ĐÃI GIẢM TỪ 10-20%-> <a href="">GO</a></h2>
        <br>
        <h3>MỜI BẠN ĐIỀN MỘT VÀI THÔNG TIN:</h3>
    </div>
    <br>
    <div class="thong_tin">
        <form action="" method="post">
            <div class="form-tt">
                <div class="tt">SĐT <input type="number" class="in_tt"></div>
                <div class="tt">HỌ VÀ TÊN <input type="text" class="in_tt"></div>
            </div>
            <br>
            <div class="dich_vu">
                <div class="cac_dv">
                    CHỌN DỊCH VỤ<br><br>
                    <input type="checkbox" name="" value=""> CẮT (GỘI + MASSAGE) <br><br><br>
                    <input type="checkbox" name="" value=""> CẮT (GỘI + MASSAGE) <br><br><br>
                    <input type="checkbox" name="" value=""> CẮT (GỘI + MASSAGE) <br><br><br>
                    <input type="checkbox" name="" value=""> CẮT (GỘI + MASSAGE) <br><br><br>
                    <input type="checkbox" name="" value=""> CẮT (GỘI + MASSAGE) <br><br><br>
                    <input type="checkbox" name="" value=""> CẮT (GỘI + MASSAGE) <br><br><br>

                </div>
                <div class="noi_dung_dv">
                    <h4>THÔNG IN DỊCH VỤ</h4>
                    <p></p>
                    <p></p>


                </div>
            </div>
            CHỌN THỜI GIAN <input type="datetime-local" name="" id="">
            <div class="ghi_chu">
                GHI CHÚ: <br />
                <textarea rows="4" cols="100" name="description"></textarea>
            </div>
            <div class="thanh_toan">
                <h3>THANH TOÁN:</h3> <br>
                <div class="ph_thanh_toan">
                    <label for=""> PHƯƠNG THỨC THANH TOÁN : <input type="radio" name="pt_thanh_toan" value="">TRỰC TIẾP <input type="radio" name="pt_thanh_toan" value="">THẺ NGÂN HÀNG
                    </label>
                </div>
            </div>
            <br>
            <div class="thanh_tien">
                <h3>THÀNH TIỀN:</h3><label for=""></label>
            </div>
            <br>
            <button type="submit">HOÀN TẤT</button>
        </form>
        </body>

        </html>

    </div>
    </form>
</div>

</div>

<?php include "./layout2.php" ?>