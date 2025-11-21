<?php
if ( get_row_layout() == 'two_column_section_right_side_extend' ) :

    $section_class  = strtolower(str_replace('_', '-', get_row_layout()));
    $column1        = get_sub_field('column_1');
    $meta_text      = $column1['meta_text'];
    $title          = $column1['section_title'];
    $content        = $column1['content'];
    $cta_form       = $column1['select_carrier_cta_link_option'];

    // Section settings
    $background_image   = get_sub_field('background_img');
    $title_tag          = get_sub_field('title_tag');
    $section_padding    = get_sub_field('section_padding');

    // Title tag
    $tag = in_array($title_tag, ['h1', 'h2', 'h3']) ? $title_tag : 'h4';

    // Section padding
    if ($section_padding == 'Remove Top Padding') {
        $section_padding_cls = 'pt-0';
    } elseif ($section_padding == 'Remove Bottom Padding') {
        $section_padding_cls = 'pb-0';
    } elseif ($section_padding == 'Remove Section Padding') {
        $section_padding_cls = 'py-0';
    } else {
        $section_padding_cls = '';
    }

?>
	
<section class="section-padding hero-banner <?= esc_attr($section_class); ?> <?= esc_attr($section_padding_cls); ?> d-flex align-items-center"
        style="background-image:url('<?= esc_url($background_image['url']); ?>');
                background-repeat:no-repeat;
                background-size:cover;
                background-position:right bottom;
                min-height:80vh;" >

    <div class="container ">
        <div class="content-wrapper">
            <h3 class="text-meta"><?=$meta_text; ?></h3>
            <<?= $tag; ?> class="text-primary heading-700"><?=$title; ?></<?= $tag; ?>>
				<h5 class="mt-3 mb-2"><?=$content; ?></h5>

            <?php if ($cta_form == 'Global Insured Carrier CTA Link') : ?>
                <div class="zipcode-email mt-5">
                    <?php get_template_part('template-parts/forms/zipcode-email-form-revamp'); ?>
                </div>
            <?php elseif ($cta_form == 'Global Agent Carrier CTA Link') : ?>
                <div class="agent-registration-form-home ah-reimagined-form mt-5">
                    <?php get_template_part('template-parts/forms/agent-registration-form-template-home'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
