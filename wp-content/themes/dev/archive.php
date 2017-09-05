<?php get_header(); ?>
<aside>
	<? get_template_part('parts/filter');?>
</aside>


<?

if(is_tag('moscow')){
	get_template_part('parts/tag','moscow');
}else if(is_tag('100-501')){
	get_template_part('parts/tag','100');
}
?>
<?php get_footer(); ?>