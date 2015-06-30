<div class="left_block">
	<div class="lb_item">
		<div class="h2">Каталог</div>
		<ul>
			<?php
				$args       = array(
				'parent'     => '',
				'hide_empty' => 0,
				'exclude'    => '',
				'number'     => '0',
				'taxonomy'   => 'type',
				'pad_counts' => true
				);
				$categories = get_categories( $args );
				foreach($categories as $category) {
			?>
					<li><span class="cat_img cat_item1"></span><a href="<?php echo get_term_link( (int) $category->term_id, 'type' );?>"><?php echo $category->name;?></a></li>
			<?php
				}
			?>
		</ul>
	</div>
	<div class="lb_item ">
		<div class="h2 progect_click">Наши проекты</div>
		<ul class="progect">
			<?php
				$project_args = array(
					'post_type' => 'projects'
				);
				$project = new WP_Query($project_args);
				while($project->have_posts()):$project->the_post();
			?>
					<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
			<?php
				endwhile;
				wp_reset_postdata();
			?>
		</ul>
	</div>
	<div class="lb_item main_news">
		<div class="h2 news_click">Новости</div>
		<div class="news_block">
			<?php
				$news_args = array(
					'cat' => 3,
					'posts_per_page' => 3
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
		<a href="/?p=112" class="arhive_news">Архив новостей</a>

		<a href='/?p=109'>
			<div class="mini_slider">
				<div class="ms_img"><img src="<?php bloginfo( 'template_url' ); ?>/img/banner1.jpg"  alt=""></div>
				<div class="ms_shadow"><span class="h3">Спецпредложение</span> Б/У оборудование по выгодной цене!</div>
			</div>
		</a>
	</div>
</div>