<?php
    /* Sản phẩm */
    $nametype = "san-pham";
    $config['product'][$nametype]['title_main'] = "Sản Phẩm";
    $config['product'][$nametype]['dropdown'] = true;
    $config['product'][$nametype]['list'] = true;
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['copy'] = false;
    $config['product'][$nametype]['copy_image'] = false;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['gallery'] = array();
    $config['product'][$nametype]['code'] = true;
    $config['product'][$nametype]['regular_price'] = true;
    $config['product'][$nametype]['sale_price'] = true;
    $config['product'][$nametype]['discount'] = true;
    $config['product'][$nametype]['desc'] = true;
    $config['product'][$nametype]['desc_cke'] = false;
    $config['product'][$nametype]['content'] = true;
    $config['product'][$nametype]['content_cke'] = true;
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['width'] = 280;
    $config['product'][$nametype]['height'] = 320;
    $config['product'][$nametype]['thumb'] = '280x320x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Sản phẩm (List) */
    $config['product'][$nametype]['title_main_list'] = "Sản phẩm cấp 1";
    $config['product'][$nametype]['images_list'] = true;
    $config['product'][$nametype]['show_images_list'] = true;
    $config['product'][$nametype]['slug_list'] = true;
    $config['product'][$nametype]['check_list'] = array("noibat" => "Nổi bật","hienthi" => "Hiển thị");
    $config['product'][$nametype]['gallery_list'] = array();
    $config['product'][$nametype]['desc_list'] = true;
    $config['product'][$nametype]['seo_list'] = true;
    $config['product'][$nametype]['width_list'] = 280;
    $config['product'][$nametype]['height_list'] = 320;
    $config['product'][$nametype]['thumb_list'] = '280x320x1';
    $config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Thư viện ảnh */
    $nametype = "thu-vien-anh";
    $config['product'][$nametype]['title_main'] = "Thư viện ảnh";
    $config['product'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['copy'] = false;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['gallery'] = array
    (
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh thư viện ảnh",
            "title_sub_photo" => "Hình ảnh",
            "check_photo" => array("hienthi" => "Hiển thị"),
            "number_photo" => 2,
            "images_photo" => true,
            "avatar_photo" => true,
            "name_photo" => true,
            "width_photo" => 540,
            "height_photo" => 540,
            "thumb_photo" => '100x100x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
        )
    );
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['width'] = 1000;
    $config['product'][$nametype]['height'] = 1000;
    $config['product'][$nametype]['thumb'] = '100x100x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
?>