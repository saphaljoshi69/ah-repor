<?php 
if ( get_row_layout() == "two_column_cta_with_text_and_image") :

    $section_class        = strtolower( str_replace('_', '-', get_row_layout()));
    $section_background   = get_sub_field('section_background');
    $section_padding      = get_sub_field('section_padding');
    $cta_title            = get_sub_field('cta_title');
    $cta_content          = get_sub_field('cta_content');
	$select_carrier_cta_link_option = get_sub_field( 'select_carrier_cta_link_option' );
    $cta_image            = get_sub_field('cta_image');

    // background class
    if ($section_background == 'Muted') {
        $bg_class = 'muted-background';
    } else {
        $bg_class = 'default-background';
    }

    // padding class
    if ($section_padding == 'Default') {
        $section_padding_class = '';
    } elseif ($section_padding == 'Remove Top Padding') {
        $section_padding_class = 'pt-0';
    } else {
        $section_padding_class = 'pb-0';
    }
?>
<section class="section-padding <?php echo esc_attr($bg_class); ?> <?php echo esc_attr($section_padding_class); ?> <?php echo esc_attr($section_class); ?>">
    <div class="container"  >
        <div class="row cta-panel align-items-stretch">
            <div class="col-lg-6 col-md-12 col-sm-12" style="background:#F7F9FC;">
				<div class="p-5">
					
                <?php if ($cta_title) : ?>
                    <h2 class="text-primary heading-600"><?= $cta_title; ?></h2>
                <?php endif; ?>

                <?php if ($cta_content) : ?>
                    <div class="mt-3"><?=$cta_content; ?></div>
                <?php endif; ?>
				<?php if ($select_carrier_cta_link_option == 'Global Insured Carrier CTA Link') : ?>
            <div class="cta-search-form-zip-email mt-4">
                <?php get_template_part('template-parts/forms/zipcode-email-form-revamp'); ?>
            </div>
        <?php elseif ($select_carrier_cta_link_option == "Global Agent Carrier CTA Link"): ?>
            <div class="cta-search-email mt-4"> <!-- agent-email-subscribe -->
                <?php get_template_part('template-parts/forms/agent-registration-form-template-home'); ?>
            </div>
        <?php endif;  ?>
            </div>
				
				</div>
            <div class="col-lg-6 col-md-12 col-sm-12 w-100 p-0">
                <?php if ($cta_image) : ?>					
			
                    <img class="h-100 w-100" src="<?php echo esc_url($cta_image['url']); ?>" alt="<?php echo esc_attr($cta_image['alt']); ?>" style="object-fit:cover;" />
						
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
