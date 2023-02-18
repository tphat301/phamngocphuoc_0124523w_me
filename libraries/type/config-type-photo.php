<?php
    /* Banner seo home */
    $nametype = "banner-seo-home";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner SEO Home";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 500;
    $config['photo']['photo_static'][$nametype]['height'] = 260;
    $config['photo']['photo_static'][$nametype]['thumb'] = '500x260x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Logo */
    $nametype = "logo";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 242;
    $config['photo']['photo_static'][$nametype]['height'] = 106;
    $config['photo']['photo_static'][$nametype]['thumb'] = '242x106x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Favicon */
    $nametype = "favicon";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 96;
    $config['photo']['photo_static'][$nametype]['height'] = 48;
    $config['photo']['photo_static'][$nametype]['thumb'] = '242x106x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Watermark */
    $nametype = "watermark";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['watermark'] = true;
    $config['photo']['photo_static'][$nametype]['watermark-advanced'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 50;
    $config['photo']['photo_static'][$nametype]['height'] = 50;
    $config['photo']['photo_static'][$nametype]['thumb'] = '242x106x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';

    /* Slideshow */
    $nametype = "slide";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['desc_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 700;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Social */
    $nametype = "social";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Social";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 15;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 15;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '15x15x2';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Video static */
    $nametype = "video";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Video";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['video'] = true;
    $config['photo']['photo_static'][$nametype]['name'] = true;
    $config['photo']['photo_static'][$nametype]['desc'] = true;
    $config['photo']['photo_static'][$nametype]['content'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 450;
    $config['photo']['photo_static'][$nametype]['height'] = 513;
    $config['photo']['photo_static'][$nametype]['thumb'] = '450x513x2';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Đối tác */
    $nametype = "doitac";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Đối tác";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 5;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 131;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 69;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '131x69x2';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';
?>