<?php get_header();?>
	<aside>
		<? get_template_part('parts/filter'); ?>
	</aside>
	<article>
		<? get_template_part('parts/best','article'); ?>

	</article>


<?// Previous/next page navigation.
	the_posts_pagination( ); ?>
<?php get_footer();?>