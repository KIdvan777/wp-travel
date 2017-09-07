<?php

$query = new WP_Query(array(
		'post_type'=> array('best'),
		'taxbest' =>'uk',
		'posts_per_page' => 6,
	)
);

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();?>
		<div class="content">
			<div class="wrap">
				<div class="turs-item">
					<? the_post_thumbnail();?>
				</div>
				<div class="next">
					<h2><a href="<? the_permalink();?>"><? the_title();?></a></h2>
					<span>from &nbsp<b>$339-560</b></span><br>
					<span>Location</span>
					<p>
						<? the_content();?>
					</p>
					<button>подробнее</button>
				</div>
			</div>
		</div>
	<?}
} else {
	echo 'постов нет!';
}
wp_reset_postdata();
?>


