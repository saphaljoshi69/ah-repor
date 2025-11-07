<?php
if ( get_row_layout() == 'two_column_content_with_left_side_list' ) :
    $section_class = strtolower(str_replace('_', '-', get_row_layout()));
    $left_side = get_sub_field('column1');
    $right_side = get_sub_field('column2');
    $left_side_title = $left_side['title'];
    $left_side_content = $left_side['content'];
    $list_heading = $left_side['list_heading'];    
    $right_side_content = $right_side['col2_content'];
    $list = $left_side['list'];
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
            <div class="col-lg-6 col-md-12 col-sm-12 pr-md-5">
                <?php if ( $left_side_title ) : ?>
                    <h2 class="text-primary heading-600"><?php echo esc_html( $left_side_title ); ?></h2>
                <?php endif; ?>
                <?php if ( $left_side_content ) : ?>
                    <p class="mt-3"><?php echo esc_html( $left_side_content ); ?></p>
                <?php endif; ?>
                <?php if ( $list_heading ) : ?>
                    <p class="mt-3"><?php echo esc_html( $list_heading ); ?></p>
                <?php endif; ?>
                <?php if ( $list) : ?>
                    <ul class="mt-3">
                        <?php foreach ( $list as  $item ) :
                            $item_content = $item['list_item'] ?>
                            <li class="mb-2"><?php echo esc_html( $item_content ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <?php if ( $right_side_content ) : ?>
				<div>
					
                    <?php echo $right_side_content; ?>
					</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php endif;?>