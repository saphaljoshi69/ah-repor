<?php 

if ( get_row_layout() == 'ah_feature_comparison_section' ):

    // main content     
    $section_class              = strtolower( str_replace('_', '-', get_row_layout()));
    $section_meta_text          = get_sub_field( 'meta_text' );
    $section_title              = get_sub_field( 'section_title' );
    $comaprison_item            = get_sub_field( 'comparison_point' );

    // section Settings
    $section_padding            = get_sub_field( 'section_padding' );
    $section_background         = get_sub_field( 'section_background' );

    if ( $section_padding == 'Default' ) {
        $padding_class    = '';
    } elseif ( $section_padding == 'Remove Top Padding' ) {
        $padding_class    = ' pt-0';
    } else {
        $padding_class    = ' pb-0';
    }

    if ( $section_background == 'Muted' ) {
        $bg_class         = ' muted-background';
    } else {
        $bg_class         = ' default-background';
    }

    ?>

    <section class="section-padding <?= $section_class; ?> <?= $padding_class; ?> <?= $bg_class; ?>">

        <div class="container-sm mx-auto" style="max-width:1000px;">
            <?php if ($section_title): ?>
            <div class="section-content text-center">
                <?php if ($section_meta_text): ?>
                <div class="meta-text">
                    <?= $section_meta_text; ?>
                </div>
                <?php endif; ?>
                <?php if ($section_title): ?>
                <h2 class="text-primary heading-700 mt-4">
                    <?= $section_title; ?>
                </h2>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="comparison-table mt-5">
                <?php
                        if ( $comaprison_item ):
                        ?>
                <table class=" w-100">
                    <tbody>
                        <tr >
                            <td style="width: 60%;">
								<p class="text-primary " style="font-weight:600;">
									What Matters
								</p>
                            </td>
                            <td  style="width: 20%;">
                                <p class="text-primary d-flex justify-content-center" style="font-weight:600;">
									Agency Height
								</p>
                            </td>
                            <td  style="width: 20%;">
                                <p class="text-muted d-flex justify-content-center" style="font-weight:600;">
									Traditional Brokers
								</p>
                            </td>
                        </tr>
                        <?php
                        foreach ( $comaprison_item as $items):
                            $img    = $items[ 'imageicon' ];
                            $content = $items[ 'content' ];
                        ?>
                        <tr class="mb-3" style="border-top:1px solid #e1e1e1;">
                            <td>
                                <div class="comparison-row d-flex">
                                    <?php if ($img):?>
                                    <div class="image mr-3">
                                        <img loading="eager" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" style="height:32px; width:32px;">
                                    </div>
                                    <?php endif; ?>
                                    <div class="content text-primary">
                                        <?= $content; ?>
                                    </div>
                                </div>
                            </td>
                            <td class="">
                                <div class="feature-available ">
                                    <img loading="eager" src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-primary-icon.svg" alt="feature available" style="width:16px; height:16px;">
                                </div>
                            </td>
                            <td class="">
                                <div class="feature-unavailable ">
                                    <img loading="eager" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cross-disable-icon.svg" alt="feature unavailable" style="width:16px; height:16px;">
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>
        </div>
    </section>


<?php endif; ?>