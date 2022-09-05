<!-- Start of Service -->
<section class="main-banner inner-banner bg-img" style="background-image: url('<?php the_field('resources_banner_image'); ?>');">
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

<!-- Start of Resources -->
<section class="resources-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="resource-content">
                    <h3 class="h3-title"><?php the_field('resources_information_title'); ?></h3>
                    <?php the_field('resources_information_content'); ?>
                    <?php
                    if(have_rows('resources_information_points')):
                        while(have_rows('resources_information_points')): the_row();
                    ?>
                    <h4 class="h4-title"><?php the_sub_field('resources_information_points_title'); ?></h4>
                    <?php the_sub_field('resources_information_points_content'); ?>
                    <?php
                        endwhile;
                    endif;
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Resources -->