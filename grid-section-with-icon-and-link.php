<?php
if ( get_row_layout() == 'grid_list_section_with_icon_and_link' ) :

    $section_class      = strtolower( str_replace( '_', '-', get_row_layout() ) );
    $section_title      = get_sub_field( 'section_title' );
    $section_content    = get_sub_field( 'section_content' );
    $section_padding    = get_sub_field( 'section_padding' );
    $section_background = get_sub_field( 'section_background' );
    $grid_items         = get_sub_field( 'grid_items' );
	$more_link			= get_sub_field( 'more_link' );

    // Padding classes
    if ( $section_padding == 'Default' ) {
        $section_padding_class = '';
    } elseif ( $section_padding == 'Remove Top Padding' ) {
        $section_padding_class = ' pt-0';
    } else {
        $section_padding_class = ' pb-0';
    }

    // Background classes
    if ( $section_background == 'Muted' ) {
        $bg_class = 'muted-background';
    } else {
        $bg_class = 'default-background';
    }
?>

<section class="section-padding <?php echo esc_attr( $section_class ); ?><?php echo esc_attr( $section_padding_class ); ?> <?php echo esc_attr( $bg_class ); ?>">
    <div class="container common-head">
<div class="grid_section_with_link">
        <?php if ( $section_title ) : ?>
            <h2 class="text-primary heading-600"><?php echo esc_html( $section_title ); ?></h2>
        <?php endif; ?>

        <?php if ( $section_content ) : ?>
            <div class="mt-3"><?php echo wp_kses_post( $section_content ); ?></div>
        <?php endif; ?>
		</div>

        <?php if ( $grid_items ) : ?>
            <div class="grid-content">
                <div class="grid-list row mt-5">

                    <?php foreach ( $grid_items as $item ) :
                        $grid_image   = $item['item_image'];
                        $grid_title   = $item['item_title'];
                        $grid_content = $item['item_content'];
                        $grid_link    = $item['item_link'];
                        $btn_text     = $item['link_text'];
                    ?>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="h-100 d-flex flex-column" style="padding:24px; border:1px solid #E5E5E7; border-radius:12px;">
                            
                            <!-- Card Header -->
                            <div class="card-panel-header" style="padding:8px 0px;border-bottom:1px solid #E5E5E7;">
                                <div class="d-flex align-items-center gap-5">
                                    <?php if ( $grid_image ) : ?>
                                        <div class="grid-image">
                                            <img src="<?php echo esc_url( $grid_image['url'] ); ?>" 
                                                 alt="<?php echo esc_attr( $grid_image['alt'] ); ?>" 
                                                 style="width:46px; height:46px; object-fit:cover;">
                                        </div>
                                    <?php endif; ?>

                                    <?php if ( $grid_title ) : ?>
                                        <div class="grid-title">
                                            <h5 class="text-primary mb-0"><?php echo esc_html( $grid_title ); ?></h5>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Card Body -->
                            <?php if ( $grid_content ) : ?>
                                <div class="text-primary card-panel-body my-4 flex-grow-1" style="font-size:16px; line-height:24px;">
                                    <?php echo esc_html( $grid_content ); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Card Footer / Button -->
                            <?php if ( $grid_link ) : ?>
                                <div class="card-panel-footer mt-2">
                                    <a href="<?php echo esc_url( $grid_link ); ?>" 
                                       class="d-flex align-items-center justify-content-between"
                                       style="min-height:45px; gap:10px; width: fit-content; font-size:16px; color:#6878C4; font-weight:500;">
                                        <span><?php echo esc_html( $btn_text ); ?></span>
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/arrow-right.svg' ); ?>" 
                                             style="height:24px;" alt="arrow icon" />
                                    </a>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
            </div>
        <?php endif; ?>
		<?php if ( $more_link ): ?>
<div class="more-link mt-5 text-center">
	<a href="<?php echo esc_url( $more_link ); ?>" style="font-weight:500;width: fit-content; padding:15px 20px; background:#E6E9F0; border-radius:50px; color:#292929;" >View More</a>
		</div>
		<?php endif; ?>
    </div>
</section>

<?php endif; ?>
