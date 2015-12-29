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
            'Thursday' => array('Morning', 'Noon', 'Night'),
            'Friday' => array('Morning', 'Noon', 'Night'),
        )
        ?>
        <ul class="accordion-tabs">
            <?php foreach(array_keys($conferenceDays) as $confDay): ?>
                <li class="tab-header-and-content">
                    <a href="javascript:void(0)" class="tab-link"><?php print ($confDay); ?></a>
                    <div class="tab-content">
                        <div class="expander">
                            <?php foreach($conferenceDays[$confDay] as $group): ?>
                                <div class="js-expander-trigger expander-trigger expander-hidden"><span><?php print $group; ?>&nbsp;</span></div>
                                <div id="js-expander-content" class="expander-content">
                                    <?php include( locate_template( 'taxonomy-cr3ativconfcategory.php' ) ); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>


<?php get_footer(); ?>






