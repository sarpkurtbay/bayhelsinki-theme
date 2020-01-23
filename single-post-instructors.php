<?php
/*
 * Template Name: Instructor Post
 * Template Post Type: post
 */
  
 get_header();  ?>

<section class="instructor-profile-post ph5-l">
    <div class="instructor-profile grid--col14 center container--mw1300 pt5-l mb6 ph0-m">
            <div class="instructor-profile__image vh-75-l vh-50-m" style="background-image: url(<?php the_field('featured_thumbnail_image_on_hover'); ?>)">
                <h1 class="instructor-profile__image__title"><?php the_title(); ?></h1>
            </div>
            <div class="instructor-profile__introduction pa5-ns pv0-l">
                <div class="instructor-profile__introduction__header mb5">
                    <h1 class="mt0 ph0"><?php the_title(); ?></h1>
                    <h2 class="f3 mb4"><span class="f5 db mb2">Instructor of</span>Pilates, Yoga & Barre</h2>
                    <span class="f5 db mb2">BAYB Since</span>
                    <span class="f3 db mb4">06 / 2019</span>
                </div>

                <?php echo get_post_field('post_content'); ?>
                <a href="/schedule" class="button button--faq-preview button--medium button--inline-block button--dark-outline button--br15">Book Classes</a>
            </div>
    </div>
</section>
<section class="pb6 ph5-l">

    <div class="container--full-width-center pb4">
        <h3>Other instructors</h3>
    </div>

    <div class="grid--col14 center container--mw1300 mb4">

        <div class="container--other-instructors grid--col12">
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

                    <article class="instructor-thumbnail container--other-instructors__article" id="post-<?php the_ID(); ?>" <?php post_class('instructor-thumbnail'); ?>>
                        
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


    </div>

    <div class="w-100 tc">
            <a href="/teachers" class="button button--faq-preview button--medium button--inline-block button--dark-outline button--br15 center">All instructors</a>
    </div>
  
</section>


</div>

<?php get_footer(); ?>