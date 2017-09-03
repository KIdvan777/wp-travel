<div class="top-wrap">
	<span>Лучшие туры</span>

	<?php
	$query = new WP_Query(array(
		'category_name' => 'Лучшие туры',
		'posts_per_page' => 5,
	));

	while($query->have_posts()){
		$query->the_post();?>

        <div class="top-dest">
            <div class="top-item">
                <? the_post_thumbnail();?>
                <div class="top">
                    <h5><a href="<? the_permalink();?>"><? the_title();?></a></h5>
                    <p><? the_content();?></p>
                </div>
            </div>
        </div>

	<?};
	wp_reset_postdata();
	?>
	<p><a href="">Показать все</a></p>
</div>