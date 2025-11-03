<?php

if ( get_row_layout() == 'insurance_hero_section' ) :

    $title = get_sub_field('main_title');
    $sub_title = get_sub_field('sub-title');
    $search_shortcode = get_sub_field('search_shortcode');
    $background_image = get_sub_field('background_image');
    
?>
<section class="insurance-hero-section vertical-align-middle" style="background-image:url('<?php echo esc_url($background_image['url']); ?>');">
            <div class="position-cover"></div>
            <div class="container">
                <h1 class="width-xlarge"><?php echo $title; ?></h1>
                <h5 class="width-xlarge"><?php echo $sub_title; ?></h5>
                <div class="search-agent mt-5 width-xlarge">
                <?php echo do_shortcode($search_shortcode); ?>
                </div>
                <?php
                if( have_rows('hero_data_grid') ): ?>
                <div class="row align-items-start width-xlarge mt-3">
                    <?php 
                    while ( have_rows('hero_data_grid') ): the_row();
                    $grid_img = get_sub_field('image');
                    $gird_title = get_sub_field('title');
                    $grid_content = get_sub_field('content');
                    ?>
                    <div class="col">
                        <div class="d-flex">
                        <?php if ($img) {
                            ?>
                            <div class="img"><img src="<?php echo esc_url($grid_img['url']); ?>" alt="<?php echo esc_attr($grid_img['alt']); ?>"></div>
                       <?php 
                        } ?>
                            <div class="h3"><?php echo esc_html($grid_title); ?></div>
                        </div>
                        <p class=""><?php echo esc_html($grid_content); ?></p>
                    </div>
                    <?php endwhile;
                    ?>
                </div>
            </div>
        </section>
        <?php
        endif;
        ?>