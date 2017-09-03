<?php get_header();?>
	<aside>
    <?php get_template_part('parts/filter');?>
    <?php get_template_part('parts/tours','article');?>
    </aside>
<?php get_template_part('parts/pagination');?>
<?php get_footer();?>