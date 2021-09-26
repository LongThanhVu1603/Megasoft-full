
<?php 
    get_header();
?>

    <!-- Container -->
        <!-- Section 1-->
            <div class="container-fluid">
                <div class="row bg-section-one">
                    <div class="col-sm-6 col-md-auto col-xl-6">
                        <div class="section-one">
                            <h1 class="section-one-text"> We Make Great Thing </h1>
                            <h3 class="section-one-title"> Kiến tạo Công Nghệ Giáo dục và phát triển con người, vì một cuộc sống tốt đẹp hơn</h3>
                                <div class="section-one-button">
                                    <button class="section-one-button-btn1" onclick="product()"> Sản Phẩm</button>
                                    <button class="section-one-button-btn1" onclick="service()"> Dịch Vụ </button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Section 1-->

        <!-- Section 2-->
            <div class="container-fluid bg-section-two">
                <div class="container">
                    <div class="section-two-product-head">
                        <h1 class="section-two-product-head_h1"> Sản Phẩm </h1>
                        <h3 class="section-two-product-head_h3"> Các lĩnh vực hoạt động của MEGASOFT tập trung vào 3 nhóm sản phẩm chủ lực, mang đến cho người dùng những trải nghiệm phong phú và đơn giản hơn.</h3>
                    </div>
                    <div class="row pb-lg-5">
                        <div class=" pt-xl-5 col-md-4 col-sm-12 text-center">
                            <a href="/megasoft/san-pham/megakid/">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt="" height="360px" width="360px" class="section-two-img">
                            </a>
                        </div>
                        <div class=" pt-xl-5 col-md-4 col-sm-12 text-center">
                            <a href="/megasoft/san-pham/megapay/">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt="" height="360px" width="360px" class="section-two-img">
                            </a>
                        </div>
                        <div class=" pt-xl-5 col-md-4 col-sm-12 text-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt="" height="360px" width="360px" class="section-two-img">
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Section 2-->

        <!-- Section 3-->
        <div class="container">
            <div class="section-two-product-head">
                <h1 class="section-two-product-head_h1"> Dịch Vụ </h1>
            </div>
            <div class="row pb-lg-5">
                <div class="col-md-6 col-12">
                    <h3 class="border_left_2 upper_margin_2 section-two-product_h3">TRỢ LÝ <span class="color_title_2">BUN</span></h3>
                    <div class="wrap_column wrap_content_care">
                        <div class="wrap_row">
                            <img src="https://megasoft.edu.vn/wp-content/themes/html5blank-stable/image/autocare/Group 2057.png" alt="" class="img-fluid">
                            <div class="item_center font_care p-2">Tự động gửi
                                thông báo tới
                                phụ huynh khi bé vắng
                                mặt không phép.
                            </div>
                        </div>
                        <div class="wrap_row">
                            <img src="https://megasoft.edu.vn/wp-content/themes/html5blank-stable/image/autocare/Group 2057.png" alt="" class="img-fluid">
                            <div class="item_center font_care p-2"> Tự động gửi
                                thông báo cho
                                GV &amp; Phụ huynh khi
                                có món ăn không phù hợp với bé trong thực đơn
                            </div>
                        </div>
                        <div class="wrap_row">
                            <img src="https://megasoft.edu.vn/wp-content/themes/html5blank-stable/image/autocare/Group 2054.png" alt="" class="img-fluid">
                            <div class="item_center font_care p-2"> Gửi lời chúc
                                mừng &amp; quà
                                tặng Voucher vào các
                                dịp sinh nhật bé, người thân
                            </div>
                        </div>
                        <div class="wrap_row">
                            <img src="https://megasoft.edu.vn/wp-content/themes/html5blank-stable/image/autocare/Group 2054.png" alt="" class="img-fluid">
                            <div class="item_center font_care p-2"> Gửi lời hỏi
                                thăm đến sức
                                khoẻ của bé mỗi dịp bé
                                bị ốm và nhắc phụ huynh lịch đến trường
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <img src="https://megasoft.edu.vn/wp-content/themes/html5blank-stable/image/autocare/Group 2056.png" alt="" class="img-fluid image_autocare">
                </div>
            </div>
        </div>
        <!-- End Section 3-->

        <!-- Section 4-->
        <div class="container-fluid bg-section-four">
            <div class="container">
                <div class="section-two-product-head">
                    <h1 class="section-two-product-head_h1 ml-lg-5"> Liên Hệ Với Chúng Tôi Ngay </h1>
                </div>

                <div class="section-four-form">
                    <!-- <form action="/action_page.php" class="was-validated">
                        <div class="form-group">
                            <label for="uname"><b>Họ Và Tên</b></label>
                            <input type="text" class="form-control" id="username" placeholder="Họ Và Tên Của Bạn" name="uname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="pwd"><b>Địa Chỉ Email</b></label>
                            <input type="text" class="form-control" id="email" placeholder="Nhập Email Của Bạn" name="pswd" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="pwd"><b>Để Lại Lời Nhắn</b></label>
                            <input type="textarea" class="form-control" id="email" placeholder="Nhập Lời Nhắn Của Bạn Cho Chúng Tôi" name="pswd" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <button type="submit" class="section-four-btn">Gửi</button>
                    </form> -->
                    <?php echo do_shortcode('[wpforms id="182"]'); ?>
                </div>
            </div>
        </div>
        <!-- End Section 4-->

        <!-- Section 5-->
        <div class="container">
            <div class="section-two-product-head">
                <h1 class="section-two-product-head_h1"> Đối Tác </h1>
            </div>
            <div class="row mt-lg-5 pb-lg-5">
                    <div class="col-xl-3 col-md-6 ml-sm-auto text-center mt-sm-5 mt-md-5 col-sm-12">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2500.png" alt="" height="264px" width="264px" class="section-five-img">
                    </div>
                    <div class="col-xl-3 col-md-6 ml-sm-auto text-center mt-sm-5 mt-md-5 col-sm-12">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2501.png" alt="" height="264px" width="264px" class="section-five-img">
                    </div>
                    <div class="col-xl-3 col-md-6 ml-sm-auto text-center mt-sm-5 mt-md-5 col-sm-12">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2502.png" alt="" height="264px" width="264px" class="section-five-img">
                    </div>
                    <div class="col-xl-3 col-md-6 ml-sm-auto text-center mt-sm-5 mt-md-5 col-sm-12">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2503.png" alt="" height="264px" width="264px" class="section-five-img">
                    </div>
            </div>
        </div>
        <!-- End Section 5 -->
    <!-- End Container -->

<?php 
    get_footer();
?>