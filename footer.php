	<footer id="site-footer" class="col-2">
		<div class="col-2-1">
			<p><?php _e( '<a href="http://creativecommons.org/licenses/by/3.0/deed.en_CA" title="Creative Commons — Attribution 3.0 Unported" rel="license"><abbr title="Creative Commons">CC</abbr> By 3.0</a>' ) ?>, <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>"><?php bloginfo( 'name' ); ?></a>, <time datetime="<?php display_copyright_date_span( ); ?>"><?php display_copyright_date_span( ); ?></time>.</p>
		</div>
		<nav class="col-2-2"><a href="#" title="<?php _e( 'Back to the top of this page' ); ?> | <?php bloginfo( 'name' ); ?>" rel="nofollow">^ <?php _e( 'Top' ); ?></a></nav>
	</footer>
<?php
	/**
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins
	 * which generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
</body>
</html>