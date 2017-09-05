<div class="featured" >
	<span>Ближайшие туры</span>
	<?php

	$query = new WP_Query(array(
		'post_type'=> array('post','tour'),
		'category_name' => 'Ближайшие',
		'posts_per_page' => 6,
	    )
    );

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();?>
            <div class="wrap-featured-item">
                <div class="featured-item">
	                <? echo the_post_thumbnail('featur');?>
                    <h3><a href="<?php the_permalink(); ?>"><? the_title(); ?></a></h3>
                    <p><? the_content(); ?><?php the_meta(); ?></p>
                </div>
            </div>
		<?}
	} else {
		echo 'постов нет!';
	}
	wp_reset_postdata();
	?>

</div>