<div class="header">
	<div class="header-top">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="info-header"><?=$slogan['name'.$lang]?></p>
			<p class="info-header"><i class="bi bi-telephone-fill"></i><?=$func->formatPhone($optsetting['hotline'])?></p>
			<p class="info-header"><i class="bi bi-envelope"></i><?=$optsetting['email']?></p>
		</div>
	</div>
	<div class="header-bottom">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<a class="logo-header site-title" href="">
				<img class="lazy" onerror="this.src='<?=THUMBS?>/242x106x2/assets/images/noimage.png';" data-src="<?=THUMBS?>/242x106x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt="logo" title="logo"/>
			</a>
		</div>
	</div>
</div>