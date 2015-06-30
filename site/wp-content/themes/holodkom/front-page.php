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
<!-- Главная навигация -->
<nav class="main_nav">
		<span class="btn_mm">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/menu_btn.png" alt="">
		</span>
	<?php wp_nav_menu(array('theme_location' => 'header-main', 'menu_class' => 'span1 top_menu'));?>
</nav>
<!-- /Главная навигация -->
<header>
	<div class="wrap_slider">
		<div class="owl_slider">
			<?php
				$slides_args = array(
					'post_type' => 'slider',
					'posts_per_page' => 40
				);
				$slide = new WP_Query($slides_args);
				while($slide->have_posts()):$slide->the_post();
					$img_src = get_field('slide');
					?>
					<div class="item">
						<img src="<?php echo $img_src['url']; ?>">
					</div>
				<?php
				endwhile;
				wp_reset_postdata();
			?>

		</div>
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
			<div class="calc">
				<span class="h2">Фактор коммуникации, отбрасывая подробности</span>
				<p>Медиапланирование непосредственно консолидирует презентационный материал.  Конкурентоспособность порождает рейтинг. Показ баннера довольно хорошо сбалансирован.  Рекламная поддержка очевидна не для всех.</p>
				<a href="/?p=107"><span class="btn calc_btn">Рассчитать стоимость оборудования</span></a>
			</div>
		</div>
	</div>
</header>
<div class="conteiner">
	<div class="span1">
		<?php get_sidebar();?>
		<div class="right_block">
			<div class="catalog">
				<?php
					$args       = array(
						'parent'     => 0,
						'hide_empty' => 0,
						'exclude'    => '',
						'number'     => '0',
						'taxonomy'   => 'type',
						'pad_counts' => true
					);
					$categories = get_categories( $args );
					$images_raw           = get_option( 'taxonomy_image_plugin' );
					$term_taxonomy_string = '';
					foreach ( $categories as $category ) {
						$term_taxonomy_id    = $category->term_taxonomy_id;
						$term_taxonomy_name  = $category->name;
						$term_taxonomy_image = wp_get_attachment_image_src( $images_raw[ $term_taxonomy_id ], 'full' );
						$term_taxonomy_link  = get_term_link( (int) $term_taxonomy_id, 'type' );
						$term_taxonomy_string .= '<div class="item_cat"><div class="img_cat"> <a href="' . $term_taxonomy_link . '">
																	<img src="' . $term_taxonomy_image[0] . '"/></a></div><span><a href = "' .$term_taxonomy_link. '">'. $term_taxonomy_name .'</a></span>
														</div>';
					}
					echo $term_taxonomy_string;
				?>
			</div>
			<div class="content">
				<?php
					while(have_posts()):the_post();
						the_content();
					endwhile;
				?>
				<h2>Наши партнеры</h2>
				<div class="partners">
					<div class="slider_1">
						<?php
							$partners_args = array(
								'post_type' => 'partners'
							);
							$partners = new WP_Query($partners_args);
							while($partners->have_posts()):$partners->the_post();
								$img_src = get_field('img_partners');
								?>
								<div class="slide">
									<a href="<?php echo get_field('link_partners');?>">
										<img src="<?php echo $img_src['url'];?>"  alt="">
									</a>
								</div>
							<?php
							endwhile;
							wp_reset_postdata();
						?>

					</div>
				</div>
				<h2>Наши поставщики</h2>
				<div class="distributors">
					<div class="slider_2">
						<?php
							$partners_args = array(
								'post_type' => 'distributors'
							);
							$partners = new WP_Query($partners_args);
							while($partners->have_posts()):$partners->the_post();
								$img_src = get_field('img_distrib');
								?>
								<div class="slide">
									<a href="<?php echo get_field('link_distrib');?>">
										<img src="<?php echo $img_src['url'];?>"  alt="">
									</a>
								</div>
							<?php
							endwhile;
							wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>