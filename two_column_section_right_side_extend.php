<?php
if ( get_row_layout == 'two_column_section_right_side_extend') :

    $section_class  = strtolower(str_replace('_', '-', get_row_layout()));
    $column1        = get_sub_field( 'column_1');
    $meta_text      = $column1[ 'meta_text' ];
    $title          = $column1[ 'section_title' ];
    $content        = $column1[ 'content' ];
    $cta_form       = $column1[ 'select_carrier_cta_link_option' ];

    $column2        = get_sub_field( 'column_2');
    $banner_image   = $column2['banner_image'];
    
    // section Setting
    $background_style   = get_sub_field( 'background_style' );
    $background_color   = get_sub_field( 'background_color_code' );
    $image_order        = get_sub_field( 'image_ordering_first' );
    $title_tag          = get_sub_field( 'title_tag' );
    $column_space       = get_sub_field( 'column_gutter_size' );
    $section_padding    = get_sub_field( 'section_padding' );

    // section background
    if ($background_style == 'Static'){
        $bg_style = 'background';
    }else{
        $bg_style = 'background-image';
    }


    // Image Ordering
    if ($image_order){
        $order_class = '';
        if ($column_space == 'Large'){
            $gutter_cls_l = ' pl-lg-5';
            $gutter_cls_r = ' pr-lg-4';
        } elseif ($column_space == 'Medium') {
            $gutter_cls_l = ' pl-lg-5';
            $gutter_cls_r = ' pr-lg-4';
        
        } else {
            $gutter_cls_l = '';
            $gutter_cls_r = '';
        }
    } else {
        $order_class = 'order-1';
         if ($column_space == 'Large'){
            $gutter_cls_l = ' pl-lg-4';
            $gutter_cls_r = ' pr-lg-5';
        } elseif ($column_space == 'Medium') {
            $gutter_cls_l = ' pl-lg-4';
            $gutter_cls_r = ' pr-lg-4';
        
        } else {
            $gutter_cls_l = '';
            $gutter_cls_r = '';
        }
    }

    // Title tag h1, h2, h3, h4
    if ($title_tag == 'h1'){
        $tag = 'h1';
    } elseif ($title_tag == 'h2') {
        $tag = 'h2';
    } elseif ($title_tag == 'h3') {
        $tag = 'h3';
    } else {
        $tag = 'h4';
    }

    // Section Padding
    if ($section_padding == 'Remove Top Padding') {
        $section_padding_cls = 'pt-0';
    } elseif ($section_padding == 'Remove Bottom Padding') {
        $section_padding_cls = 'pb-0';
    } elseif ($section_padding == 'Remove Section Padding'){
        $section_padding_cls = 'py-0';
    } else {
        $section_padding_cls = '';
    }
?>
<section class="section-padding <?php echo $section_class; ?> <?php echo $section_padding_cls; ?>" style="<?php echo $bg_style; ?>: <?php echo $background_color; ?>" >
    <div class="container d-flex">
        <div class="bg-light border-end" style="flex: 0;">
            <p class="text-meta"><?=$meta_text; ?><p>
            <<?php echo $tag; ?> class="text-parimary heading-700"><?=$title; ?></<?php echo $tag; ?>>
            <p><?=$content; ?></p>
            <?php if ($select_carrier_cta_link_option == 'Global Insured Carrier CTA Link') : ?>
            <div class="zipcode-email">
                <?php get_template_part('template-parts/forms/zipcode-email-form-revamp'); ?>
            </div>
            <?php elseif ($select_carrier_cta_link_option == "Global Agent Carrier CTA Link"): ?>
            <div class="agent-registration-form-home ah-reimagined-form"> <!-- agent-email-subscribe -->
                <?php get_template_part('template-parts/forms/agent-registration-form-template-home'); ?>
            </div>
            <?php endif;  ?>
        </div>

        <div class="flex-grow-1 bg-secondary text-white pr-0">
            <?php if ($banner_image): ?>
            <img src="<?php echo esc_url($banner_image['alt']); ?>" alt="<?php echo esc_html($banner_image['alt']); ?>">
        </div>
    </div>

</section>
<?php endif; ?>