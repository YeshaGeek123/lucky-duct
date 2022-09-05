<!-- Start of Inner Banner -->
<section class="main-banner inner-banner bg-img" style="background-image: url('<?php the_field('faq_banner_image'); ?>');">
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
<!-- End of Inner Banner -->

<!-- Start of Faq -->
<section class="faq-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-content-wp accordion">
                    <?php
                    if(have_rows('frequently_asked_question')):
                        while(have_rows('frequently_asked_question')): the_row();
                    ?>
                        <h4 class="h4-title"><?php the_sub_field('frequently_asked_question_title');  ?></h4>
                        
                        <?php
                        if(have_rows('frequently_asked_question_list')):
                            while(have_rows('frequently_asked_question_list')): the_row();
                        ?>
                        <div class="faq-box">
                            <h3>
                                <?php the_sub_field('frequently_asked_question_ques'); ?>
                                <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                            </h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="faq-content">
                                        <div class="faq-text">
                                            <?php the_sub_field('frequently_asked_question_answer'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    <?php
                        endwhile;
                    endif;
                    ?>  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Faq -->