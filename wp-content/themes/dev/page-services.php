<?php get_header();?>
	<aside>
		<div class="banner-service">
			<img src="<? echo get_template_directory_uri() . '/images/bannerService.png';?>" alt="">
		</div>
	</aside>
	<article>
		<div class="title">
			<h1>Lorem ipsum dolor sit amet</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
				incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
				dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				Excepteur sint occaecat
				cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<? get_template_part('parts/services', 'article')?>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</article>
<?php get_footer();?>