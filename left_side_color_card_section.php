<?php
if ( get_row_layout() == 'left_side_color_card_section' ): 

    // main content
    $section_heading        = get_sub_field( 'section_heading' );
    $section_content        = get_sub_field( 'section_content' );
    $right_content          = get_sub_field( 'right_content' );

    // section style
    $section_class          = strtolower(str_replace('_', '-', get_row_layout()));
    $section_padding        = get_sub_field( 'section_padding');
    $section_background     = get_sub_field( 'section_background' );

    if ( $section_padding == 'Default' ){
        $padding_class    = ' ';
    } elseif ( $section_padding == 'Remove Top Padding' ){
        $padding_class    = 'pt-0';
    } else {
        $padding_class    = 'pb-0';
    }


    if ( $section_background == 'Muted' ){
        $bg_class   ='muted-background';
    } else {
        $bg_class   = 'default-background';
    }
?>
<section class="section-padding <?= $section_class; ?> <?= $bg_class; ?> <?= $padding_class; ?>">
    <div class="container">
        <div class="row g-5">
            <?php 
            if ( $section_heading ):
            ?>
            <div class="col-md-6 left-content text-center text-md-start">
                <h2 class="text-primary heading-700 text-center text-md-start"><?= $section_heading; ?></h2>
                <div class="content_waper mt-3 text-primary text-center text-md-start">
                    <?= $section_content; ?>
                </div>
            </div>
            <?php
            endif;
            if ( $right_content ):
            ?>
            <div class="col-md-6 card-column">
                <?php 
                foreach ($right_content as $row):
                    $title = $row['heading'];
                    $content = $row['description'];
                    ?>
                <div class="card-row mt-4">
                    <?php 
                    if ( $title ): ?>
                    <h5 class="text-primary"><?= $title; ?></h5>
                    <?php endif;
                    if ( $content ):
                    ?>
                    <div class="description">
                        <?= $content; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

</section>
<?php
endif;
?>