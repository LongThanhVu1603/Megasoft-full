<?php
/*
Template Name: Product
 */
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Section 1 -->
    <div class="container-fluid bg-intro-section-one">
        <div class="intro-head">
            <h1> Sản Phẩm Của Chúng Tôi </h1>
            <h3> <a href="/megasoft">Trang chủ</a> / Sản Phẩm </h3>
        </div>
    </div>
    <!-- End Section 1 -->

    <!-- Section 2-->
    <div class="container-fluid bg-section-two">
        <div class="container">
            <div class="section-two-product-head">
                <h1 class="section-two-product-head_h1"> Sản Phẩm </h1>
                <h3 class="section-two-product-head_h3"> Các lĩnh vực hoạt động của MEGASOFT tập trung vào 3 nhóm sản phẩm chủ lực, mang đến cho người dùng những trải nghiệm phong phú và đơn giản hơn.</h3>
            </div>
            <div class="row pb-lg-5">
                <div class="col-lg-4 col-md-6">
                    <a href="/megasoft/san-pham/megakid/">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt="" height="360px" width="360px" class="section-two-img">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="/megasoft/san-pham/megapay/">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt="" height="360px" width="360px" class="section-two-img">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt="" height="360px" width="360px" class="section-two-img">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pb-md-5">
            <div class="col-md-12">
                <div class="product-p">
                    <p>
                        Tải ứng dụng ngay để trải nghiệm bên con lớn khôn mỗi ngày
                    </p>
                </div>
            </div>
        </div>
        <div class="row pb-md-5">
            <div class="col-md-6 col-12">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-dark button_1">
                        <a href="https://apps.apple.com/us/app/megakids-parent/id1477708770" style="color: white; text-decoration: none">
                            <div class="d-flex flex-row justify-content-center">
                                <i class="fab fa-apple fa-3x p-1 item_center"></i>
                                <div class="p-2">Tải về trên<br>App Store</div>
                            </div>
                        </a>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="d-flex justify-content-start">
                    <button type="button" class="btn btn-dark button_1">
                        <a href="https://play.google.com/store/apps/details?id=com.aischoolparent&amp;hl=no" style="color: white; text-decoration: none">
                            <div class="d-flex flex-row justify-content-center">
                                <i class="fab fa-google-play fa-3x p-1 item_center"></i>
                                <div class="p-2">Tải về trên<br>Play Store</div>
                            </div>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <div class="product-bg-img">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/Group 2055.png">
                </div>
            </div>
        </div>
    </div>
            
    <!-- End Section 2-->
</body>
</html>
<?php
get_footer();
?>