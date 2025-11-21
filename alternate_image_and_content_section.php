<?php

if ( get_row_layout() == 'alternate_image_and_content_section' ):

    // Main content
    $section_class      = strtolower(str_replace('_', '-', get_row_layout()));
    $section_heading    = get_sub_field('section_heading');
    $section_content    = get_sub_field('section_content');
    $grid_content       = get_sub_field('grid_rows'); 
    

    // Section settings
    $section_padding    = get_sub_field('section_padding');
    $section_background = get_sub_field('section_background'); 


    // Padding class
    if ( $section_padding == 'Default' ) {
        $sec_padding = '';
    } elseif ( $section_padding == 'Remove Top Padding' ) {
        $sec_padding = ' pt-0';
    } else {
        $sec_padding = ' pb-0';
    }

    // Background class
    if ( $section_background == 'Muted' ) {
        $bg_class = 'muted-background';
    } else {
        $bg_class = 'default-background';
    }
?>

<section class="<?php echo esc_attr($section_class); ?> section-padding <?= $sec_padding; ?> <?= $bg_class; ?>">
    <div class="container">

        <!-- Section Heading -->
        <div class="section_content text-center mb-5">
            <h2 class="text-primary heading-700"><?= $section_heading; ?></h2>
            <div class="section-content text-primary">
                <?= $section_content; ?>
            </div>
        </div>

        <!-- Grid Rows -->
        <?php if ( $grid_content ) : ?>
            <?php foreach ( $grid_content as $rows ) : 

                
                $is_image_first = $rows['is_first_order'];
                $image          = $rows['image'];
                $content_row    = $rows['content_row'];


                if ($is_image_first){
                    $order_cls      = '';
                    $padding_cls    = ' pl-lg-5';
                } else {
                    $order_cls      = ' order-md-1';
                    $padding_cls    = ' pr-lg-5';
                }
            ?>
            
            <div class="row mb-5">


                <!-- CONTENT COLUMN -->
                <?php if ( $content_row ) : ?>
                <div class="col-md-6 d-flex align-items-stretch 
                <?= $order_cls; ?> <?= $padding_cls; ?>">
                    <div class="content_wrapper">

                        <?php foreach ( $content_row as $r_items ) : 
                            $r_title   = $r_items['heading'];
                            $r_content = $r_items['content'];
                        ?>

                        <div class="content-row mt-3">
                            <h5 class="text-primary"><?= $r_title; ?></h5>
                            <div class="column-content text-primary">
                                <?= $r_content; ?>
                            </div>
                        </div>

                        <?php endforeach; ?>

                    </div>
                </div>
                <?php endif; ?>

                
                <!-- IMAGE COLUMN -->
                <?php if ( $image ) : ?>
                <div class="col-md-6 d-flex align-items-stretch <?= $order_cls; ?> <?= $padding_cls; ?>">

                    <div class="img_wrapper w-100">
                        <img class="w-100 h-100" 
                             src="<?= esc_url($image['url']); ?>" 
                             alt="<?= esc_attr($image['alt']); ?>">
                    </div>
                </div>
                <?php endif; ?>

            </div>

            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</section>

<?php endif; ?>
