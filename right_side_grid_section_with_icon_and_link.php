<?php

if ( get_row_layout() == 'right_side_grid_section_with_icon_and_link' ):

    // Main Content
    $section_class              = strtolower( str_replace('_', '-', get_row_layout()));
    $section_meta_text          = get_sub_field( 'meta_text' );
    $section_heading            = get_sub_field( 'section_heading' );
    $section_cta_link           = get_sub_field( 'cta_link' );
    $section_btn_text           = get_sub_field( 'button_text' );
    $right_grid_content         = get_sub_field( 'grid_content');

    // Section Styling
    $section_padding            = get_sub_field( 'section_padding' );
    $section_background         = get_sub_field( 'section_background' );
    $section_background_image   = get_sub_field( 'background_image' );
    $overlay_color              = get_sub_field( 'overlay_color' );

    if ( $section_padding == 'Default' ) {
        $padding_class    = '';
    } elseif ( $section_padding == 'Remove Top Padding') {
        $padding_class      = ' pt-0';
    } else {
        $padding_class      = ' pb-0';
    }

    if ( $section_background == 'Muted' ){
        $bg_class            =  'muted-background';
    } else {
        $bg_class           =  'default-background';
    }
    ?>

<section class="section-padding <?= $section_class; ?> <?= $bg_class; ?> <?= $padding_class; ?>">
        <div class="container">
            <div class="row g-0 d-flex align-items-stretch">
                <div class="col-lg-4 col-sm-12 p-0 d-flex">
                    <div class="overlay-content flex-fill" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>); background-repeat:no-repeat; background-size:cover;">
                        <div class="overlay" style="background: <?= $overlay_color; ?>;"></div>
                        <div class="overlay-content-wrapper">
                        <?php if ( $section_meta_text ) :?>
                        <div class="meta-text text-light mb-5">
                            <?= $section_meta_text; ?>
                        </div>
                        <?php endif; 
                        if ( $section_heading ) : 
                        ?>
                        <div class="section-heading">
                             <h2 class="text-light heading-700" style="line-height:1.6;"><?= $section_heading; ?></h2>
                        </div>
                        <?php endif; 
                        if ( $section_cta_link ) :
                        ?>
                        <div class="cta-link mt-5">
                            <a href="<?= $section_cta_link; ?>" class="muted-btn"><?= $section_btn_text; ?></a>
                        </div>
                        <?php endif; ?>
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 right-column d-flex">
                    <?php if ( $right_grid_content ) :
                            ?>
                    <div class="row right-content flex-fill">
                        <?php foreach ( $right_grid_content as $row ):
                            $img        = $row['imageicon'];
                            $title      = $row['title'];
                            $link       = $row['link'];
                            $link_text  = $row['link_text'];
                        ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mt-3 mb-3">
                            <div class="grid-card text-center">
                                <?php if ( $img ) :?>
                                    <img src="<?php echo esc_url($img['url']);?>" alt="<?php echo esc_attr($img['alt']);?>" style="height:54px; width:54px; border-radius:6px; object-fit:cover;">
                                    <?php endif;
                                    if ( $title ) :
                                    ?>
                                    <h6 class="text-primary mt-3 heading-600"><?= esc_html($title); ?></h6>
                                    <?php endif; 
                                    ?>
                                    <?php
                                    if ( $link ): ?>
                                        <a href="<?= $link; ?>" class="text-decoration-none text-primary" style="font-size:14px;"><?= esc_html($link_text); ?></a>
                                        <?php endif; ?>                             
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</section>
<?php
endif; ?>