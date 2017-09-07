<?php
add_action( 'init', 'register_post_type_tours' ); // Использовать функцию только внутри хука init

function register_post_type_tours() {
	$labels = array(
		'name' => 'Туры',
		'singular_name' => 'Туры', // админ панель Добавить->Функцию
		'add_new' => 'Добавить тур',
		'add_new_item' => 'Добавить новый тур', // заголовок тега <title>
		'edit_item' => 'Редактировать тур',
		'new_item' => 'Новый тур',
		'all_items' => 'Все туры',
		'view_item' => 'Просмотр туров на сайте',
		'search_items' => 'Искать туры',
		'not_found' =>  'Туров не найдено.',
		'not_found_in_trash' => 'В корзине нет туров.',
		'menu_name' => 'Туры' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true,
		'menu_icon' => get_stylesheet_directory_uri() .'/images/phone.png', // иконка в меню
		'menu_position' => 5, // порядок в меню
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail'),
		'taxonomies' => array('taxtour'),
		'rewrite' => array(
			'slug' => 'turs' // Текст в ЧПУ. По умолчанию: название таксономии.

		)
	);
	register_post_type('tours', $args);
}


function add_new_taxonomies_tours() {
	/* создаем функцию с произвольным именем и вставляем
	в неё register_taxonomy() */
	register_taxonomy('taxtour',
		array('tours'),
		array(
			'hierarchical' => true,
			/* true - по типу рубрик, false - по типу меток,
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можете
				не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Категории туров',
				'singular_name' => 'Платформа',
				'search_items' =>  'Найти туры',
				'popular_items' => 'Популярные туры',
				'all_items' => 'Все туры',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать туры',
				'update_item' => 'Обновить туры',
				'add_new_item' => 'Добавить новую туры',
				'new_item_name' => 'Название новой туры',
				'separate_items_with_commas' => 'Разделяйте туры запятыми',
				'add_or_remove_items' => 'Добавить или удалить туры',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых туров',
				'menu_name' => 'Категории'
			),
			'public' => true,
			/* каждый может использовать таксономию, либо
			только администраторы, по умолчанию - true */
			'show_in_nav_menus' => true,
			/* добавить на страницу создания меню */
			'show_ui' => true,
			/* добавить интерфейс создания и редактирования */
			'show_tagcloud' => true,
			/* нужно ли разрешить облако тегов для этой таксономии */
			'update_count_callback' => '_update_post_term_count',
			/* callback-функция для обновления счетчика $object_type */
			'query_var' => true,
			/* разрешено ли использование query_var, также можно
			указать строку, которая будет использоваться в качестве
			него, по умолчанию - имя таксономии */
			'rewrite' => array(
				/* настройки URL пермалинков */
				'slug' => 'taxtours', // ярлык
				'hierarchical' => false // разрешить вложенность

			),
		)
	);
}
add_action( 'init', 'add_new_taxonomies_tours', 0 );