<div class="featured" >
	<span><?php 

	$term_id = 77;

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
		'taxtour' =>'Горяшие',
		'posts_per_page' => '6'
	)
    );

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();?>
            <div class="wrap-featured-item">
                <div class="featured-item">
	                <?  the_post_thumbnail('feature');?>
                    <h3><a href="<?php the_permalink(); ?>"><? the_title(); ?></a></h3>
                    <p><? the_content(); ?><?php the_meta(); ?>
                    	
                    </p>
                </div>
            </div>
		<?}
	} else {
		echo 'постов нет!';
	}
	wp_reset_postdata();
	?>

</div>