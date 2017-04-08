<?php
/**
 * Template Name: Chicago Schedule
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
            'Friday' => array('Open Houses','Featured', 'After Hours'),
            'Saturday' => array('Open Platform', 'All Day', 'Morning', 'Lunchtime', 'Afternoon', 'Evening', 'Featured', 'After Hours'),
            'Sunday' => array('Open Platform', 'All Day', 'Morning', 'Lunchtime', 'Afternoon', 'Evening', 'Featured', 'After Hours'),
        )
        ?>
        <ul class="accordion-tabs">
            <?php foreach(array_keys($conferenceDays) as $confDay): ?>
                <li class="tab-header-and-content">
                    <a href="javascript:void(0)" class="tab-link"><?php print ($confDay); ?></a>
                    <div class="tab-content">
                        <?php
                            if($confDay == 'Saturday' OR $confDay == 'Sunday') {
                                print('
                                    <p>OE 2017 opens at 9am Saturday and Sunday, with panels, workshops, presentations, conversations, trainings and projects happening throughout the day. After the day’s sessions have wrapped, please join us for the evening’s Featured Presentation and an after-hours celebration.</p>
                                 ');
                            }

                        ?>
                        <div class="expander">
                            <?php foreach($conferenceDays[$confDay] as $group): ?>
                                <div class="js-expander-trigger expander-trigger expander-hidden"><span class="group-title"><?php print $group; ?>&nbsp;</span></div>
                                <div id="js-expander-content" class="expander-content">
<!--                                    --><?php //if ($group == "Pre-conference Intensives") {
//                                        print('<p>Pre-conference programming is planned and hosted by select OE local partners.</p>');
//                                    } else if ($group == "Open Houses") {
//                                        print('<p>Open House Tours are programmed by local partners and will highlight the work being done by local artists and organizations in the Bay Area through a variety of dynamic off-site programming.</p>');
//                                    } else if ($group == "OMCA Friday Night") {
//                                        print('<p>Every Friday night OMCA hosts a family-friendly take on a festive night market, featuring live music, food trucks, local beer and wine, and more! On April 29th "Friday Nights @ OMCA" will feature projects by OE 2016 presenters, and serve as the kick-off event for the conference.</p>');
//                                    }
//                                    ?>
                                    <?php include( locate_template( 'taxonomy-cr3ativconfcategory-include2017.php' ) ); ?>
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
                        <p>When you arrive at OE 2017 make your first stop OEHQ! There you’ll find all of the necessary conference materials, including the printed program and your conference name tag. Your name tag is required to attend Open Engagement sessions, including the Featured Presentations. Please keep your name tag with you at all times. OEHQ have the most up-to-date information about the conference throughout the weekend, including any schedule/location changes.  </p>
                        <p>
                            <strong>OEHQ 2017 Hours are:</strong> <br />
                        Friday, April 21st: 9:00am – 12:00pm<br />
                        Saturday, April 22nd: 9:00am – 5:00pm<br />
                        Sunday, April 23rd: 9:00am – 4:00pm
                        </p><p>
                            <strong>OEHQ 2017 will be located at: </strong><br />
                            <a href="https://goo.gl/maps/tL9pSpAjmJN2">University of Illinois at Chicago (UIC)<br />
                            Art and Exhibition Hall<br />
                            1st floor<br />
                            400 S Peoria<br />
                            Chicago, IL 60607</a>
                        </p>
                    </div>

                </div>
            </li>
        </ul>
    </div>
</div>


<?php get_footer(); ?>
