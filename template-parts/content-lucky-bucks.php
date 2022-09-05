<!-- Start of Inner Banner -->
<section class="main-banner inner-banner bg-img" style="background-image: url('<?php the_field('lucky_bucks_banner_image'); ?>');">
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

<!-- Start of Lucky Bucks -->
<div class="lucky-bucks-sec main-lucky-sec">
    <img width="360" height="347" src="<?php the_field('coupons_background_image'); ?>" alt="Leaf Big" class="img">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center white-text">
                    <h3 class="h3-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('coupons_title'); ?></h3>
                </div>
            </div>
        </div>
        <div class="row wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <?php
            if(have_rows('coupons')):
                while(have_rows('coupons')): the_row();
               $image = get_sub_field('coupons_image');
               $pdf_file = get_sub_field('coupons_pdf_image');   
            ?>
                        <div class="col-lg-4">
                            <div class="lucky-buck-content text-center">
                                <div class="img-wp">
                                    <a href="<?php echo $pdf_file; ?>"  title="Pdf File">
                                        <img width="504" height="210" src="<?php the_sub_field('coupons_image'); ?>" alt="Lucky Buck">
                                    </a>
                                </div>
                                <div class="lucky-btn">
                                    <a href="<?php echo $pdf_file; ?>" target="_blank" data-url=<?php echo $image; ?> title="Coupons" class="sec-btn yellow-btn print-coupons" >Print</a>
                                </div>
                            </div>
                        </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- End of Lucky Bucks -->