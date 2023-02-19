<div class="footer">
    <div class="footer-article padding-top-bottom d-hiden">
        <div class="wrap-content d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-news">
                <p class="name-company-footer"><?= $footer['name' . $lang] ?></p>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
                <?php if (count($social)) { ?>
                <div class="social social-footer d-flex align-items-center">
                    <?php foreach ($social as $k => $v) { ?>
                    <a href="<?= $v['link'] ?>" target="_blank" class="text-decoration-none mr-2">
                        <img class="lazy" data-src="<?= UPLOAD_PHOTO_L . $v['photo'] ?>"
                            alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                    </a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <div class="footer-news">
                <p class="footer-title">Chính sách</p>
                <ul class="footer-ul">
                    <?php foreach ($policy as $v) { ?>
                    <li><a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="footer-news">
                <p class="footer-title">Bản đồ</p>
                <?= $addons->set('footer-map', 'footer-map', 6); ?>
            </div>
        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content d-flex flex-wrap align-items-center justify-content-center">
            <div class="copyright mr-2">Copyright © 2023 <span><?= $copyright['name' . $lang] ?></span> - By Nina -</div>
            <div class="statistic">
                Online: <span class="numb-onl"><?= $online ?></span>
            </div>
        </div>
    </div>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/zl.png" alt="zalo" class="lazy"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/hl.png" alt="Hotline" class="lazy"></i>
</a>