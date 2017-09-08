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
				'singular_name' => 'Туры',
				'search_items' =>  'Найти туры',
				'popular_items' => 'Популярные туры',
				'all_items' => 'Все туры',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать туры',
				'update_item' => 'Обновить туры',
				'add_new_item' => 'Добавить категорию тура',
				'new_item_name' => 'Название нового тура',
				'separate_items_with_commas' => 'Разделяйте туры запятыми',
				'add_or_remove_items' => 'Добавить или удалить тур',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых туров',
				 'menu_name' => 'Категории туров'
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
			// 'rewrite' => array(
			// 	/* настройки URL пермалинков */
			// 	'slug' => 'taxtours', // ярлык
			// 	'hierarchical' => false // разрешить вложенность

			// ),
		)
	);
}
add_action( 'init', 'add_new_taxonomies_tours', 0 );

// Таксономия сезоны

function add_new_taxonomies_season() {
	/* создаем функцию с произвольным именем и вставляем
	в неё register_taxonomy() */
	register_taxonomy('taxseason',
		array('tours'),
		array(
			'hierarchical' => true,
			/* true - по типу рубрик, false - по типу меток,
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можете
				не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Сезон',
				'singular_name' => 'сезон',
				'search_items' =>  'Найти сезон',
				'popular_items' => 'Популярные сезоны',
				// 'all_items' => 'Все сезоны',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать сезон',
				'update_item' => 'Обновить сезон',
				'add_new_item' => 'Добавить сезон',
				'new_item_name' => 'Название нового сезона',
				'separate_items_with_commas' => 'Разделяйте сезоны запятыми',
				'add_or_remove_items' => 'Добавить или удалить сезон',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых сезонов',
				'menu_name' => 'Сезоны'
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
				'slug' => 'taxseason', // ярлык
				'hierarchical' => false // разрешить вложенность

			),
		)
	);
}
add_action( 'init', 'add_new_taxonomies_season', 0 );

// Таксономия страна

function add_new_taxonomies_country() {
	/* создаем функцию с произвольным именем и вставляем
	в неё register_taxonomy() */
	register_taxonomy('taxcountry',
		array('tours'),
		array(
			'hierarchical' => true,
			/* true - по типу рубрик, false - по типу меток,
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можете
				не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Страна',
				'singular_name' => 'Страна',
				'search_items' =>  'Найти страну',
				'popular_items' => 'Популярные страны',
				// 'all_items' => 'Все страны',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать страну',
				'update_item' => 'Обновить страну',
				'add_new_item' => 'Добавить страну',
				'new_item_name' => 'Название новой страны',
				'separate_items_with_commas' => 'Разделяйте страны запятыми',
				'add_or_remove_items' => 'Добавить или удалить страну',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых стран',
				'menu_name' => 'Страны'
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
			// 'rewrite' => array(
			// 	/* настройки URL пермалинков */
			// 	'slug' => 'taxcountry', // ярлык
			// 	'hierarchical' => false // разрешить вложенность

			// ),
		)
	);
}
add_action( 'init', 'add_new_taxonomies_country', 0 );

// Таксономия сезоны

function add_new_taxonomies_price() {
	/* создаем функцию с произвольным именем и вставляем
	в неё register_taxonomy() */
	register_taxonomy('taxprice',
		array('tours'),
		array(
			'hierarchical' => true,
			/* true - по типу рубрик, false - по типу меток,
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можете
				не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Цена',
				'singular_name' => 'Цена',
				'search_items' =>  'Найти цену',
				'popular_items' => 'Популярные цены',
				// 'all_items' => 'Все стоимость',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать цену',
				'update_item' => 'Обновить цену',
				'add_new_item' => 'Добавить цену',
				'new_item_name' => 'Название новой цены',
				'separate_items_with_commas' => 'Разделяйте цену запятыми',
				'add_or_remove_items' => 'Добавить или удалить цену',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых цен',
				'menu_name' => 'Цена'
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
			// 'rewrite' => array(
			// 	/* настройки URL пермалинков */
			// 	'slug' => 'taxprice', // ярлык
			// 	'hierarchical' => false // разрешить вложенность

			// ),
		)
	);
}
add_action( 'init', 'add_new_taxonomies_price', 0 );

function add_new_taxonomies_hotel() {
	/* создаем функцию с произвольным именем и вставляем
	в неё register_taxonomy() */
	register_taxonomy('taxhotel',
		array('tours'),
		array(
			'hierarchical' => true,
			/* true - по типу рубрик, false - по типу меток,
			по умолчанию - false */
			'labels' => array(
				/* ярлыки, нужные при создании UI, можете
				не писать ничего, тогда будут использованы
				ярлыки по умолчанию */
				'name' => 'Отель',
				'singular_name' => 'Отельотель',
				'search_items' =>  'Найти отель',
				'popular_items' => 'Популярные отель',
				// 'all_items' => 'Все стоимость',
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Редактировать отель',
				'update_item' => 'Обновить отель',
				'add_new_item' => 'Добавить отель',
				'new_item_name' => 'Название новой отель',
				'separate_items_with_commas' => 'Разделяйте отель запятыми',
				'add_or_remove_items' => 'Добавить или удалить отель',
				'choose_from_most_used' => 'Выбрать из наиболее часто используемых отель',
				'menu_name' => 'Отель'
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
			// 'rewrite' => array(
			// 	/* настройки URL пермалинков */
			// 	'slug' => 'taxhotel', // ярлык
			// 	'hierarchical' => false // разрешить вложенность

			// ),
		)
	);
}
add_action( 'init', 'add_new_taxonomies_hotel', 0 );

// add tags to the post_type tours

// add_action( 'init', 'post_tag_for_pages' );
// function post_tag_for_pages(){
// 	register_taxonomy_for_object_type( 'post_tag', 'tours');
// }