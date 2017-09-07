its search
<?php

$query = new WP_Query(

);

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();?>
        <div class="content">
            <div class="wrap">
                <div class="turs-item">
					<? the_post_thumbnail();?>
                </div>
                <div class="next">
                    <h2><a href=""><? the_title();?></a></h2>
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
<?echo get_query_var('tag_id');?>


