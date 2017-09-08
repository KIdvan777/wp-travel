<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head();?>
</head>
<body>
<div class="site-container">
	<header>
		<div class="logo">
			<a href="/"><?php  the_custom_logo(); ?></a>
		</div>
		<div class="phone">
			<img src="<?  echo get_template_directory_uri().'/images/phone.png'; ?>" alt="">
			<span>
			<?php
				if ( function_exists('dynamic_sidebar') )
					dynamic_sidebar('phone-sidebar');
				?>
						
			</span>
			<p><?php
				if ( function_exists('dynamic_sidebar') )
					dynamic_sidebar('time-sidebar');
				?></p>
		</div>
		<div class="head">
                <?php
                    wp_nav_menu( array(
                    'theme_location'  => 'Primary menu',
                    'menu'            => 'primary',
                    'container'       => 'ul',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'top-menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                    ) );
                ?>

			<div class="lang">
				<select name="lang" id="lang" >
					<option value="">English:</option>
				</select>
			</div>
		</div>
	</header>
	<div class="line"></div>