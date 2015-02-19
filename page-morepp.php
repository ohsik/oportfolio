<?php
/**
Template Name: More Portfolios
*/
    get_header(); 
?>
    <!-- Content
    -------------------------------------------------------->

         <div class="row group"> 
            <div class="grid12">
                <?php
					query_posts( array ( 'category_name' => 'Websites, Graphic Design, Motion Graphic, UXUI Design, 3D Art', 'post__not_in' => get_option( 'sticky_posts' ), 'posts_per_page' => -1 ) );
					
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
							 
							// Get thumnail url of each post
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
							 ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<div class="four-div wow fadeIn" style="background: url('<?php echo $thumb_url[0] ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                                	<div class="more-post">	
                                        <p class="more-cat">
                                            - <?php 
                                                $category = get_the_category(); 
                                                echo $category[0]->cat_name; 
                                            ?> -
                                        </p>
                                        <h4 class="f-title"><?php echo get_the_title( $ID ); ?> </h4>
									</div>
                                </div>
							</a>
                			<?php
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
        

<?php
    get_footer(); 
?>