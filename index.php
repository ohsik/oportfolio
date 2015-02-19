<?php
    get_header(); 
?>
    <!-- Content
    -------------------------------------------------------->
    <div class="full-width pad-v">
        <div class="bodywrap">
    
             <div class="row group"> 
                <div class="grid12">
                    <h1>HELLO :)</h1>
                    <p>My name is O. I'm a visual designer who also happens to do front-end development.</p>
                    
                </div>
            </div> <!--row group-->
            
        </div> <!-- END bodywrap -->
    </div>
    
    <?php
        
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            
            // if sticky posts
            if (is_sticky()){
                
            // array random value
            $extra_classes = array('bg-green', 'bg-yellow', 'bg-blue', 'bg-red', 'bg-purple');
            $extra_class = $extra_classes[$wp_query->current_post%count($extra_classes)];
            //echo $extra_class;
        
    ?>
    
    
    <div class="full-width <?php echo $extra_class; ?>">
        <div class="bodywrap">
    
             <div class="row group"> 
                <div class="grid12">
                   
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                        <a class="wow fadeIn" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('autothumb'); ?></a>
                        <header class="entry-header">
                            <?php
                                if ( is_single() || is_page() ) :
                                    the_title( '<h1 class="entry-title">', '</h1>' );
                                else :
                                    the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
                                endif;
                            ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content wow fadeInDown">
                            <?php the_excerpt(); ?>
                        </div><!-- .entry-summary -->
                       
                        <?php the_tags( '<footer class="entry-meta"><span class="tag-links">', ' ', '</span></footer>' ); ?>
                        
                    </article><!-- #post-## -->

    
                </div>
            </div> <!--row group-->
            
        </div> <!-- END bodywrap -->
    </div>
    
    
    <?php 
    // non sticky posts
    }else{  
    
    // Get thumnail url of each post
    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
    
    ?>
    <?php /*?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <div class="four-div" style="background: url('<?php echo $thumb_url[0] ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
            <h4 class="f-title"><?php echo get_the_title( $ID ); ?> </h4>
        </div>
    </a><?php */?>
    
    <?php }  
        endwhile;
        else :
            echo wpautop( 'Sorry, no posts were found' );
        endif;
    ?>
	<div class="full-width f-div">
        <div class="bodywrap">
    
             <div class="row group"> 
                <div class="grid12">
                    <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>more-portfolios/" class="cta">Want to see more?</a></h3>
                </div>
            </div> <!--row group-->
            
        </div> <!-- END bodywrap -->
    </div>

<?php  
    get_footer(); 
?>