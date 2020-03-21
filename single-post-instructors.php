<?php
/*
 * Template Name: Instructor Post
 * Template Post Type: post
 */
  
 get_header();  ?>

<div class="overlay-decoration od-right-1A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell-life.svg')"></div>
    <div class="overlay-decoration od-left-2A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell.svg')"></div>
    <div class="overlay-decoration od-right-2A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-dots.svg')"></div>
    <div class="overlay-decoration od-left-3A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell-life.svg')"></div>
    <div class="overlay-decoration od-right-3A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell.svg')"></div>



<section class="instructor-profile-post relative">
    <div class="mh3 mh4-ns">
        <div class="container--mw1170 center tc">
            <div class="grid--col12">
                <div class="instructor-profile__image relative" style="background-image: url(<?php the_field('featured_thumbnail_image_on_hover'); ?>)">
                    <h1 class="instructor-profile__image__title"><?php the_title(); ?></h1>
                </div>

                <div class="instructor-profile__introduction pt5-ns pt4-l pb6-l tl">
                    <div class="instructor-profile__introduction__header mb5">
                        <h1 class="mt0 ph0"><?php the_title(); ?></h1>
                        <h2 class="f3 mb4"><span class="f5 db mb2">Instructor of</span>Pilates, Yoga & Barre</h2>
                        <span class="f5 db mb2">BAYB Since</span>
                        <span class="f3 db mb4">06 / 2019</span>
                    </div>

                    <?php echo get_post_field('post_content'); ?>
                    <a class="button button--medium button--inline-block button--wide button--br50 button--white" href="/schedule">
                        Book classes
                    </a>
                </div>
                    
            </div>
        </div>
    </div>



</section>
<section class="pv5 ph5-l bg-white">
     <!-- <div class="marquee-container">
			<span class="marquee">BAY Helsinki Pilates Yoga & Barre | Kanavaranta 7 C 12 00160 Helsinki | +358445321017 |</span>
    </div> -->
    
    <div class="mh3 mh4-ns">
        <div class="container--mw1170 center tc">
            <div class="w-100 tc pb4">
                <h3>Other instructors</h3>
            </div>
            <div class="grid--col12">
                <!-- <div class="grid--col10"> -->
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
                                <?php if( get_field('featured_thumbnail_image_on_hover') ): ?>
                                         
                                <div class="instructor-thumbnail-on-hover" style="background-image: url('<?php the_field('featured_thumbnail_image_on_hover'); ?>')">
                                    <a href="<?php the_permalink(); ?>"></a>
                                </div>
                                <?php endif; ?>
                            </div>
                            <h5 class="entry-title"><?php the_title(); ?></h5>

                            <?php endif; ?>
                            
                        </article>

                    <?php endwhile; ?>

                <?php endif; ?>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <div class="w-100 tc">
        <button class="button button--faq-preview button--medium button--inlineBlock button--dark-outline button--br5" href="/team">
            See all Instructors
        </button>
    </div>
  


</section>


</div>

<?php get_footer(); ?>