<?php
/**
 * The template for displaying frequently asked questions and answers to them
 * Template Name: FAQ
 *
 * @package bayhelsinki
 */
get_header();
?>

<section class="faq">
<div class="title-section">
    <h1 class="section-title">FAQ</h1>
</div>

    <?php $page_id = '123'; ?>
    
    <?php if( have_rows('section', $page_id) ): ?>

    <div class="container--faq container--center container--mw900">

        <?php while( have_rows('section', $page_id) ): the_row(); ?>

        <div class=faq-section>
            <div class="container--faqSectionTitle">
                <h3 class="mb-clear"><?php the_sub_field('section_title');?></h3>
                <div class="triangle-symbol"></div>
            </div>

            <?php if( have_rows('question_and_answer') ): ?>

            <div class="container--faqSectionContent">
            <?php while( have_rows('question_and_answer') ): the_row(); ?>
                <div class="container--questionAndAnswer">                 
                    <div class="container--questionAndAnswer__question">
                        <h4><?php the_sub_field('question');?></h4>
                    </div>
                    <div class="container--questionAndAnswer__answer">
                        <p><?php the_sub_field('answer', false, false);?></p>
                    </div>
                </div>
            <?php endwhile; ?> 
            </div>       
            <?php endif; ?>
            </div> 
        <?php endwhile; ?>

        <?php else : ?>
        <p>Coming up soon..</p>

    <?php endif; ?>
    </div>

    <p class="small-body">Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
</section>