<?php
	add_action('init', 'register_slider');
	function register_slider() {
		$labels_project = array(
			'name'              => 'Слайдер',
			'singular_name'     => 'Слайд',
			'add_new'           => 'Новый слайд',
			'add_new_item'      => 'Добавить новый слайд',
			'edit_item'         => 'Редактировать слайд',
			'new_item'          => 'Новый слайд',
			'view_item'         => 'Просмотр товара',
			'search_items'      => 'Происк товаров',
			'not_found'         => 'товаров не найдено',
			'parent_item_colon' => 'Родителький товар'
		);
		$args           = array(
			'labels'      => $labels_project,
			'public'      => true,
			'has_archive' => true,
			'supports'    => array( 'title' )
		);
		register_post_type( 'slider', $args );
	}
	//Регистрация типа "Партнеры"
	add_action('init', 'register_partners');
	function register_partners() {
		$labels_project = array(
			'name'              => 'Партнеры',
			'singular_name'     => 'Партнер',
			'add_new'           => 'Новый партнер',
			'add_new_item'      => 'Добавить нового парнера',
			'edit_item'         => 'Редактировать парнера',
			'new_item'          => 'Новый парнер',
			'view_item'         => 'Просмотр парнера',
			'search_items'      => 'Происк парнеров',
			'not_found'         => 'Партнеров не найдено',
			'parent_item_colon' => 'Родителький парнер'
		);
		$args           = array(
			'labels'      => $labels_project,
			'public'      => true,
			'has_archive' => true,
			'supports'    => array( 'title' )
		);
		register_post_type( 'partners', $args );
	}
	//Регистрация типа "Поставщики"
	add_action('init', 'register_distributors');
	function register_distributors() {
		$labels_project = array(
			'name'              => 'Поставщики',
			'singular_name'     => 'Поставщик',
			'add_new'           => 'Новый поставщик',
			'add_new_item'      => 'Добавить нового поставщика',
			'edit_item'         => 'Редактировать поставщика',
			'new_item'          => 'Новый поставщик',
			'view_item'         => 'Просмотр поставщика',
			'search_items'      => 'Происк поставщиков',
			'not_found'         => 'Партнеров не найдено',
			'parent_item_colon' => 'Родителький парнер'
		);
		$args           = array(
			'labels'      => $labels_project,
			'public'      => true,
			'has_archive' => true,
			'supports'    => array( 'title' )
		);
		register_post_type( 'distributors', $args );
	}

	//реистрация типа "Проекты"
	add_action('init', 'register_project');
	function register_project() {
		$labels_project = array(
			'name' => 'Проекты',
			'singular_name' =>'Проект',
			'add_new' => 'Новый проект',
			'add_new_item' => 'Добавить новый проект',
			'edit_item' => 'Редактировать проект',
			'new_item' => 'Новый проект',
			'view_item' => 'Просмотр проекта',
			'search_items' => 'Происк проектов',
			'not_found' => 'Проектов не найдено',
			'parent_item_colon' => 'Родителький проект'
		);
		$args = array(
			'labels'=> $labels_project,
			'public' => true,
			'has_archive' => true,
			'supports' => array('title','editor','thumbnail','excerpt', 'custom-fields')
		);
		register_post_type('projects',$args);
	}
	//реистрация типа "Проекты"
	add_action('init', 'register_catalog');
	function register_catalog() {
		$labels_project = array(
			'name' => 'Каталог',
			'singular_name' =>'Каталог',
			'add_new' => 'Новый элемент',
			'add_new_item' => 'Добавить новый элемент',
			'edit_item' => 'Редактировать элемент',
			'new_item' => 'Новый элемент',
			'view_item' => 'Просмотр элемента',
			'search_items' => 'Происк элементов',
			'not_found' => 'Проектов не найдено',
			'parent_item_colon' => 'Родителький проект'
		);
		$args = array(
			'labels'=> $labels_project,
			'public' => true,
			'has_archive' => true,
			'supports' => array('title','editor','thumbnail','excerpt', 'custom-fields')
		);
		register_post_type('catalog',$args);
	}
