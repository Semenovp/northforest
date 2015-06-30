<?php get_header();?>
<div class="conteiner">
	<div class="span1">
		<?php get_sidebar();?>
		<div class="right_block">
			<!--============== catalogue ================-->
			<div class="content">
				<div class="catalogue">
					<?php breadcrumbs();?>
					<h1>
						<?php
							$term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
							echo $term->name;
						?>
					</h1>
					<div class="content_right_block">
						<?php
							if(term_description(get_queried_object()->term_id,'type')):
						?>
						<div class="img">
							<?php
								$category = get_term(get_queried_object()->term_id, 'type');
								$images_raw  = get_option( 'taxonomy_image_plugin' );
								$img_src = wp_get_attachment_image_src( $images_raw[ $category->term_id ], 'full' );
							?>
							<img src="<?php echo $img_src[0];?>" alt="catalogue_img.png">
						</div>
						<?php
								echo $category->description;
							endif;
						?>
						<?php
							$cat_args = array(
								'parent'     => get_queried_object()->term_id,
								'hide_empty' => 0,
								'exclude'    => '',
								'number'     => '0',
								'taxonomy'   => 'type',
								'pad_counts' => true
							);
							$main_categories = get_categories($cat_args);
							if(!empty($main_categories)){
						?>
						<h2>Каталог категорий оборудования</h2>

						<div class="catalog_cat">

							<?php
								foreach ( $main_categories as $main_category ) {
									?>
									<div class="cat_div">
										<h3><?php echo $main_category->name; ?></h3>
										<?php
											$sub_cat_args   = array(
												'parent'     => $main_category->term_id,
												'hide_empty' => 0,
												'exclude'    => '',
												'number'     => '0',
												'taxonomy'   => 'type',
												'pad_counts' => true
											);
											$sub_categories = get_categories( $sub_cat_args );
											foreach ( $sub_categories as $sub_category ) {
												?>
												<p><?php echo $sub_category->name; ?></p>
												<?php
												$sub_cat_args   = array(
													'parent'     => $sub_category->term_id,
													'hide_empty' => 0,
													'exclude'    => '',
													'number'     => '0',
													'taxonomy'   => 'type',
													'pad_counts' => true
												);
												$sub_categories = get_categories( $sub_cat_args );
												?>
												<ul>
													<?php foreach ( $sub_categories as $sub_cat ) { ?>
														<li>
															<a href="<?php echo get_term_link( (int) $sub_cat->term_id, 'type' ); ?>"><?php echo $sub_cat->name; ?></a>
														</li>
													<?php } ?>
												</ul>
											<?php
											}
										?>
									</div>
								<?php
								}
							}else {
							?>
								<ul>
								<?php
									while ( have_posts() ):the_post();
										?>
										<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
									<?php
									endwhile;
									}
								?>
								</ul>

						</div>
<!--						<div class="catalogue_slider">-->
<!--							<div class="slider_3">-->
<!--								<div class="slide"><img src="img/catalogue_slider_1.png" alt="catalogue_slider_1.png"></div>-->
<!--								<div class="slide"><img src="img/catalogue_slider_2.png" alt="catalogue_slider_2.png"></div>-->
<!--								<div class="slide"><img src="img/catalogue_slider_3.png" alt="catalogue_slider_3.png"></div>-->
<!--								<div class="slide"><img src="img/catalogue_slider_1.png" alt="catalogue_slider_3.png"></div>-->
<!--								<div class="slide"><img src="img/catalogue_slider_3.png" alt="catalogue_slider_3.png"></div>-->
<!--							</div>-->
<!--						</div>-->
					</div>
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
			<!--============== /catalogue ================-->
		</div>
	</div>
</div>
<?php get_footer();?>