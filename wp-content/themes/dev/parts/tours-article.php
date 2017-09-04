<article>
	<?php
	$query = new WP_Query(array(
		'category_name' => 'Туры',
		'posts_per_page' => '6'
	));

	while($query->have_posts()){
		$query->the_post();?>

		<div class="content">
			<div class="wrap">
				<h2><a href=""><? the_title();?></a> <span>from &nbsp<b>$339-560</b></span></h2>
				<div class="turs-item">
					<? the_post_thumbnail();?>
				</div>
				<div class="next">
					<span>Location</span>
					<p>
						<? the_content();?>
					</p>
					<button>подробнее</button>
				</div>
			</div>
		</div>

	<?};
	wp_reset_postdata();
	?>


</article>