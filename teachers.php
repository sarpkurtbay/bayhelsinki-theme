<?php
/**
 * The template for displaying timetables
 * Template Name: Teachers
 *
 * @package bayhelsinki
 */
get_header();
?>

<section class="hero-teachers">
    <div class="title-section">
        <div class="container">
            <h1 class="section-title">Our Team</h1>
        </div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/dist/img/pilates-yoga-barre-teachers.jpg'">
    <div class="marquee-container">
	    <span class="marquee">Kanavaranta 7 C 12 00160 Helsinki | Open Everyday | 0503077688 |</span>
	</div>
</section>
<section class="instructors tc pb6">

    <div class="overlay-decoration od-left-1A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-dots.svg')"></div>
    <div class="overlay-decoration od-right-1A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell-life.svg')"></div>
    <div class="overlay-decoration od-left-2A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell.svg')"></div>
    <div class="overlay-decoration od-right-2A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-dots.svg')"></div>
    <div class="overlay-decoration od-left-3A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell-life.svg')"></div>
    <div class="overlay-decoration od-right-3A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell.svg')"></div>

    <div class="instructors page-container--w1170 center grid--col12 pv5">

      <div class="instructors-grid grid--col10">

            <h2 class="section-title pb3">Find your instructor</h2>

    <div class="instructor-thumbnails mb4 grid--col10">
        <?php

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'instructors',
            'posts_per_page' => 100,
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
    <div class="instructors--footer">
    <a href="/careers" class="border-box button button--medium button--inlineBlock button--br50 button--dark-outline button--inlineBlock mt3 center">See Open Positions</a>
    </div>
</div>

</div>
</section>

<?php get_footer(); ?>
