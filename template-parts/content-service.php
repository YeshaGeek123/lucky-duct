<!-- Start of Service -->
<section class="main-banner inner-banner bg-img" style="background-image: url('<?php the_field('service_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content text-center">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_title(); ?></h1>
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
                    <div class="col-lg-7 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <div class="service-content">
                            <?php the_field('service_information_content'); ?>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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
                    $benefits_and_offers_main_title = get_sub_field('service_benefits_and_offers_main_title');
                    $benefits_and_offers_description = get_sub_field('service_benefits_and_offers_description');
                    $benefits_and_offers_title = get_sub_field('service_benefits_and_offers_title');
                    $benefits_and_offers_content = get_sub_field('service_benefits_and_offers_content');
                    $benefits_and_offers_list = get_sub_field('service_benefits_and_offers_list');
                    $benefits_and_offers_information = get_sub_field('service_benefits_and_offers_information');
                    $benefits_and_offers_contact_details = get_sub_field('service_benefits_and_offers_contact_details');
                if(get_row_index() % 2 != 0):  
    ?>
                    <div class="service-row even">
                        <div class="container">
                            <div class="service-wp">
                                <div class="row">
                                    <div class="col-lg-5 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                        <div class="service-img-wp">
                                            <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_benefits_and_offers_image'); ?>')"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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
                                    <div class="col-lg-7 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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
                                            
                                            <?php   
                                            if(!empty($benefits_and_offers_contact_details)):
                                            ?>
                                            <a href="<?php the_permalink(28); ?>" class="call-details"><?php echo $benefits_and_offers_contact_details; ?></a>
                                            <?php
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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

<?php
if(is_page(16)):
?>
<!-- Start of Filter -->
<section class="filter-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <h3 class="h3-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('filter_selection_main_title'); ?></h3>
                </div>
            </div>
        </div>
        <div class="row wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <?php
            if(have_rows('filter_selection_option')):
                while(have_rows('filter_selection_option')): the_row();
            ?>
            <div class="col-lg-4">
                <div class="filter-content">
                    <div class="icon">
                        <div class="bg-img" style="background-image: url('<?php the_sub_field('filter_selection_option_image'); ?>');"></div>
                    </div>
                    <h4 class="h4-title"><?php the_sub_field('filter_selection_option_name'); ?></h4>
                    <?php the_sub_field('filter_selection_option_content'); ?>
                </div>
            </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<!-- End of Filter -->
<?php
endif;
?>