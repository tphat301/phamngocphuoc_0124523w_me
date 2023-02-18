<!-- GIỚI THIỆU -->
<div class="about">
    <div class="wrap-content"> 
        <div class="row">
            <div class="about-left col-sm-12 col-md-6 col-lg-6">
                <img class="lazy" onerror="this.src='<?= THUMBS ?>/528x339x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/528x339x1/<?= UPLOAD_NEWS_L . $about['photo'] ?>" alt="<?= $about['name' . $lang] ?>" title="<?= $about['name' . $lang] ?>"/>
            </div>
            <div class="about-right col-sm-12 col-md-6 col-lg-6">
                <span class="about-title text-uppercase d-block">
                    Giới thiệu về chúng tôi
                </span>
                <span class="name-company-ab">
                    <?=$about['name'.$lang]?>
                </span>
                <div class="about-content">
                    <?=htmlspecialchars_decode($about['desc'.$lang])?>
                </div>
                <div class="box-about-more">
                    <a href="gioi-thieu" title="Xem thêm" class="text-uppercase link-btn-more-ab">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SP NỔI BẬC -->
<?php if (count($splistnb)) { ?>
<div class="w-pronb">
    <div class="wrap-content padding-top-bottom-ed">
        <div class="title-main"><span>Sản phẩm nổi bật</span></div>
        <div class=" d-flex align-items-center justify-content-center flex-wrap ">
            <div class="dm-noibat d-flex flex-wrap align-items-center justify-content-center">
                <div class="cats-owl list-hot">
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:10"
                        data-md-items="3:10" data-lg-items="4:10" data-xlg-items="4:10" data-rewind="1"
                        data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext=""
                        data-navcontainer="">
                        <?php foreach ($splistnb as $v) { ?>
                            <div class="item-cat-product">
                                <div class="box-img-cat">
                                    <a class="text-decoration-none" data-id="<?= $v['id'] ?>" data-tenkhongdau="<?= $v[$sluglang] ?>">
                                        <img class="lazy" onerror="this.src='<?= THUMBS ?>/98x80x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/98x80x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>"/>
                                    </a>
                                </div>
                                <a class="text-decoration-none text-dark text-uppercase"><?= $v['name' . $lang] ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="load_ajax_product"></div>
    </div>
</div>
<?php } ?>

<!-- PHẦN ĐĂNG KÝ NHẬN TIN -->
<div class="register-service">
    <div class="wrap-content">
        <div class="box-title-register-service">
            <p class="title-res"><span><?= dangkynhantin ?></span></p>
            <div class="desc-main-product"><span><?=$sloganDangKyNhanTin['name'.$lang]?></span></div>
        </div>
        <div class="register-service-main">
            <form class="validation-newsletter form-register-service" novalidate="" method="post" action="" enctype="multipart/form-data">
                <div class="box-fullname-email-tel form-row">
                    <div class="col-sv-main-it col-md-6 col-sm-12">
                        <div class="box-fullname">
                            <input type="text" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[fullname]" placeholder="Họ và tên..." required="">
                        </div>
                    </div>
                    <div class="col-sv-main-it col-md-6 col-sm-12">
                        <div class="box-email1">
                            <input type="email" class="form-control text-sm" id="email-newsletter1" name="dataNewsletter[email]" placeholder="Email" required="">
                        </div>
                    </div>
                </div>
                <div class="box-fullname-email-tel form-row">
                    <div class="col-sv-main-it col-md-6 col-sm-12">
                        <div class="box-tel">
                            <input type="text" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[phone]" placeholder="Số điện thoại" required="">
                        </div>
                    </div>
                    <div class="col-sv-main-it col-md-6 col-sm-12">
                        <div class="box-email">
                            <input type="email" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[address]" placeholder="Địa chỉ" required="">
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <textarea class="form-control text-sm" id="email-newsletter" name="dataNewsletter[content]" cols="30" rows="4" placeholder="Nội dung"></textarea>
                </div>
                <div class="box-form-sub">
                    <div class="form-sub">
                        <input type="submit" name="btn btn-res" id="btn-res-sub" value="ĐĂNG KÝ NGAY">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- TIN TỨC & SỰ KIỆN -->
<?php if (count($newsnb)) { ?>
    <div class="box-main-news">
        <div class="wrap-intro wrap-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="left-intro">
            <p class="title-main-edd"><span>Tin tức & sự kiện</span></p>
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="1:10" data-md-items="3:10"
                    data-lg-items="2:10" data-xlg-items="2:20" data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0"
                    data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="1"
                    data-nav="0" data-navtext="" data-navcontainer="">
                    <?php foreach ($newsnb as $k => $v) { ?>
                        <div class="item-newsnb">
                            <p class="pic-newsnb">
                                <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                    <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/312x275x1/assets/images/noimage.png';"
                                        data-src="<?= THUMBS ?>/312x275x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                                        alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>"/>
                                </a>
                            </p>
                            <div class="info-newsnb">
                                <h3 class="mb-0">
                                    <a class="name-newsnb text-split text-decoration-none text-center" href="<?= $v[$sluglang] ?>"
                                        title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                                </h3>
                                <p class="desc-newsnb text-split text-justify"><?= $v['desc' . $lang] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php if($video) { ?>
                <div class="right-intro">
                    <div class="videohome-intro">
                        <a class="item-video1 pic-video scale-img text-decoration-none" data-fancybox="video"
                        data-src="<?= $video['link_video'] ?>" title="<?= $video['name' . $lang] ?>">
                        <img onerror="this.src='<?= THUMBS ?>/450x595x1/assets/images/noimage.png';"
                        src="<?= UPLOAD_PHOTO_L . $video['photo'] ?>"
                        alt="<?= $video['name' . $lang] ?>" />
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<!-- HÌNH ẢNH THI CÔNG -->
<?php if (count($hinhAnhThiCong)) { ?>
    <div class="alb">
        <div class="wp-alb">
            <div class="title-main title-main-alb">
                Hình ảnh thi công
            </div>
            <div class="box-slide-alb">
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="1:10" data-md-items="3:10"
                data-lg-items="2:10" data-xlg-items="4:6" data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0"
                data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0"
                data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>" data-navcontainer=".control-alb">
                    <?php foreach($hinhAnhThiCong as $k => $v) { ?>
                        <div class="alb-item">
                            <a href="<?= $v['slug'.$lang] ?>" title="<?= $v['name' . $lang] ?>" class="d-block">
                                <img class="lazy " onerror="this.src='<?= THUMBS ?>/384x476x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/384x476x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="control-alb control-owl transition"></div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- ĐỐI TÁC -->
<?php if (count($partner)) { ?>
<div class="wrap-partner">
    <div class="wrap-content">
        <div class="title-main title-main-alb">
            Đối tác của chúng tôi
        </div>
        <div class="box-item-partner">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="3:18" data-sm-items="5:18" data-md-items="5:18"
                data-lg-items="4:18" data-xlg-items="5:18" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0"
                data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0"
                data-nav="1"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>"
                data-navcontainer=".control-partner">
                <?php foreach ($partner as $v) { ?>
                <div>
                    <a class="partner" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                        <img class="lazy" onerror="this.src='<?= THUMBS ?>/131x69x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/131x69x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>"
                        alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="control-partner control-owl transition"></div>
        </div>
    </div>
</div>
<?php } ?>