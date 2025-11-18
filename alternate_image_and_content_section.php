<?php

if (get_row_layout() == 'alternate_image_and_content_section' ):

    // Main content
    $section_class      = strtolower(str_replace('_', '-', get_row_layout()));
    $section_heading    = get_sub_field( 'section_heading' );
    $section_content    = get_sub_field( 'section_content' );
    $left_image         = get_sub_field( 'left_image' );
    $right_image        = get_sub_field( 'right_image' );
    $left_content       = get_sub_field( 'left_content' );
    $right_content      = get_sub_field( 'right_content' );

    // section settings
    $section_padding    = get_sub_field( 'section_padding' );
    $section_background = get_sub_field( 'section_padding' );

    if ( $section_padding == 'Default' ) {
         $sec_padding     = '';
    } elseif ( $section_padding == 'Remove Top Padding' ) {
         $sec_padding     = ' pt-0';    
    } else {
        $sec_padding      = ' pb-0';
    }

    if ( $section_background == 'Muted' ) {
        $bg_class            = 'muted-background';
    } else {
        $bg_class            = 'default-background';
    }
    ?>
    <section class="<?php echo esc_html($section_class); ?> section-padding <?= $sec_padding; ?> <?= $bg_class; ?>">
        <div class="container">
            <div class="section_content text-center">
                <h2 class="text-primary heading-700"><?= $section_heading; ?></h2>
                <div class="section-content">
                    <?= $section_content; ?>
                </div>
            </div>
            <div class="row">
                <?php if ($left_image): ?>
                <div class="col-md-6 d-flex align-items-stretch" style="padding-right:24px;">
                    <div class="img_wraper">
                        <img class="w-100" src="<?php echo esc_url($left_image['url']); ?>" alt="<?php echo esc_attr($left_image['alt']); ?>">
                    </div>
                </div>
                <?php endif; 
                if ($right_content): 
                ?>
                <div class="col-md-6 d-flex align-items-stretch" style="padding-left:24px;">
                    <div class="content_wraper">
                        <?php 
                        foreach ($right_content as $r_items):
                        $r_title = $r_items[ 'title' ];
                        $r_content = $r_items[ 'description' ];
                         ?>
                        <div class="content-row">
                            <h5 class="text-primary"><?= $r_title;?></h5>
                            <div class="column-content">
                                <?= $r_content; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
                <?php endif;?>
                
            <div class="row mt-4">
                    <?php 
                if ($left_content): 
                ?>
                <div class="col-md-6 d-flex align-items-stretch" style="padding-right:24px;">
                    <div class="content_wraper ">
                        <?php 
                        foreach ($left_content as $l_items):
                        $l_title = $l_items[ 'title' ];
                        $l_content = $l_items[ 'description' ];
                         ?>
                        <div class="content-row">
                            <h5 class="text-primary"><?= $l_title;?></h5>
                            <div class="column-content">
                                <?= $l_content; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; 
                if ($right_image): ?>
                <div class="col-md-6 d-flex align-items-stretch" style="padding-left:24px;">
                    <div class="img_wraper ">
                        <img class="w-100" src="<?php echo esc_url($right_image['url']); ?>" alt="<?php echo esc_attr($right_image['alt']); ?>">
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

    </section>
<?php
endif;
?>