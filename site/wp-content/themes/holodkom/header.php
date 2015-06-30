<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<?php wp_head();?>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.9.1.min.js"></script>

	<!-- Верхняя карусель-->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/owl-carousel/owl.carousel.js" ></script>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/owl-carousel/owl.theme.css">
	<!-- Верхняя карусель-->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/script.js"></script>
	<link href="<?php bloginfo( 'template_url' ); ?>/css/reset.css" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo( 'template_url' ); ?>/css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo( 'template_url' ); ?>/css/media.css" rel="stylesheet" type="text/css" />
</head>
<body>
<nav class="main_nav">
            <span class="btn_mm"><img src="<?php bloginfo( 'template_url' ); ?>/img/menu_btn.png" alt="">
            </span>
	<?php wp_nav_menu(array('theme_location' => 'header-main', 'menu_class' => 'span1 top_menu'));?>
</nav>
<header>
	<div class="header_bg">
		<?php
			if(get_field('img-hero')):
				$img_src = get_field('img-hero');
				?>
				<img src="<?php echo $img_src['url'];?>" alt="">
			<?php
			else:
				?>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/header_bg.png" alt="">
			<?php
			endif;
		?>
	</div>
	<div class="span1">
		<div class="header_info">
			<div class="h_top">
				<div class="logo"><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="logo"></a></div>
				<div class="call_back">
					<?php if ( is_active_sidebar( 'head' ) ) : ?>
						<?php dynamic_sidebar( 'head' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>