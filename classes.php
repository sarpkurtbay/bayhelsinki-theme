<?php
/**
 * The template for displaying timetables
 * Template Name: Classes
 *
 * @package bayhelsinki
 */
get_header();
?>

<div class="overlay-decoration od-right-1A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell-life.svg')"></div>
    <div class="overlay-decoration od-left-2A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell.svg')"></div>
    <div class="overlay-decoration od-right-2A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-dots.svg')"></div>
    <div class="overlay-decoration od-left-3A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell-life.svg')"></div>
    <div class="overlay-decoration od-right-3A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell.svg')"></div>

<section class="classes">


<div class="overlay-decoration od-left-1A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-dots.svg')"></div>


    <div class="w-100 relative" >
        <div class="mh3 mh4-ns">
            <div class="container--mw1170 center tc bg-transparent">
                <div class="grid--col12">
                    <div class="container--classes bg-white tl">
                        <h1 class=mt0><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container--classes-slideshow carousel--classes main-carousel absolute top-0">
            <?php
            $images = get_field('slideshow_images');
            if( $images ): ?>

                    <?php foreach( $images as $image ): ?>

                        <div class="carousel-cell--classes carousel-cell" style="background-image: url(<?php echo esc_url($image['sizes']['large']); ?>)"></div>

                    <?php endforeach; ?>

            <?php endif; ?>
            <!-- <div class="carousel-cell--classes carousel-cell bg-blue">
            </div>
            <div class="carousel-cell--classes carousel-cell bg-green">
            </div>
            <div class="carousel-cell--classes carousel-cell bg-yellow">
            </div> -->
        </div>
    </div>
</section>


<?php get_footer(); ?>
