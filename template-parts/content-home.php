<!-- Start of Main Banner -->
<section class="main-banner bg-img" style="background-image: url('<?php the_field('home_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto text-center">
                <div class="main-banner-content">
                    <h1 class="h1-title"><?php the_field('home_banner_title'); ?></h1>
                    <h3><?php the_field('home_banner_sub_title'); ?></h3>
                    <?php
                    $phone = get_field('phone_number','option');
                    $val = array("(", ")", " ", "-", ".");
                    $replace = array("", "", "", "", "");
                    $phone_link = str_replace($val, $replace, $phone);
                    ?>
                    <div class="banner-btn">
                        <a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone; ?>" class="sec-btn">call<span class="callus"><?php echo $phone; ?></span></a>
                        <a href="<?php the_permalink(28); ?>" title="Contact Us" class="sec-btn outline-btn">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Main Banner -->

<!-- Start of About Us -->
<section class="about-us-sec">
    <div class="container">
        <div class="about-wp">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-img">
                        <img width="754" height="505" src="<?php the_field('home_about_us_image'); ?>" alt="About Image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">
                        <h2 class="h2-title"><?php the_field('home_about_us_title'); ?></h2>
                        <div class="about-text">
                            <?php the_field('home_about_us_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Us -->

<!-- Start of Our Services -->
<div class="our-service-sec">
    <section class="service-title-sec bg-img" style="background-image: url('<?php the_field('home_our_service_background_image'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="service-title-content white-text">
                        <h2 class="h2-title"><?php the_field('home_our_service_main_title'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="service-row-wp">
        <?php
        if(have_rows('home_our_service_services_repeater')):
            while(have_rows('home_our_service_services_repeater')): the_row();
                if(get_row_index() % 2 != 0):
        ?>
                <div class="service-row odd">
                    <div class="container">
                        <div class="service-wp">
                            <div class="row">
                                <div class="col-lg-7 order-2 order-lg-1">
                                    <div class="service-content">
                                        <div class="service-icon">
                                            <img width="50" height="50" src="<?php the_sub_field('services_repeater_icon'); ?>" alt="<?php the_sub_field('services_repeater_title'); ?>">
                                        </div>
                                        <h3 class="h3-title"><?php the_sub_field('services_repeater_title'); ?></h3>
                                        <?php the_sub_field('services_repeater_content'); ?>
                                        <a href="<?php the_sub_field('services_repeater_page_link'); ?>" title="<?php the_sub_field('services_repeater_title'); ?>, Learn More" class="sec-btn sm-btn">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 order-1 order-lg-2">
                                    <div class="service-img-wp">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('services_repeater_image'); ?>');"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="service-row even">
                    <div class="container">
                        <div class="service-wp">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="service-img-wp">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('services_repeater_image');  ?>');"></div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="service-content">
                                        <div class="service-icon">
                                            <img width="50" height="50" src="<?php the_sub_field('services_repeater_icon');  ?>" alt="<?php the_sub_field('services_repeater_title'); ?>">
                                        </div>
                                        <h3 class="h3-title"><?php the_sub_field('services_repeater_title'); ?></h3>
                                        <?php the_sub_field('services_repeater_content'); ?>
                                        <a href="<?php the_sub_field('services_repeater_page_link'); ?>" title="<?php the_sub_field('services_repeater_title'); ?>, Learn More" class="sec-btn sm-btn">Learn More</a>
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
        ?>

    </div>
</div>
<!-- End of Our Services -->

<!-- Start of Lucky Bucks -->
<section class="lucky-bucks-sec">
    <img width="361" height="347" src="<?php the_field('home_lucky_bucks_background_image'); ?>" alt="Leaf" class="img">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="lucky-buck-content white-text">
                    <h2 class="h2-title"><?php the_field('home_lucky_bucks_main_title'); ?></h2>
                   <p><?php the_field('home_lucky_bucks_sub_title'); ?></p>
                    <div class="coupon-text">
                        <h3 class="h3-title"><?php the_field('home_lucky_bucks_title'); ?></h3>
                       <?php the_field('home_lucky_bucks_content'); ?>
                    </div>
                    <a href="javascript:void(0);" title="View Lucky Bucks" class="sec-btn white-btn">View Lucky Bucks</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="lucky-buck-img-wp">
                    <img width="461" height="232" src="<?php the_field('home_lucky_bucks_image'); ?>" alt="Coupon" class="img-1">
                    <img width="436" height="218" src="<?php echo home_url(); ?>/wp-content/uploads/2022/09/coupon-2.svg" alt="Coupon" class="img-2">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Lucky Bucks -->

<!-- Start of Gallery -->
<section class="gallery-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2 class="h2-title"><?php the_field('home_gallery_main_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row gallery-slider">
            <?php
            $gallery_image = get_field('home_gallery_gallery_images');
            if (isset($gallery_image) && !empty($gallery_image)) :
                $counter = 1;
                foreach ($gallery_image as $key => $image) :  
            ?>
                    <div class="col-lg-4">
                        <a href="<?php echo $image['url']; ?>" class="gallery-img-wp" data-fancybox="gallery" title="Gallery Image <?php echo $counter++; ?>">
                            <div class="gallery-img bg-img" style="background-image: url('<?php echo $image['url'];  ?>');"></div>
                        </a>
                    </div>
            <?php
                endforeach;
            endif; 
            ?>
        </div>
    </div>
</section>
<!-- End of Gallery -->