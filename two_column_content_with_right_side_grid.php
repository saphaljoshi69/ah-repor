<?php
if (get_row_layout() == 'two_column_content_with_right_side_grid' ) :

    $left_column = get_sub_field('left_column');
    $right_column = get_sub_field('right_column');
    $left_title = $left_column['title'];
    $left_content = $left_column['content'];
    $btn_text = $left_column['button_text'];
    $btn_url = $left_column['button_url'];
    $right_title = $right_column['title'];
    $right_grid = $right_column['grid_items'];
    $section_class = strtolower(str_replace('_', '-', get_row_layout()));
    $section_padding = get_sub_field('sec_padding');
    $section_background = get_sub_field('sec_background');
if ($section_padding == 'Default') {
    $section_padding_class = '';
} elseif ($section_padding == 'Remove Top Padding') {
    $section_padding_class = ' pt-0';
} else {
    $section_padding_class = ' pb-0';
}
if ($section_background == 'Muted'){
    $bg_class = ' muted-background';
} else {
    $bg_class = ' default-background';
}
?>
<section class="section-padding <?php echo esc_attr($section_class); ?> <?=$section_padding_class;?> <?php echo esc_attr($bg_class); ?>">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 pr-md-5 text-primary">
                <?php if ( $left_title ) : ?>
                    <h2 class="text-primary heading-600"><?php echo esc_html( $left_title ); ?></h2>
                <?php endif; ?>
                <?php if ( $left_content ) : ?>
                    <div class="mt-5"><?php echo  $left_content; ?></div>
                <?php endif; ?>
                <?php if ( $btn_text && $btn_url ) : ?>
                    <a href="<?php echo esc_url( $btn_url ); ?>" class="mt-3"><?php echo esc_html( $btn_text ); ?></a>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 grid-items">
                <?php if ( $right_title ) : ?>
                    <h4><?php echo esc_html( $right_title ); ?></h4>
                <?php endif; ?>
                <?php if ( $right_grid ) : ?>
                    <div class="row g-5 text-center mt-5">
                        
                        <?php foreach ( $right_grid as $item ) :
                            $grid_image = $item['grid_image'];
                            $grid_title = $item['grid_title'];
                        ?>
                        <div class="col-4 ex-grid-item mb-5 ">
                            <?php if ( $grid_image ) : ?>
                                <img src="<?php echo esc_url( $grid_image['url'] ); ?>" alt="<?php echo esc_attr( $grid_image['alt'] ); ?>" class="img-fluid mb-2" style="height:45px; width:45px;">
                            <?php endif; ?>
                            <?php if ( $grid_title ) : ?>
                                <h6 class=""><?php echo esc_html( $grid_title ); ?></h6>
                            <?php endif; ?>
                       
                        
                        </div>
						<?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
    <?php endif; ?>