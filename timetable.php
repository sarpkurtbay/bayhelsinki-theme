<?php
/**
 * The template for displaying timetables
 * Template Name: Timetable
 *
 * @package bayhelsinki
 */
get_header();
?>

<section class="booking-classes">

    <div class="overlay-decoration od-left-1A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-dots.svg')"></div>
    <div class="overlay-decoration od-right-1A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell-life.svg')"></div>
    <div class="overlay-decoration od-left-2A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell.svg')"></div>
    <div class="overlay-decoration od-right-2A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-dots.svg')"></div>
    <div class="overlay-decoration od-left-3A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell-life.svg')"></div>
    <div class="overlay-decoration od-right-3A" style="background-image: url('<?php bloginfo('template_url'); ?>/dist/img/pattern-cell.svg')"></div>
    
    <div class="title-section container">
        <h1 class="section-title">Schedule</h1>
    </div>

    <div class="large-container">
        <div class="timetable-container">
            <script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>

            <healcode-widget data-type="schedules" data-widget-partner="object" data-widget-id="60109148905f" data-widget-version="1" ></healcode-widget>
        </div>
        <div class="sidebar-container">


        <!-- EI  TOIMI, EHKÄ PAGE  ID PUUTTUU JA SIKSI EI ONNISTU HAKEMAAN KUVAA-->
            <div class="upcoming-events-container">

                <span class=>New</span>
                <button class="cta">Enroll</button>
            </div> 
            <button class="button button--small button--transparent button--wide">Paying with Vouchers</button>  
            <!-- <button class="reg-button">Getting started</button> -->
        </div>
    </div>

</section>