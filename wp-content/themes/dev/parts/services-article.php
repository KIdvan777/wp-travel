<?php
$query = new WP_Query(array(
	'post_type'=> array('services'),
	'taxserv' =>'ser',
	'posts_per_page' => '6'
));

while($query->have_posts()){
	$query->the_post();?>

	<div class="serv-item">
		<h2><? the_title();?></h2>
		<div class="wrap-serv-item">
            <a href="<? the_permalink();?>"><? the_post_thumbnail();?></a>
			<p>
				<? the_content();?>
			</p>
			<span><a href="<? the_permalink();?>">Learn more</a></span>
		</div>
	</div>

<?};
wp_reset_postdata();
?>
