<?php get_header(); ?>

<div id="main-content" class="">
    

    <div class="col-sm-9" id="dentro">

        <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content' , get_post_format() ); ?>

               
                <nav class="nav-single">

                        <h3 class="assistive-text"><?php _e( '', 'punk2013' ); ?></h3>
                        
                        
                       
                        
                </nav><!-- .nav-single -->
                <div class="col-sm-3 regresar boton"><a href="javascript:history.back()">REGRESAR</a><?php if(function_exists('social_ring_show')){ social_ring_show();} ?></div>

                <div class="fb-comments" data-href="<?php the_permalink(); ?>"  data-width="100%" data-num-posts="10"></div><!--<?php comments_template( '', true ); ?>-->
                
        <?php endwhile; // end of the loop. ?>


    </div>
    <div class="col-sm-3 sidebar-dentro">
       <?php get_sidebar(); ?>
    </div>
    
        
</div>


<?php get_footer(); ?>
