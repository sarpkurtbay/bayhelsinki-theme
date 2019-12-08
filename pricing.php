<?php
/**
 * The template for displaying search results pages
 * Template Name: Pricing
 *
 * @package bayhelsinki
 */
get_header();
?>

<section class="intro-offers">
        <h2 class="section-title title-with-description">Intro offers</h2>
        <p class="title-description">For new clients</p>

        <div class="intro-offers">

            <?php if( have_rows('introductory_passes') ): 
                while( have_rows('introductory_passes') ): the_row(); 
                    if ( have_rows('intro_offer_1') ): the_row(); ?>

                <div class="intro-offer pricing-option intro-offer-1">
                    <h5 class="intro-offer-type"><?php the_sub_field('intro_offer_type');?></h5>
                    <p class="intro-offer-classes"><?php the_sub_field('intro_offer_classes');?></p>
                    <p class="intro-offer-classes-text">Classes</span>
                    <p class="intro-offer-price"><?php the_sub_field('intro_offer_price');?>€</p>                  
                    <div class="pricing-option-hover">
                        <p class="pricing-option-expiration">
                            Expires in<br /><?php the_sub_field('intro_offer_expiration');?>
                        </p>
                        <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                        <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                    </div>
                </div>

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('introductory_passes') ): 
                while( have_rows('introductory_passes') ): the_row(); 
                    if ( have_rows('intro_offer_2') ): the_row(); ?>

                <div class="intro-offer pricing-option intro-offer-2">
                    <h5 class="intro-offer-type"><?php the_sub_field('intro_offer_type');?></h5>
                    <p class="intro-offer-classes"><?php the_sub_field('intro_offer_classes');?></p>
                    <p class="intro-offer-classes-text">Classes</span>
                    <p class="intro-offer-price"><?php the_sub_field('intro_offer_price');?>€</p>                  
                    <div class="pricing-option-hover">
                        <p class="pricing-option-expiration">
                            Expires in<br /><?php the_sub_field('intro_offer_expiration');?>
                        </p>
                        <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                        <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                    </div>
                </div>

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('introductory_passes') ): 
                while( have_rows('introductory_passes') ): the_row(); 
                    if ( have_rows('intro_offer_3') ): the_row(); ?>

                <div class="intro-offer pricing-option intro-offer-3">
                    <h5 class="intro-offer-type"><?php the_sub_field('intro_offer_type');?></h5>
                    <p class="intro-offer-classes"><?php the_sub_field('intro_offer_classes');?></p>
                    <p class="intro-offer-classes-text">Classes</span>
                    <p class="intro-offer-price"><?php the_sub_field('intro_offer_price');?>€</p>                  
                    <div class="pricing-option-hover">
                        <p class="pricing-option-expiration">
                            Expires in<br /><?php the_sub_field('intro_offer_expiration');?>
                        </p>
                        <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                        <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                    </div>
                </div>

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <img class="intro-offer-picture-1" src="<?php bloginfo('template_url'); ?>/dist/img/pilates-yoga-movement.jpg">
            <img class="intro-offer-picture-2" src="<?php bloginfo('template_url'); ?>/dist/img/reformer-pilates.jpg">
        </div>
</section>










