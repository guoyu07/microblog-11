<?php get_header(); ?>
	<div id="content-wrapper">
		<section id="content-area">
			<section id="content">
				<!-- loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="article-header <?php if (!is_single() && !is_page()) { echo 'hidden'; } ?>">
							<?php display_post_title(); ?>
						</header><!-- END article-header -->
						<div class="article-content-wrapper">
							<aside class="article-meta">
							<?php 
								echo get_avatar( get_the_author_meta( 'user_email' ), $size = '64', $default = '<path_to_url>' );
							 ?>	
							</aside><!-- END article-meta -->
							<section class="article-content">
								<p class="smaller"><?php display_author(); ?></p>
								<nav id="toc">
									<p><?php _e('Table of contents'); ?></p>
									<ul>
										<li><a href="#pages"><?php _e('Pages'); ?></a></li>
										<li><a href="#articles"><?php _e('Articles'); ?></a></li>
										<li><a href="#categories"><?php _e('Categories'); ?></a></li>
										<li><a href="#tags"><?php _e('Tags'); ?></a></li>
									</ul>
								</nav>

								<h3 id="pages"><?php _e('Pages'); ?></h3>
								<p class="smaller"><a href="#toc"><?php _e('Back to the Table of contents'); ?></a></p>
								<?php
									$args = array('number' => 0);
									wp_list_pages($args);
								?>
								
								<h3 id="articles"><?php _e('Articles'); ?></h3>
								<p class="smaller"><a href="#toc"><?php _e('Back to the Table of contents'); ?></a></p>
								<ul>
								<?php
									$debut = 0; //The first article to be displayed
									$myposts = get_posts('numberposts=-1&offset=$debut');
									foreach($myposts as $post) {
										echo '<li>'
										.get_the_time('Y-m-d')
										.'&nbsp;: <a href="'.get_permalink().'"'
										.' title="' . get_the_title() .' | '. get_bloginfo('name') .'">'
										.get_the_title()
										."</a></li>\n";
									}
								?>
								</ul>
								
								<h3 id="categories"><?php _e('Categories'); ?></h3>
								<p class="smaller"><a href="#toc"><?php _e('Back to the Table of contents'); ?></a></p>
								<?php
									$args = array('number' => 0);
									wp_list_categories($args);
								?>
								
								<h3 id="tags"><?php _e('Tags'); ?></h3>
								<p class="smaller"><a href="#toc"><?php _e('Back to the Table of contents'); ?></a></p>
								<?php
									$args = array('number' => 0);
									wp_tag_cloud($args);
								?>
								<?php display_pagination_nav(); ?>
							</section><!-- END article-content -->
						</div><!-- END article-content-wrapper -->
						<footer class="article-footer">
							<nav class="article-bottom-nav">
							<?php

								echo '<a href="'
									. get_day_link( get_the_date( 'Y' ), get_the_date( 'm' ), get_the_date( 'd' ))
									. '" title="'
									.  __( 'Articles posted on ' )
									. get_the_time( get_option( 'date_format' ) )
									. ' | ';
								bloginfo( 'name' );
								echo	'">'
									. get_the_date( 'Y-m-d H:i' )
									. '</a> | ';
							?>

							<?php display_permalink( '' ); ?> | <a href="#" rel="nofollow" title="<?php _e( 'Back to the top of this page' ); ?> | <?php bloginfo( 'name' ); ?>">^ <?php _e( 'Top' ); ?></a></nav>
						</footer>
					</article>
				<?php endwhile; endif; ?>
				<!-- END loop -->
				<?php display_pagination_nav(); ?>
			</section><!-- END content -->
			<?php get_sidebar(); ?>
		</section><!-- END content-area -->
	</div><!-- END content-wrapper -->
<?php get_footer(); ?>
