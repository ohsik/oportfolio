<?php
	// Category template
    get_header(); 
?>
    <!-- Content
    -------------------------------------------------------->
    <div class="archive-header f-div">
        <h3 class="archive-title"><?php printf( __( 'Selected Category: %s', 'rubstr' ), single_cat_title( '', false ) ); ?></h3>
		<?php
            // Show an optional term description.
            $term_description = term_description();
            if ( ! empty( $term_description ) ) :
               // printf( '<div class="taxonomy-description"><i>%s</i></div>', $term_description );
            endif;
        ?>
	</div><!-- .archive-header -->
    
    <div class="bodywrap blog-layout">

         <div class="row group"> 
            <div class="grid12">
                <?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part( 'content', 'category' );
                
                        endwhile;
                            posts_nav_link();
                            
                    else :
                        // If no content, include the "No posts found" template.
                        get_template_part( 'content', 'none' );
                
                    endif;
                        //get comment template
                        comments_template();
                ?>

            </div>
        </div> <!--row group-->
        
    </div> <!-- END bodywrap -->

<?php
    get_footer(); 
?>