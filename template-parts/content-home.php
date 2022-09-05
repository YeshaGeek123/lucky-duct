<!-- Start of Main Banner -->
<section class="main-banner bg-img" style="background-image: url('<?php the_field('home_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto text-center">
                <div class="main-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('home_banner_title'); ?></h1>
                    <h3 class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('home_banner_sub_title'); ?></h3>
                    <?php
                    $phone = get_field('phone_number','option');
                    $val = array("(", ")", " ", "-", ".");
                    $replace = array("", "", "", "", "");
                    $phone_link = str_replace($val, $replace, $phone);
                    ?>
                    <div class="banner-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
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
<section class="about-us-sec" id="about-us">
    <div class="container">
        <div class="about-wp">
            <div class="row align-items-center">
                <div class="col-lg-5 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img width="754" height="505" src="<?php the_field('home_about_us_image'); ?>" alt="About Image">
                    </div>
                </div>
                <div class="col-lg-7 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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
<div class="our-service-sec" id="services">
    <section class="service-title-sec bg-img" style="background-image: url('<?php the_field('home_our_service_background_image'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-title-content white-text">
                        <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('home_our_service_main_title'); ?></h2>
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
                                <div class="col-lg-7 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <div class="service-content">
                                        <div class="service-icon">
                                            <img width="50" height="50" src="<?php the_sub_field('services_repeater_icon'); ?>" alt="<?php the_sub_field('services_repeater_title'); ?>">
                                        </div>
                                        <h3 class="h3-title"><?php the_sub_field('services_repeater_title'); ?></h3>
                                        <?php the_sub_field('services_repeater_content'); ?>
                                        <a href="<?php the_sub_field('services_repeater_page_link'); ?>" title="<?php the_sub_field('services_repeater_title'); ?>, Learn More" class="sec-btn sm-btn">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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
                                <div class="col-lg-5 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <div class="service-img-wp">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('services_repeater_image');  ?>');"></div>
                                    </div>
                                </div>
                                <div class="col-lg-7 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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
            <div class="col-lg-6 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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
            <div class="col-lg-6 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
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
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('home_gallery_main_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row gallery-slider wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
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

<!-- Start of Helpful -->
<section class="helpful-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="helpful-content">
                    <div class="text wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <span class="icon">
                            <img width="26" height="26" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/helpful-icon.svg" alt="Helpful">
                        </span>
                        <h3 class="h3-title"><?php the_field('home_helpful_information_title'); ?></h3>
                        <p><?php the_field('home_helpful_information_sub_title'); ?></p>
                    </div>
                    <div class="help-btn wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <a href="<?php the_field('home_helpful_information_page_link'); ?>" title="<?php the_field('home_helpful_information_title'); ?>, Learn More" class="sec-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Helpful -->

<!-- Start of Testimonial -->
<section class="testimonial-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('testimonial_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row testimonial-slider wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <?php
           
            $testimonial_list = get_posts(array(
                'post_type' => 'testimonials',
                'post_status' => 'publish',
                'order'          => 'ASC',
                'posts_per_page' => -1
            ));
            
            if ($testimonial_list) :
                foreach ($testimonial_list as $testimonial) :
                    $post_id = $testimonial->ID;
                ?>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <span class="icon"><img width="84" height="72" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/quote-icon.svg" alt="Quote"></span>
                            <div class="testimonial-text" data-simplebar="init">
                                <p>
                                    <?php echo $testimonial->post_content; ?>                                
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <h5 class="testimonial-name"><?php echo $testimonial->post_title; ?> , <span><?php the_field('social_media',$post_id); ?></span></h5>
                                <ul class="star">
                                    <li><img width="15" height="14" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/star.svg" alt="Star"></li>
                                    <li><img width="15" height="14" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/star.svg" alt="Star"></li>
                                    <li><img width="15" height="14" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/star.svg" alt="Star"></li>
                                    <li><img width="15" height="14" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/star.svg" alt="Star"></li>
                                    <li><img width="15" height="14" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/star.svg" alt="Star"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
            endif;
            ?>
           
           
        </div>
    </div>
</section>
<!-- End of Testimonial -->