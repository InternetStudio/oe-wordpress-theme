
<!-- Start of content wrapper -->
<div id="cr3ativconference_contentwrapper">

    <!-- Start of content wrapper -->
    <div class="cr3ativconference_content_wrapper">

        <?php

        add_filter('posts_orderby','cr3ativoderby2');
        $wp_query = new WP_Query(
            array(
                'post_type' => 'cr3ativconference',
                'cr3ativconfcategory'=>$term,
                'cr3ativconfgroup'=>$group,
                'posts_per_page' => 99999999,
                'order' => 'ASC',
                'meta_key' => 'cr3ativconfmeetingdate',
                'meta_query' => array(
                    array(
                        'key' => 'cr3ativconfmeetingdate',
                    ),
                    array(
                        'key' => 'cr3ativ_confstarttime',
                    ),
                ),
            )
        );
        remove_filter('posts_orderby','cr3ativoderby2');

        $sessiondate = '';
        $timeslot = '';
        while (have_posts()) : the_post(); ?>

            <?php
            $cr3ativconfmeetingdate = get_post_meta($post->ID, 'cr3ativconfmeetingdate', $single = true);
            $confstarttime = get_post_meta($post->ID, 'cr3ativ_confstarttime', $single = true);
            $confendtime = get_post_meta($post->ID, 'cr3ativ_confendtime', $single = true);
            $confdisplaystarttime = get_post_meta($post->ID, 'cr3ativ_confdisplaystarttime', $single = true);
            $confdisplayendtime = get_post_meta($post->ID, 'cr3ativ_confdisplayendtime', $single = true);
            $conflocation = get_post_meta($post->ID, 'cr3ativ_conflocation', $single = true);
            $cr3ativ_highlight = get_post_meta($post->ID, 'cr3ativ_highlight', $single = true);
            ?>

            <?php //if( $confDay == getSessionDay($cr3ativconfmeetingdate)): ?>

                <?php if($timeslot != displayTimeSlots($confstarttime)) {
                    //print(displayTimeSlots($confstarttime));
                } else {
                    //print ('<hr />');
                }
                $timeslot = displayTimeSlots($confstarttime);

                ?>

                <?php if ($cr3ativ_highlight != ('')){ ?>



                <?php } else { ?>

                    <?php $dateformat = get_option('date_format'); ?>
                    <div class="row">
                        <!-- Start of conference time -->
                        <div class="conference-time one-sixth">
                            <?php if ($confdisplaystarttime != ('')) { ?>

                                <?php if ($confdisplaystarttime != ('')) { echo ($confdisplaystarttime); }
                                if ($confdisplayendtime != ('')){ ?> &nbsp;-&nbsp; <?php echo ($confdisplayendtime); } ?>

                            <?php } else { ?>

                                <?php if ($confstarttime != ('')){  echo ($confstarttime); }
                                if ($confendtime != ('')){ ?> &nbsp;-&nbsp; <?php echo ($confendtime); } ?>

                            <?php } ?>
                        </div>
                        <!-- End of conference time -->

                        <?php if ($sessiondate != (date_i18n($dateformat, $cr3ativconfmeetingdate))){ ?>
                            <div class="five-sixths">
                                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'cr3at_conf' ); ?>&nbsp;<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                <p class="sessioncats"><?php echo custom_taxonomies_terms_links(); ?></p><br />
                            </div>
                        <?php } else { ?>
                            <?php if ( has_post_thumbnail() ) {  ?>
                                <!-- Start of session featured image -->
                                <div class="session_featured_image">
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'cr3at_conf' ); ?>&nbsp;<?php the_title_attribute(); ?>"><?php the_post_thumbnail(''); ?></a>
                                </div><!-- End of session featured image -->
                            <?php } ?>
                            <h2 class="meeting_date"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'cr3at_conf' ); ?>&nbsp;<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php echo custom_taxonomies_terms_links(); ?></p>
                        <?php } ?>
                    </div>
                 <?php } ?>
            <?php //endif; ?>
        <?php endwhile; ?>

    </div><!-- End of content wrapper -->

    <!-- Clear Fix --><div class="cr3ativconference_clear"></div>

</div><!-- End of content wrapper -->
           