<?php
/**
* Page Template
*/
    get_header(); 
?>
    <!-- Content
    -------------------------------------------------------->
    <div class="bodywrap blog-layout">

         <div class="row group"> 
            <div class="grid12">
               <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
                    
				endwhile;
				?>
            </div>
        </div> <!--row group-->

    </div> <!-- END bodywrap -->

<?php
    get_footer(); 
?>