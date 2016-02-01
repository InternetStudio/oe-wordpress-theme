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
            'Thursday' => array('Pre-conference Intensives'),
            'Friday' => array('Open Houses', 'OMCA Friday Night'),
            'Saturday' => array('All Day', 'Morning', 'Lunchtime', 'Afternoon', 'Evening', 'Keynote', 'After Hours'),
            'Sunday' => array('All Day', 'Morning', 'Lunchtime', 'Afternoon', 'Evening', 'Keynote', 'After Hours'),
        )
        ?>
        <p style="padding: 0 15px;"><em>OE 2016 programming details will be released throughout the month of February. Please check back, and follow us on social media for the latest updates on OE 2016!</em></p>
        <ul class="accordion-tabs">
            <?php foreach(array_keys($conferenceDays) as $confDay): ?>
                <li class="tab-header-and-content">
                    <a href="javascript:void(0)" class="tab-link"><?php print ($confDay); ?></a>
                    <div class="tab-content">
                        <?php
                            if($confDay == 'Saturday' OR $confDay == 'Sunday') {
                                print('
                                    <p>OE 2016 opens at 9am Saturday and Sunday, with panels, workshops, discussions, projects, and more throughout the day. Keynote lectures will start at 7:30pm.</p>
                                 ');
                            }

                        ?>
                        <div class="expander">
                            <?php foreach($conferenceDays[$confDay] as $group): ?>
                                <div class="js-expander-trigger expander-trigger expander-hidden"><span class="group-title"><?php print $group; ?>&nbsp;</span></div>
                                <div id="js-expander-content" class="expander-content">
                                    <?php if ($group == "Pre-conference Intensives") {
                                        print('<p>Pre-conference programming is planned and hosted by select OE local partners.</p>');
                                    } else if ($group == "Open Houses") {
                                        print('<p>Open House Tours are programmed by local partners and will highlight the work being done by local artists and organizations in the Bay Area through a variety of dynamic off-site programming.</p>');
                                    } else if ($group == "OMCA Friday Night") {
                                        print('<p>Every Friday night OMCA hosts a family-friendly take on a festive night market, featuring live music, food trucks, local beer and wine, and more! On April 29th "Friday Nights @ OMCA" will feature projects by OE 2016 presenters, and serve as the kick-off event for the conference.</p>');
                                    }
                                    ?>
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
                        <p>When you arrive at OE 2016, make your first stop the Open Engagement Headquarters OEHQ! OEHQ is the one-stop shop for checking in, picking up OE 2016 merchandise, and getting the most up-to-date information about the conference throughout the weekend.</p>

                        <p>Hours and exact location of OEHQ will be posted before the conference.</p>
                    </div>

                </div>
            </li>
        </ul>
    </div>
</div>


<?php get_footer(); ?>






