<?php
//	Template name: Контактная информация
?>
<?php get_header();?>
<div class="conteiner">
	<div class="span1">
		<?php get_sidebar();?>
		<div class="right_block">
			<!--============== contact ================-->
			<div class="content">
				<div class="contact">
					<?php breadcrumbs();?>
					<h1><?php echo $post->post_title;?></h1>
					<div class="content_right_block">
						<?php
							while(have_posts()):the_post();
								the_content();
							endwhile;
						?>
					</div>
				</div>
				<!--============== /contact ================-->

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