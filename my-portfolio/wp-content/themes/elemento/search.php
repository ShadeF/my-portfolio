<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Elemento
 */

get_header(); 
$sidebar = elemento_post_archive_sidebar_pos();

if( ! $sidebar ){
  $row =  'aGrid';
}else if($sidebar=='left'){
  $row = 'col_2-30-70';
}else{
  $row = 'col_2-70-30';
}

?>
<?php get_template_part( 'template-parts/banner' );?>
<div id="content">
 <section class="jr-site-blog-list all-article-wrap post-list-view  search-result">
  <div class="<?php echo elemento_site_container();?> content-all ">
 <div class="<?php echo esc_attr($row); ?>">
 	

  
   <?php if( $sidebar == 'left' ):  get_sidebar();  endif; ?>        
    <div class="cols">
      <h1 class="page-title">
      			<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'elemento' ), '<span>' . get_search_query() . '</span>' );
				?>
	  </h1>
     

       <?php
       if ( have_posts() ) :
	    				 /* Start the Loop */
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			 do_action('elemento_posts_navigation'); 

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

</div>
 <?php if( $sidebar == 'right' ):  get_sidebar();  endif; ?>        
</div>
</div>
</section>

<?php
get_footer();
