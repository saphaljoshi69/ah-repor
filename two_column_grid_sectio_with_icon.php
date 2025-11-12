<?php 
if (get_row_layout() == 'two_column_grid_section_with_icon') :
$section_heading = get_sub_field('section_heading');
$section_background = get_sub_field('section_background');
$text_alignment = get_sub_field('text_alignment');
$is_2_column 	=	get_sub_field( 'is_two_column' );
if ($text_alignment == 'Center') {
    $text_alignment_class = ' text-center';
    $max_width = 'margin-left: auto; margin-right: auto;';
} else {
    $text_alignment_class = ' ';
    $max_width = 'margin-right: auto;';
}
if ($section_background == 'Muted'){
    $bg_class = ' muted-background';
} else {
    $bg_class = ' default-background';
}
if ($is_2_column) {
	$col_class = 'col-lg-6 two_col';
}else{
	$col_class = 'col-lg-4 three_col';
}
$section_description = get_sub_field('section_description');
$content_repeater = get_sub_field('two_column_grid_items');
$section_class = strtolower(str_replace('_', '-', get_row_layout()));
$section_padding = get_sub_field('section_padding');
if ($section_padding == 'Default') {
    $section_padding_class = '';
} elseif ($section_padding == 'Remove Top Padding') {
    $section_padding_class = ' pt-0';
} elseif ($section_padding == 'Remove Section Padding'){
    $section_padding_class = ' pt-0 pb-0';
} else {
    $section_padding_class = ' pb-0';
}
?>
<section class="section-padding two-column-list<?=$section_padding_class;?><?=$bg_class?>" id="<?=$section_class?>">
<div class="container">
<?php if ($section_heading) { ?>
<h2 class="text-primary mb-3 heading-600<?=$text_alignment_class?>" style="width: 800px;max-width: 100%; <?=$max_width;?>"><?php echo $section_heading; ?></h2>
<?php } if ($section_description) { ?>
<p class="mt-3<?=$text_alignment_class?> mb-0" style="width: 800px;max-width: 100%; <?=$max_width;?>"><?php echo $section_description; ?></p>
<?php } ?>
<?php
if ($content_repeater) : ?>
    <div class="row mt-5">
        <?php
        foreach ($content_repeater as $rows) :
        $heading = $rows['heading'];
        $icon = $rows['item_icon']; 
        $description = $rows['description'];
        ?>
            <div class="<?php echo $col_class; ?> col-md-12 col-sm-12 two-column-grid-list option-wrap">
            <div class="d-flex" style="gap: 20px;">
                <?php if ($icon) { ?>
                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                <?php } else {?>
                    <img src="<?php echo get_stylesheet_directory_uri()?>/images/tick.svg" style="width: 24px; height: 24px;object-fit: cover"/>
                <?php }?>
                <div class="content-wrap">
                    <?php if ($heading) { ?>
                    <h4 class="text-primary heading-600 mb-3"><?php echo $heading; ?></h4> 
                    <?php } if ($description) { ?>
                    <?php echo $description; ?>
                    <?php } ?>
                </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
</div>
</section>
<?php endif;?>