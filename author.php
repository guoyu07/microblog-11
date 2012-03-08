<?php get_header(); ?>
	<div id="content-wrapper">
		<section id="content-area">
			<section id="content">
				<h1 id="archive-title"><?php
					// Preload data so that we can extract the author meta
					if ( have_posts() ) { the_post(); }

					if (get_the_author_meta( 'user_url' )) {
						echo '<a href="'. get_the_author_meta( 'user_url' ) .'">'
							. get_the_author_meta( 'display_name' )
							. "</a>\n";
					} else {
						the_author_meta( 'display_name' );
					}
					rewind_posts();
				?></h1>
				<?php get_template_part( 'loop' ); ?>
				<?php display_pagination_nav(); ?>
			</section><!-- END content -->
			<?php get_sidebar(); ?>
		</section><!-- END content-area -->
	</div><!-- END content-wrapper -->
<?php get_footer(); ?>