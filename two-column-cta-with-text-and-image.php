<?php 
if ( get_row_layout() == "two_column_cta_with_text_and_image") :

    $section_class = strtolower( str_replace('_', '-', get_row_layout()));
    $section_background = get_sub_field('section_background');
    $section_padding    = get_sub_field( 'section_padding' );
    $cta_title          = get_sub_field( 'cta_title' );
    $cta_content        = get_sub_field( 'cta_content' );
    $cta_link           = get_sub_field( 'cta_link' );
    $btn_text           = get_sub_field( 'button_text' );
    $cta_image          = get_sub_field( 'cta_image' );

    // background class
    if ($section_background == 'Muted'){
        $bg_class = 'muted-background';
    }else {
        $bg_class = 'default-background';
    }

    // Padding class
    if ( $section_padding == 'Default' ){
        $section_padding_class = '';
    } elseif ($section_padding == 'Remove Top Padding') {
        $section_padding_class = 'pt-0';
    } else {
        $section_padding_class = 'pb-0';
    }
    ?>
    <section class="section-padding <?php echo esc_attr($bg_class); ?> <?php echo esc_attr($section_padding_class); ?> <?php echo esc_attr($section_class); ?>">
<div class="container">
    <div class="row cta-panel">
        <div class="col-lg-6 col-md-12 col-sm-12 pr-md-5">
            <?php if($cta_title) : ?>
<h2 class="text-parimary heading-600"><?=$cta_title; ?></h2>
<?php endif; 
if($cta_content) : 
?>

<p class="mt-3"><?=$cta_content; ?></p>
<?php endif; 
if ($cta_link):
?>
<a href="<?php echo esc_url($cta_link); ?>" class="btn btn-primary"><?=$btn_text; ?></a>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 p-0">
<?php if( $cta_image ) :?>
    <img src="<?php echo esc_url($cta_image['url']); ?>" alt="<?php echo esc_attr($cta_image['alt']); ?>" style="hright:1200px; aspect-ratio: 1200 / 868;"/>
        </div>
    </div>
</div>
</section>
<?php 
endif; 
?>