<article>

	<?php

	 // wp_list_categories();
	 // wp_list_categories('taxonomy=taxbest');



	$query = new WP_Query(array(
		'post_type'=> array('tours'),
		// 'taxtour' =>'украина',
		//'posts_per_page' => ''
	));

	while($query->have_posts()){
		$query->the_post();?>

		<div class="content">
			<div class="wrap">
				<h2><a href="<? the_permalink();?>">
                        <? the_title();?></a> <span>from &nbsp<b>$339-560</b></span></h2>
				<div class="turs-item">
					<? the_post_thumbnail('tours');?>
				</div>
				<div class="next">
					<span>Location</span>
					<p>
						<? ?>
	
					</p>
					<button><a href="<? the_permalink();?>"></a>подробнее</button>
				</div>
			</div>
		</div>

	<?};
	wp_reset_postdata();
	?>


</article>