<?php
/**
 * Template Name: Schedule
 *
 *
 * @package oewebsite
 */

get_header(); ?>
<div class="one-fourth">
    <?php get_sidebar(); ?>
</div>
<div class="three-fourths">
    <div class="schedule-2016">
        <?php

        $conferenceDays = array(
            'Thursday' => array('Aesthetics and Politics'),
            'Friday' => array('Open Houses', 'OMCA Friday Night'),
            'Saturday' => array('All Day', 'Morning', 'Lunchtime', 'Afternoon', 'Evening', 'Keynote', 'After Hours'),
            'Sunday' => array('All Day', 'Morning', 'Lunchtime', 'Afternoon', 'Evening', 'Keynote', 'After Hours'),
        )
        ?>
        <ul class="accordion-tabs">
            <?php foreach(array_keys($conferenceDays) as $confDay): ?>
                <li class="tab-header-and-content">
                    <a href="javascript:void(0)" class="tab-link"><?php print ($confDay); ?></a>
                    <div class="tab-content">
                        <?php
                            if($confDay == 'Saturday' OR $confDay == 'Sunday') {
                                print('<p>Coming soon! Follow us on social media for updates.</p>');
                            }

                        ?>
                        <div class="expander">
                            <?php foreach($conferenceDays[$confDay] as $group): ?>
                                <div class="js-expander-trigger expander-trigger expander-hidden"><span class="group-title"><?php print $group; ?>&nbsp;</span></div>
                                <div id="js-expander-content" class="expander-content">
                                    <?php include( locate_template( 'taxonomy-cr3ativconfcategory.php' ) ); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </li>

            <?php endforeach; ?>
            <li class="tab-header-and-content">
                <a href="javascript:void(0)" class="tab-link">OEHQ</a>
                <div class="tab-content">
                    <div class="expander">
                        <p> what shall go here </p>
                    </div>

                </div>
            </li>
        </ul>
    </div>
</div>


<?php get_footer(); ?>