<section class="class-passes">
    <div class="title-section">
        <h1 class="section-title">Pricing</h1>
    </div>
    <div class="double-button-container container grid">
        <div class="double-button">
            <a class="classes selected" href="#/">
                <p class="mb-clear">Classes</p>
            </a>
            <a class="privates" href="#/">
                <p class="mb-clear">Privates</p>
            </a>
        </div>
    </div>


    <!-- <div class="class-passes"> -->
        <div class="class-pass-pricing-slide-window">
            <div class="class-pass-pricing-slide-container">
                <div class="class-pass-pricing-slide" id="classes">
                    <div class="class-pass-pricing-grid grid">
                    <div class="class-type">
                        <h5 >Yoga, Barre & Mat Pilates</h5>
                        
                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">Drop In 18€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">Expires in 1 month</p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">5 Classes 75€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">Expires in 2 months</p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">10 Classes 140€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">Expires in 3 months</p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">20 Classes 240€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">Expires in 4 months</p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <p class="small-body"><i>Valid for Yoga, Barre & Mat Pilates classes.</i></p>

                    </div> 

                    <div class="class-type">
                        <h5>Reformer Pilates</h5>
                        
                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">Drop In 28€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 1 month
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">5 Classes 130€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 2 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">10 Classes 240€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 3 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">20 Classes 440€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 4 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <p class="small-body"><i>Reformer Pilates class passes are also valid for Yoga, Barre & Mat Pilates classes.</i></p>

                    </div>

                    <div class="class-type">
                        <h5>Circuit Pilates</h5>
                        
                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">Drop In 32€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 1 month
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">5 Classes 75€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 2 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">10 Classes 140€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 3 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">20 Classes 240€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 4 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <p class="small-body"><i>Circuit Pilates class passes are valid for all of our group classes.</i></p>

        
                    </div>
                    </div>
                </div>


                <div class="class-pass-pricing-slide" id="privates">
                    <div class="class-pass-pricing-grid grid">
                    <div class="class-type">
                        <h5>1 on 1</h5>
                        
                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">Drop In 18€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 1 month
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">5 Classes 75€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 2 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">10 Classes 140€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 3 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">20 Classes 240€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 4 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <!-- <p class="small-body"><i>Valid for Yoga, Barre & Mat Pilates classes.</i></p> -->

                    </div>

                    <div class="class-type">
                        <h5>Duets (2 Persons)</h5>
                        
                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">Drop In 28€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 1 month
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">5 Classes 130€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 2 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">10 Classes 240€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 3 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">20 Classes 440€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 4 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <p class="small-body"><i>Prices above are per person.</i></p>

                    </div>

                    <div class="class-type">
                        <h5>Trios (3 Persons)</h5>
                        
                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">Drop In 120€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 1 month
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">5 Classes 570€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 2 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">10 Classes 1080€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 3 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <div class="class-pass pricing-option ">
                            <p class="class-pass mb-clear">20 Classes 2040€</p>                
                            <div class="pricing-option-hover">
                                <p class="pricing-option-expiration mb-clear">
                                    Expires in 4 months
                                </p>
                                <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
                                <healcode-widget data-version="0.2" data-link-class="healcode-pricing-option-text-link" data-site-id="43816" data-mb-site-id="757160" data-type="pricing-link" data-inner-html="" data-service-id="100009" />
                            </div>
                        </div>

                        <p class="small-body"><i>Prices above are per person.</i></p>

                    </div>
            </div>
                </div>
            </div>
        </div>
    <!-- </div> -->

    <div class="tc w-100">
        <button class="button button--faq-preview button--small button--inlineBlock button--dark-outline">
            Show Frequently Asked Questions
        </button>

        <span class="f1">hello</span>
    </div>

</section>
<section class="faq-preview">

    <?php $page_id = '29'; ?>
                <?php if( have_rows('question_and_answer', $page_id) ): ?>
    <div class="faq-preview-content container grid">

        <?php while( have_rows('question_and_answer', $page_id) ): the_row(); ?>
            <div class="faq-preview-question-and-answer">                 
                <div class="faq-preview-question">
                    <h4 class="mb-clear"><?php the_sub_field('question');?></h4>
                </div>
                <div class="faq-preview-answer">
                    <p class="mb-clear"><?php the_sub_field('answer', false, false);?></p>
                </div>
            </div>
        <?php endwhile; ?>      
    </div>
         <?php else : ?>
            <p>Coming up soon..</p>
        <?php endif; ?>

</section>
<a href="/schedule" class="mobile-cta-button reg-button">Book Classes</a>



<?php get_footer(); ?>