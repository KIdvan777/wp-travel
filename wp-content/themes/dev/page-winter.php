<?php get_header();?>

	<?$q = new WP_Query(array('post_type'=> 'post',
	                          'tag' => 'miami',
	                          'posts_per_page' => 6,
	                           ));

 while( $q->have_posts()){
	$q->the_post();?>
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
<?}?>


<?php get_footer();?>