<div class="top-wrap">
	<span><?php

		$term_id = 78;

		$taxonomy = 'taxtour'; // С версии 4.4. параметр стал не обязательным.
		$term = get_term( $term_id, $taxonomy );
		// Теперь, переменная содержит данные о элементе таксономии.

		// Альтернативное название элемента находится здесь
		$slug = $term->slug;

		// Название элемента
		$name = $term->name;

		// А так мы получим описание элемента таксономии
		$desc = $term->description;

		// Вывод на экран
		echo $term->name;

		?>
	</span>

	<?php
	$query = new WP_Query(array(
		'post_type'=> array('tours'),
		'taxtour' =>'Популярные',
		'posts_per_page' => '5'
	));

	while($query->have_posts()){
		$query->the_post();?>

        <div class="top-dest">
            <div class="top-item">
                <? the_post_thumbnail('little');?>
                <div class="top">
                    <h5><a href="<? the_permalink();?>"><? the_title();?></a></h5>
                    <p><? the_content();?></p>
                </div>
            </div>
        </div>

	<?};
	wp_reset_postdata();
	?>
	<p><a href="<? the_permalink();?>">Показать все</a></p>
</div>