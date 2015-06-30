<nav class="main_nav bottom_menu">
	<?php wp_nav_menu(array('theme_location' => 'header-main', 'menu_class' => 'span1'));?>
</nav>
<footer>
	<div class="span1">
		<div class="ft_item">
			<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo_f.jpg" alt=""></a>
			<span class="cb_adr">
				<?php if ( is_active_sidebar( 'adress' ) ) : ?>
					<?php dynamic_sidebar( 'adress' ); ?>
				<?php endif; ?>
			</span>
		</div>
		<div class="ft_item">
			<?php if ( is_active_sidebar( 'info' ) ) : ?>
				<?php dynamic_sidebar( 'info' ); ?>
			<?php endif; ?>
		</div>
		<div class="ft_item"><span class="cb_btn btn button">Заказать звонок</span></div>
		<!--		<div class="full_vers"><a href="#">ПОЛНАЯ ВЕРСИЯ САЙТА</a></div>-->
	</div>
</footer>
<!-- Modal Window -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/arcticmodal-0.3.min.js"></script>
<script>
	$(document).ready(function() {
		$('.button').click(function(e) {
			e.preventDefault();
			$('#modal').arcticmodal();
		});
	});
</script>
<!-- /Modal Window -->

<!-- Modal Window -->
<div class="modalWrap">
	<div class="modal" id="modal">
		<a href="#" class="close arcticmodal-close"><img src="<?php bloginfo( 'template_url' ); ?>/img/modal_close.png" alt="close"></a>
		<h4>ЗАКАЗАТЬ ЗВОНОК</h4>
		<?php echo do_shortcode('[contact-form-7 id="91" title="Pop-up"]'); ?>
	</div>
</div>
<!-- /Modal Window -->
<?php wp_footer();?>
</body>
</html>