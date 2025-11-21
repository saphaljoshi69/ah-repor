<?php
if ( get_row_layout() == 'testimonials_section_with_right_side_alignment' ):

    // main content
    $section_class              = strtolower( str_replace('_', '-', get_row_layout()));
    $section_title              = get_sub_field( 'section_heading' );
    $testimonials               = get_sub_field( 'testimonials' );

    // section Settings
    $section_padding            = get_sub_field( 'section_padding');
    $section_background         = get_sub_field( 'section_background' );
    $col_background_image       = get_sub_field( 'column_background_image' );
    $col_background_color       = get_sub_field( 'column_background_color' );

    if ( $section_padding == 'Default' ){
        $padding_cls    = '';
    } elseif ( $section_padding == 'Remove Top Padding' ) {
        $padding_cls    = ' pt-0';
    } else {
        $padding_cls    = ' pb-0';
    }

    if ( $section_background == 'Muted' ) {
        $bg_class       = 'muted-background';
    } else {
        $bg_class       = 'default-background';
    }
    ?>

    <section class="section-padding <?= $section_class; ?> <?= $padding_cls; ?> <?= $bg_class; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-12 my-auto text-md-left text-center">
                    <div class="section-content">
                        <h2 class="text-primary heading-700"><?= esc_html($section_title); ?> </h2>
                    </div>
                    <div class="testimonial-slide-nav mt-5">
                        <a class="prev-btn mr-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/angle-left-next-icon.svg" alt="Previous" style="width:14px; height:25px;"></a>
                        <a class="next-btn ml-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/angle-right-next-icon.svg" alt="Next" style="width:14px; height:25px;"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-12 testimonial-column">
                    <div class="position-cover-bg" style="<? if ($col_background_image){ ?>
                        background-image:url(<?= esc_url($col_background_image['url']); ?>);
                        background-size:cover;
                        background-repeat: no-repeat;
                        background-position: bottom right;
                    <?php } else{ ?>
                        background: <?= esc_html($col_background_color); ?>;
                    <?php }
                    ?>"></div>
                    <div class="main-slider-items d-flex">
                        <?php if ($testimonials):
                        foreach ($testimonials as $items):
                            $title   = $items['name'];
                            $meta    = $items['meta_text'];
                            $image   = $items['image'];
                            $content = $items['description'];
                        ?>
                        <div class="testimonial-item p-4 flex-fill">
                            <div class="profile-wrapper d-flex">
                                <?php if ($image): ?>
                                <div class="image">
                                    <img class="img-fluid rounded-circle mr-4" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" style="width:54px; height:54px;">
                                </div>
                                <?php endif; ?>

                                <div class="intro">
                                    <?php if ($title): ?>
                                        <h6><?= $title; ?></h6>
                                    <?php endif; ?>

                                    <?php if ($meta): ?>
                                        <div class="meta-text"><?= $meta; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if ($content): ?>
                            <div class="testimonial-content mt-3">
                                <?= $content; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endforeach;
                        endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>  
<?php endif; ?>