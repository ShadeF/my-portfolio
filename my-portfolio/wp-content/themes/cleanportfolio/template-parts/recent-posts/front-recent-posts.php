<?php
/**
 * Template part for displaying Recent Posts in the front page template
 *
 * @package Clean_Portfolio
 */
?>
<div id="infinite-post-wrap" class="archive-post-wrap layout-three">
	<?php
	$args = array(
		'posts_per_page'      => 6,
		'ignore_sticky_posts' => true,
		'paged'               => '',
	);

	$cats = get_theme_mod( 'cleanportfolio_front_page_category' );

	if ( is_array( $cats ) && ! in_array( '0', $cats ) ) {
		$args['category__in'] = $cats;
	}

	/**
	 * Show 6 latest posts
	 */
	$recent_posts = new WP_Query( $args );

	/* Start the Loop */
	while ( $recent_posts->have_posts() ) :
		$recent_posts->the_post();

		get_template_part( 'template-parts/content/content', 'archive' );

	endwhile;

	wp_reset_postdata();
	?>
	<div class="posts-navigation">
		<div class="nav-links">
			<a class="more-recent-posts button" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">
				<?php esc_html_e( 'More Posts', 'cleanportfolio' ); ?>
			</a>
		</div><!-- .nav-links -->
	</div><!-- .posts-navigation -->
</div><!-- .archive-post-wrap -->
