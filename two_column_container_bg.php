<?php 

if ( get_row_layout() == 'two_column_container_bg' ):
    

    $section_class          = strtolower( str_replace('_', '-', get_row_layout()));
    $section_title          = get_sub_field( 'section_title' );
    $section_content        = get_sub_field( 'section_content' );
    $column_content         = get_sub_field( 'column_content' );

    // section settings
    $section_padding        = get_sub_field( 'section_padding' );
    $section_background     = get_sub_field( 'section_background' );
    $container_background   = get_sub_field( 'container_background_color' );

    // CONDITIONAL BLOCK
    if ( $section_padding == 'Default' ) {
        $padding_cls = '';
    } elseif ( $section_padding == 'Remove Top Padding' ) {
        $padding_cls = ' pt-0';
    } elseif ( $section_padding == 'Remove Bottom Padding' ) {
        $padding_cls = ' pb-0';
    } else {
        $padding_cls = 'p-0';
    }

   
    if ( $section_background == 'Muted' ){
        $bg_class = 'muted-background';
    } else {
        $bg_class = 'default-background';
    }
?>

<section class="section-padding <?= $section_class; ?> <?= $padding_cls; ?> <?= $bg_class; ?>">
    <div class="container py-5 px-lg-5 px-3" style="background: <?= esc_attr($container_background); ?>; border-radius:12px;">
        <div class="section-content text-center mb-5 mx-auto" style="width:70%;">
            <?php if ($section_title): ?>
            <h2 class="text-primary heading-700 "><?= $section_title; ?></h2>
            <?php endif;
            if ($section_content): ?>
                <div class="section-content " >
                    <?= $section_content; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="row g-5 mt-3">
            <?php 
            if ( $column_content ):
                foreach ( $column_content as $column ):
                    $img     = $column['image'];
                    $title   = $column['title'];
                    $content = $column['content'];
            ?>
            <div class="col-lg-6 col-12 d-flex mt-4 mt-lg-0" >
				<div class="col-content p-5 mx-0 mx-lg-4 flex-fill" style="background:#fff; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; border-radius:12px; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                    
                <?php if ($img): ?>
                    <img class="mb-3" src="<?= esc_url($img['url']); ?>" alt="<?= esc_attr($img['alt']); ?>" style="height:64px; width:64px;">
                <?php endif; ?>

                <?php if ($title): ?>
                    <h4 class="text-primary heading-700 mb-3"><?= esc_html($title); ?></h4>
                <?php endif; ?>

                <?php if ($content): ?>
                    <div class="content text-primary">
                        <?= ($content); ?>
                    </div>
                <?php endif; ?>
                
                </div>
            </div>
            <?php 
                endforeach;
            endif; 
            ?>
        </div>
    </div>
</section>

<?php endif; ?>
