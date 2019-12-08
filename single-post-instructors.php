<?php
/*
 * Template Name: Instructor Post
 * Template Post Type: post
 */
  
 get_header();  ?>

<section>
    <div class="instructor-profile tc page-container-w1170 page-container-padding8">
        <div class="instructor-profile__image" style="background-image: url(<?php the_field('featured_thumbnail_image_on_hover'); ?>)">
            <h2 class="instructor-profile__image__title">Sonja Hannus</h2>
        </div>
        <div class="instructor-profile__introduction">
            <div class="instructor-profile__introduction--facts">
                <h2><span>Instructor of</span>Pilates, Yoga & Barre</h2>
                <span>BAYB Since</span>
                <span>06 / 2019</span>
            </div>

            <?php echo get_post_field('post_content'); ?>
        </div>
    </div>

    <div class="container--full-width-center">
        <h3>Other instructors</h3>
    </div>

    <div class="instructor-thumbnails container">
        <?php 

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'instructors',
            'orderby'   => 'rand',
            'posts_per_page' => 4,
            'post__not_in' => array( $post->ID )
        );
        $arr_posts = new WP_Query( $args );
        
        if ( $arr_posts->have_posts() ) :
        
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('instructor-thumbnail'); ?>>
                    
                    <?php if ( has_post_thumbnail() ) : ?> 
                    
                    <div class="instructor-thumbnail">
                        <?php the_post_thumbnail();?>
                        <div class="instructor-thumbnail-on-hover">
                            <a href="<?php the_permalink(); ?>"></a>
                            <?php if( get_field('featured_thumbnail_image_on_hover') ): ?>
                                <img src="<?php the_field('featured_thumbnail_image_on_hover'); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <h5 class="entry-title"><?php the_title(); ?></h5>

                    <?php endif; ?>
                    
                </article>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>

</section>



<?php get_footer(); ?>