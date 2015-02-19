<?php
/**
* Single Template
*/
    get_header();
	
// if Sticky post use different layout
if (is_sticky()){   	 
?>
<div class="sticky-single">
<?php
// Start the Loop.
while ( have_posts() ) : the_post();

	// Include the page content template.
	get_template_part( 'content', 'sticky' );

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	
endwhile;
?>
</div>
    <!-- Content for not sticky posts
    -------------------------------------------------------->
    <?php
}else{
        $category = get_the_category();
        $cat_name = $category[0]->cat_name;
        //echo $cat_name;
	?>
    
    <div class="bodywrap <?php if ( $cat_name == "Blog" ){ echo "blog-layout"; }?>">

         <div class="row group"> 
            <div class="grid12">
               <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					
				endwhile;
				?>
            </div>
        </div> <!--row group-->

    </div> <!-- END bodywrap -->
	
    <!--Post Navi |  Previous and Next Post-->
    <div class="page-nav"> 
        <div class="pn-prev"><?php previous_post('&#60; %', '', 'yes'); ?></div>
        <div class="pn-next"><?php next_post('% &#62;', '', 'yes'); ?></div>
    </div>
<?php	
} // if sticky end
    get_footer(); 
?>