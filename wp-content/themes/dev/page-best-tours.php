<?php get_header();?>
	<aside>
		<? get_template_part('parts/filter'); ?>
	</aside>
	<article>
		<? get_template_part('parts/best','article'); ?>

	</article>


<?php get_template_part('parts/pagination');?>
<?php get_footer();?>