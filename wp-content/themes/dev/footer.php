</div>		<!-- end container-site -->
<div style="clear:both"></div>
<footer>
	<div class="foot-menu">
		<?php
		wp_nav_menu( array(
			'theme_location'  => 'Footer menu',
			'menu'            => 'footer',
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
        <div class="copyright">
            <span>Travel agency 2017</span>
        </div>
	</div>
</footer>
<?php wp_footer();?>
</div>
</body>
</html>
