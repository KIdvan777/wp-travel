<?php get_header(); ?>
<aside>
	<? get_template_part('parts/filter');?>
</aside>

  <?   $query = new WP_Query(
  		
		
    );

    if ( have_posts() ) {
    while ( have_posts() ) {
    the_post();?>

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


                    </p>
                    <button><a href="<? the_permalink();?>"></a>подробнее</button>
                </div>
            </div>
        </div>

    <?}
    } else {
	echo 'постов нет!';
    }
wp_reset_postdata();
?>



<?php get_footer(); ?>