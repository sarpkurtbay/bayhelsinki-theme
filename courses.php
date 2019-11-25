<?php
/**
 * The template for displaying timetables
 * Template Name: Courses
 *
 * @package bayhelsinki
 */
get_header();
?>

<section class="courses">
    <div class="slideshow--courses">
        <div class="holder">

        <?php 
        $images = get_field('slideshow_images');
        if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                    <div style="background-image: url('<?php echo esc_url($image['sizes']['large']); ?>')"></div>
                <?php endforeach; ?>
        <?php endif; ?>

        </div>
    </div>
    <div class="container grid">

        <div class="courses-content">

        <h1 class="test">Courses</h1>

        <!-- <a href="#326">Link to Course</a> -->
        
        <?php 

        $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'courses',
        'posts_per_page' => 100,
        );
        $arr_posts = new WP_Query( $args );

        if ( $arr_posts->have_posts() ) :

        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
        ?>

        <div class="course" id="<?php the_ID() ?>">

        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        
        </div>

        <?php endwhile; ?>

        <?php else : ?>
        <p>New courses are on their way. Hold tight!</p>

        <?php endif; ?>
        </div>

    </div>
</section>
