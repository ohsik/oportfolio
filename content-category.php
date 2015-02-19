<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Ohsik
 * @since Ohsik 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	<header class="entry-header">
		<?php
			if ( is_single() || is_page() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>
	</header><!-- .entry-header -->
    <div class="entry-summary">
        <?php the_excerpt(); ?> 
    </div>
	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', ' ', '</span></footer>' ); ?>
    
</article><!-- #post-## -->
