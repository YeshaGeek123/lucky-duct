<!-- Start of Inner Banner -->
<section class="main-banner inner-banner bg-img" style="background-image: url('<?php the_field('contact_banner_image'); ?>');">
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
<!-- End of Inner Banner -->

<!-- Start of Contact -->
<section class="main-contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="contact-content">
                    <h3 class="h3-title"><?php the_field('contact_title'); ?></h3>
                    <?php the_field('contact_content'); ?>
                    <?php
							$phone = get_field('phone_number','option');
							$val = array("(", ")", " ", "-", ".");
							$replace = array("", "", "", "", "");
							$phone_link = str_replace($val, $replace, $phone);
                    	?>
                    <div class="social-link">
                        <ul>
                            <li>
                                <span class="icon"><img width="16" height="11" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/mail.svg" alt="Mail"></span>
                                <a href="mailto:<?php the_field('email', 'options'); ?>" title="<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
                            </li>
                            <li>
                                <a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>" class="phone"><span class="callus"><?php echo $phone; ?></span></a>
                            </li>
                            <li>
                                <span class="icon"><img width="12" height="17" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/map.svg" alt="Mail"></span>
                                <a href="<?php the_field('address_link', 'options'); ?>" title="<?php the_field('address', 'options'); ?>" target="_blank"><?php the_field('address', 'options'); ?></a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="<?php the_field('facebook_link', 'options'); ?>" target="_blank" title="Follow Us On Facebook"><i class="fa fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="<?php the_field('twitter_link', 'options'); ?>" target="_blank" title="Follow Us On Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="contact-form">
                    <h3 class="h3-title">Contact Us</h3>
                    <?php
                    echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Contact -->