<!-- Start of Service -->
<section class="main-banner inner-banner bg-img" style="background-image: url('<?php the_field('service_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center">
                    <h1 class="h1-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Service -->

<!-- Start of Main Service -->
<div class="main-service-sec">
    <div class="service-row odd">
        <div class="container">
            <div class="service-wp">
                <div class="row">
                    <div class="col-lg-7 order-2 order-lg-1">
                        <div class="service-content">
                            <?php the_field('service_information_content'); ?>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="service-img-wp">
                            <div class="service-img bg-img" style="background-image: url('<?php the_field('service_information_image'); ?>');"></div>
                            <div class="service-icon">
                                <img width="85" height="85" src="<?php the_field('service_information_icon'); ?>" alt="Air Duct Cleaning">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $service_benefits_and_offers = get_field('service_benefits_and_offers');
    if(!empty($service_benefits_and_offers)):
        if(have_rows('service_benefits_and_offers')):
            while(have_rows('service_benefits_and_offers')): the_row();
                    //$benefits_and_offers_image = get_sub_field('service_benefits_and_offers_image');
                    $benefits_and_offers_main_title = get_sub_field('service_benefits_and_offers_main_title');
                    $benefits_and_offers_description = get_sub_field('service_benefits_and_offers_description');
                    $benefits_and_offers_title = get_sub_field('service_benefits_and_offers_title');
                    $benefits_and_offers_content = get_sub_field('service_benefits_and_offers_content');
                    $benefits_and_offers_list = get_sub_field('service_benefits_and_offers_list');
                    $benefits_and_offers_information = get_sub_field('service_benefits_and_offers_information');
                if(get_row_index() % 2 != 0):  
    ?>
                    <div class="service-row even">
                        <div class="container">
                            <div class="service-wp">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="service-img-wp">
                                            <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_benefits_and_offers_image'); ?>')"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="service-content">
                                            <!-- Main Title -->
                                            <?php
                                            if(!empty($benefits_and_offers_main_title)):
                                            ?>
                                                <h3 class="h3-title"><?php echo $benefits_and_offers_main_title; ?></h3>
                                            <?php
                                            endif;
                                            ?>
                                            <!-- Description -->
                                            <?php
                                            if(!empty($benefits_and_offers_description)):
                                            ?>
                                                <?php echo $benefits_and_offers_description; ?>
                                            <?php
                                            endif;
                                            ?>
                                             <!-- Title -->
                                            <?php
                                            if(!empty($benefits_and_offers_title)):
                                            ?>
                                                <h4 class="h4-title"><?php echo $benefits_and_offers_title; ?></h4>
                                            <?php
                                            endif;
                                            ?>
                                            <!-- content -->
                                            <?php
                                            if(!empty($benefits_and_offers_content)):
                                            ?>
                                                <?php echo $benefits_and_offers_content; ?>
                                            <?php
                                            endif;
                                            ?>
                                           <!-- List -->
                                           <?php
                                           if(!empty($benefits_and_offers_list)):
                                           ?>
                                            <ul class="list">
                                                <?php
                                                if(have_rows('service_benefits_and_offers_list')):
                                                    while(have_rows('service_benefits_and_offers_list')): the_row();
                                                ?>
                                                    <li><?php the_sub_field('service_benefits_and_offers_list_name');  ?></li>
                                                <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </ul>
                                            <?php
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else: ?> 
                    <div class="service-row odd">
                        <div class="container">
                            <div class="service-wp">
                                <div class="row">
                                    <div class="col-lg-7 order-2 order-lg-1">
                                        <div class="service-content">
                                           <!-- Main Title -->
                                            <?php
                                            if(!empty($benefits_and_offers_main_title)):
                                            ?>
                                                <h3 class="h3-title"><?php echo $benefits_and_offers_main_title; ?></h3>
                                            <?php
                                            endif;
                                            ?>
                                            <!-- Description -->
                                            <?php
                                            if(!empty($benefits_and_offers_description)):
                                            ?>
                                                <?php echo $benefits_and_offers_description; ?>
                                            <?php
                                            endif;
                                            ?>
                                            <!-- Title -->
                                            <?php
                                            if(!empty($benefits_and_offers_title)):
                                            ?>
                                            <h3 class="h3-title"><?php echo $benefits_and_offers_title; ?></h3>
                                            <?php
                                            endif;
                                            ?>
                                            <!-- content -->
                                            <?php
                                            if(!empty($benefits_and_offers_content)):
                                            ?>
                                                <?php echo $benefits_and_offers_content; ?>
                                            <?php
                                            endif;
                                            ?>
                                            <!-- List -->
                                           <?php
                                           if(!empty($benefits_and_offers_list)):
                                           ?>
                                            <ul class="list">
                                                <?php
                                                if(have_rows('service_benefits_and_offers_list')):
                                                    while(have_rows('service_benefits_and_offers_list')): the_row();
                                                ?>
                                                    <li><?php the_sub_field('service_benefits_and_offers_list_name');  ?></li>
                                                <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </ul>
                                            <?php
                                            endif;
                                            ?>
                                            <span class="call-details">Call us today for more details!</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 order-1 order-lg-2">
                                        <div class="service-img-wp">
                                            <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_benefits_and_offers_image'); ?>')"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    <?php
                endif;
            endwhile;
        endif;
    endif;
    ?>
</div>
<!-- End of Main Service -->

<!-- Start of Filter -->
<section class="filter-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <h3 class="h3-title">Here are the filters you can choose from:</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="filter-content">
                    <span class="icon"><img width="110" height="110" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/poly.svg" alt="Poly"></span>
                    <h4 class="h4-title">Poly (fiberglass)</h4>
                    <p>
                        Did you know that a typical fiberglass disposable filter is effective at catching only 7% of particulate matter passing through the air stream at 10 Microns? A lot of household dust that circulates in your ventilation system is commonly smaller than 10 Microns. Without an in-the-field consultation/testing, we are confident to inform our valued customers that they can probably do better than a Poly filter, guaranteed!
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="filter-content">
                    <span class="icon"><img width="110" height="110" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/pleated.svg" alt="Pleated"></span>
                    <h4 class="h4-title">Pleated</h4>
                    <p>
                        Very often these filters create a lot of problems with many heating, ventilation, and air conditioning systems. Sometimes they may be viable to use, however more commonly on many systems in most homes they create more problems than not. Only by testing would anybody know.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="filter-content">
                    <span class="icon"><img width="110" height="110" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/electrostatic.svg" alt="Electrostatic"></span>
                    <h4 class="h4-title">Electrostatic</h4>
                    <p>
                        These furnace filters can cause a lot of problems with the performance of your heating and cooling systems, especially if they are not constantly cleaned every month, which most people won't do. Sometimes the pressure drop created by these filters is so severe that even a new one fresh out of the wrapping causes problems. Only through testing would anybody know. Thank goodness you can count on a Lucky Duct service technician during a scheduled air duct cleaning to let you know!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Filter -->