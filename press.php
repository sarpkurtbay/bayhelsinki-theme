<?php
/**
 * The template for displaying links to articles
 * Template Name: Press
 *
 * @package bayhelsinki
 */
get_header();
?>
<section class="press pt6 tc">

    <h1 class="db">Press</h1>

    <div class="mh3 mh4-ns">
        <div class="mv5 container--mw1170 center tc">
            <div class="grid--col12">
                    <?php if( have_rows('article_thumbnails') ): 
                    while( have_rows('article_thumbnails') ): the_row(); 
                        if ( have_rows('article') ): the_row(); ?>

                            <div class="article-thumbnail">
                                <div class="article-thumbnail-header">
                                    <div class="article-publisher">
                                        <h3>IS</h3>
                                    </div>
                                    <span class="article-language"><?php the_sub_field('language');?></span>
                                </div>
                                <h5><?php the_sub_field('title');?></h5>

                                <div class="article-thumbnail-footer">
                                    <a href="<?php the_sub_field('link');?>">Learn more</a>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
            </div>
        </div>
    </div>

</section>