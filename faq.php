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
    <div class="hero tc">
        <h1 class="pv6">We have answers.</h1>    
    </div>
    <div class="mh3 mh4-ns">
        <div class=" mv5 container--mw1170 center tc">
            <div class="grid--col12">
                <div class="sidebar">

                    <?php $page_id = get_queried_object_id(); ?>
                    <?php if( have_rows('section', $page_id) ): ?>
                    <nav class="tl"> 
                        <?php while( have_rows('section', $page_id) ): the_row(); ?>
                        <li class="mb2 ">
                            <a id="<?php the_sub_field('section_link_id');?>" href="#<?php the_sub_field('section_id');?>"><?php the_sub_field('section_title');?></a>
                        </li>

                        <?php endwhile; ?>
                    </nav>

                    <?php else : ?>
                    <p>Coming up soon..</p>

                    <?php endif; ?>
                </div>
                <div class="content tl">

                    <?php $page_id = get_queried_object_id(); ?>
        
                    <?php if( have_rows('section', $page_id) ): ?>

                        <?php while( have_rows('section', $page_id) ): the_row(); ?>

                                <h2><?php the_sub_field('section_title');?></h2>

                                <div id="<?php the_sub_field('section_id');?>" class="section">

                                    <?php if( have_rows('question_and_answer') ): ?>
                                    <?php while( have_rows('question_and_answer') ): the_row(); ?>   
                                        <h4><?php the_sub_field('question');?></h4>
                                        <p><?php the_sub_field('answer', false, false);?></p>
                                    <?php endwhile; ?> 
                                    <div class="section-divider"></div>
                                </div>
 
                                <?php endif; ?>
                        <?php endwhile; ?>

                    <?php else : ?>
                    <p>Coming up soon..</p>

                    <?php endif; ?>

                    <!-- <div id="section1" class="section">
                        <h4>Reservations</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
                        <h4>How can I pay with sport vouchers?</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
             
                        <h4>XXXX</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
                        <h4>How can I pay with sport vouchers?</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
                        <div class="section-divider"></div>
                    </div>
                    <div id="section2" class="section">
                        <h4>Payments</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
                        <h4>How can I pay with sport vouchers?</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
       
                        <h4>Payments</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
                        <h4>How can I pay with sport vouchers?</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
                    </div>
                    <div id="section3" class="section">
                        <h4>Studio</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
                        <h4>How can I pay with sport vouchers?</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
                    </div>
                    <div id="section4" class="section">
                        <h4>Privates</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
                        <h4>How can I pay with sport vouchers?</h4>
                        <p>Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>





<section class="faq1">
    <div class="container--mw1300 center">
        <div class="title-section">
            <h1 class="section-title">FAQ</h1>
        </div>

        <?php $page_id = get_queried_object_id(); ?>
        
        <?php if( have_rows('section', $page_id) ): ?>

        <div class="grid--col14">

            <div class="faq pb5">
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
        </div>

        </div>
        <p class="small-body">Could not find an answer to your question? Let us help by dropping us a message in the live chat.</p>
    </div>
</section>

<?php get_footer(); ?>