//регистрация рубрик проектов
	add_action('init', 'catalog_taxonomies');
	function catalog_taxonomies() {
		register_taxonomy('type','catalog', array('hierarchical' => true, 'label' => "Категории каталога", 'query_var' => true, 'rewrite' => true));
	}
//регистрация виджетов
	register_sidebar(
		array(
			'id'            => 'info', // уникальный id
			'name'          => 'Информация в подвале', // название сайдбара
			'description'   => '', // описание
			'before_widget' => '', // по умолчанию виджеты выводятся <li>-списком
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		)
	);
	register_sidebar(
		array(
			'id'            => 'adress', // уникальный id
			'name'          => 'Адрес в подвале', // название сайдбара
			'description'   => '', // описание
			'before_widget' => '', // по умолчанию виджеты выводятся <li>-списком
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		)
	);
	register_sidebar(
		array(
			'id'            => 'head', // уникальный id
			'name'          => 'Информация в шапке', // название сайдбара
			'description'   => '', // описание
			'before_widget' => '', // по умолчанию виджеты выводятся <li>-списком
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		)
	);
	//поддрежка меню
	function register_theme_menus() {
		register_nav_menus( array(
			'header-main' => 'main',
			'aside'       => 'aside',
			'footer'       => 'footer'
		) );
	}

	add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 2 );
	function special_nav_class( $classes, $item ) {
		if ( in_array( 'current-menu-item', $classes ) ) {
			$classes[] = 'active ';
		}

		return $classes;
	}

	if ( function_exists( 'register_nav_menus' ) ) {
		add_action( 'init', 'register_theme_menus' );
	}
	//поддержка миниатюр
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'goods', 204, 122, true );
	function pagination( $pages = '', $range = 4 ) {
		$showitems = ( $range * 2 ) + 1;

		global $paged;
		if ( empty( $paged ) ) {
			$paged = 1;
		}

		if ( $pages == '' ) {
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if ( ! $pages ) {
				$pages = 1;
			}
		}

		if ( 1 != $pages ) {
			echo "<ul class=\"pagination\">";
			echo "<li><a href='" . get_pagenum_link( 1 ) . "'>&laquo;</a></li>";
			if ( $paged > 1 && $showitems < $pages ) {
				echo "<li><a href='" . get_pagenum_link( $paged - 1 ) . "'>&lsaquo; Предыдущие</a></li>";
			}

			for ( $i = 1; $i <= $pages; $i ++ ) {
				if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
					echo ( $paged == $i ) ? "<li class=\"active\"> <a>" . $i . "</a></li>" : "<li><a href='" . get_pagenum_link( $i ) . "'> " . $i . "</a></li>";
				}
			}

			if ( $paged < $pages && $showitems < $pages ) {
				echo "<li><a href=\"" . get_pagenum_link( $paged + 1 ) . "\">Следущие &rsaquo;</a></li>";
			}
			echo "<li><a href='" . get_pagenum_link( $pages ) . "'> &raquo;</a></li>";
			echo "</ul>";
		}
	}

	function breadcrumbs() {

		/* === ОПЦИИ === */
		$text['home'] = 'Главная'; // текст ссылки "Главная"
		$text['category'] = 'Рубрика "%s"'; // текст для страницы рубрики
		$text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
		$text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
		$text['author'] = 'Статьи автора %s'; // текст для страницы автора
		$text['404'] = 'Ошибка 404'; // текст для страницы 404

		$show_current = 1; // 1 - показывать название текущей статьи/страницы/рубрики, 0 - не показывать
		$show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
		$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
		$show_title = 1; // 1 - показывать подсказку (title) для ссылок, 0 - не показывать
		$delimiter = ''; // разделить между "крошками"
		$before = '<li><p>'; // тег перед текущей "крошкой"
		$after = '</p></li>'; // тег после текущей "крошки"
		/* === КОНЕЦ ОПЦИЙ === */

		global $post;
		$home_link = home_url('/');
		$link_before = '<li><span typeof="v:Breadcrumb">';
		$link_after = '</span></li>';
		$link_attr = ' rel="v:url" property="v:title"';
		$link = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
		$parent_id = $parent_id_2 = $post->post_parent;
		$frontpage_id = get_option('page_on_front');

		if (is_home() || is_front_page()) {

			if ($show_on_home == 1) echo '<ul class="breadcrumb"><li><a href="' . $home_link . '">' . $text['home'] . '</a><span>/</span></li></ul>';

		} else {

			echo '<ul class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">';
			if ($show_home_link == 1) {
				echo '<li><a href="' . $home_link . '" rel="v:url" property="v:title">' . $text['home'] . '</a><span>/</span></li>';
				if ($frontpage_id == 0 || $parent_id != $frontpage_id) echo $delimiter;
			}

			if ( is_category() ) {
				$this_cat = get_category(get_query_var('cat'), false);
				if ($this_cat->parent != 0) {
					$cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
					if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
					$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
					$cats = str_replace('</a>', '</a>' . $link_after, $cats);
					if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
					echo $cats;
				}
				if ($show_current == 1) echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;

			} elseif ( is_search() ) {
				echo $before . sprintf($text['search'], get_search_query()) . $after;

			} elseif ( is_day() ) {
				echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
				echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
				echo $before . get_the_time('d') . $after;

			} elseif ( is_month() ) {
				echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
				echo $before . get_the_time('F') . $after;

			} elseif ( is_year() ) {
				echo $before . get_the_time('Y') . $after;

			} elseif ( is_single() && !is_attachment() ) {
				if ( get_post_type() != 'post' ) {
					$post_type = get_post_type_object(get_post_type());
					$slug = $post_type->rewrite;
					printf($link, $home_link . $slug['slug'] . '/', $post_type->labels->singular_name);
					if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
				} else {
					$cat = get_the_category(); $cat = $cat[0];
					$cats = get_category_parents($cat, TRUE, $delimiter);
					if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
					$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
					$cats = str_replace('</a>', '</a>' . $link_after, $cats);
					if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
					echo $cats;
					if ($show_current == 1) echo $before . get_the_title() . $after;
				}

			} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
				$post_type = get_post_type_object(get_post_type());
				echo $before . $post_type->labels->singular_name . $after;

			} elseif ( is_attachment() ) {
				$parent = get_post($parent_id);
				$cat = get_the_category($parent->ID); $cat = $cat[0];
				if ($cat) {
					$cats = get_category_parents($cat, TRUE, $delimiter);
					$cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
					$cats = str_replace('</a>', '</a>' . $link_after, $cats);
					if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
					echo $cats;
				}
				printf($link, get_permalink($parent), $parent->post_title);
				if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

			} elseif ( is_page() && !$parent_id ) {
				if ($show_current == 1) echo $before . get_the_title() . $after;

			} elseif ( is_page() && $parent_id ) {
				if ($parent_id != $frontpage_id) {
					$breadcrumbs = array();
					while ($parent_id) {
						$page = get_page($parent_id);
						if ($parent_id != $frontpage_id) {
							$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
						}
						$parent_id = $page->post_parent;
					}
					$breadcrumbs = array_reverse($breadcrumbs);
					for ($i = 0; $i < count($breadcrumbs); $i++) {
						echo $breadcrumbs[$i];
						if ($i != count($breadcrumbs)-1) echo $delimiter;
					}
				}
				if ($show_current == 1) {
					if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo $delimiter;
					echo $before . get_the_title() . $after;
				}

			} elseif ( is_tag() ) {
				echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;

			} elseif ( is_author() ) {
				global $author;
				$userdata = get_userdata($author);
				echo $before . sprintf($text['author'], $userdata->display_name) . $after;

			} elseif ( is_404() ) {
				echo $before . $text['404'] . $after;

			} elseif ( has_post_format() && !is_singular() ) {
				echo get_post_format_string( get_post_format() );
			}

			if ( get_query_var('paged') ) {
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
				echo 'Страница ' . get_query_var('paged');
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
			}

			echo '</ul><!-- .breadcrumbs -->';

		}
	} // end breadcrumbs()