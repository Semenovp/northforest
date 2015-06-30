<?php
//	Template name: Архив новостей
?>
<?php get_header();?>
<div class="conteiner">
	<div class="span1">
		<?php get_sidebar();?>
		<div class="right_block">
			<div class="content">
				<div class="catalogue">
					<?php breadcrumbs();?>
					<h1><?php echo $post->post_title;?></h1>
					<div class="content_right_bl">
						<?php
							$news_args = array(
								'cat' => 3,
								'posts_per_page' => 50
							);
							$news = new WP_Query($news_args);
							while($news->have_posts()):$news->the_post();
								?>
								<div class="mn_item">
									<div class="data"><?php echo get_the_date('d/m/Y');?></div>
									<p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
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
<?php get_footer();?>