<?php
if ( get_row_layout() == 'agent_list_grid_with_recommendation_badge' ) :

    $section_class      = strtolower( str_replace( '_', '-', get_row_layout() ) );
    $section_title      = get_sub_field( 'section_title' );
    $agent_list         = get_sub_field( 'agent_list' );
    $section_padding    = get_sub_field( 'section_padding' );
    $section_background = get_sub_field( 'section_background' );

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

        <?php if ( $section_title ) : ?>
            <h2 class="text-primary heading-600"><?php echo esc_html( $section_title ); ?></h2>
        <?php endif; ?>

        <?php if ( $agent_list ) : ?>
            <div class="agent-tab-content">
                <div class="agent-list row mt-5">

                    <?php foreach ( $agent_list as $agent ) :
                        $agent_image     = $agent['agent_avatar'];
                        $agent_name      = $agent['agent_name'];
                        $agent_address   = $agent['agent_address'];
                        $agent_verified  = $agent['is_verified'];
                        $agent_premium   = $agent['is_premium'];
                        $type_of_agent   = $agent['type_of_insurance_service'];
                        $call_number     = $agent['call_number'];
                        $request_quote   = $agent['quote_link'];
                    ?>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                        <div class="card-panel">
                            <div class="card-panel-header">
                                <?php 
                                if ($agent_premium){
                                    ?>
                                <div class="premium-agent">
                                    <img src="<?php echo esc_url( get_template_directory_uri() .'/images/top-professional.svg'); ?>"
										 alt="Premium Badge">                                  
                                </div>
                                <?php } ?>
                                <div class="d-flex align-items-center" style="gap: 16px">
									 
                                    <div class="agent-image">
                                    <?php 
                                    if ($agent_image) {
                                        ?>
                                        <img src="<?php echo esc_url($agent_image['url']); ?>"
                                            style="width: 72px; height: 72px; border-radius: 16px; object-fit: cover">
                                            <?php } else {
                                                $names = explode(' ', $agent_name);
                                                $short_name = '';
                                                foreach( $names as $name) {
                                                    $short_name .= strtoupper( mb_substr($name, 0, 1) );
                                                }
                                                ?>
                                                <div style="width: 72px; height: 72px; background: #262758; color: #fff; font-size: 30px; display: flex; justify-content: center; align-items: center; border-radius: 16px;">
                                                    <?php echo esc_html($short_name); ?>
                                                </div>
                                                    <?php } ?>
                                    </div>
                                    <div class="agent-info">
                                        <div class="agent-name d-flex align-items-center">
                                            <?php 
                                            if ($agent_name){
                                                ?>
                                            <p class="text-primary heading-700"><?php echo esc_html($agent_name); ?></p>
                                            <?php }
                                            if ($agent_verified){
                                            ?>
                                            <img class="" src="<?php echo esc_url( get_template_directory_uri() . '/images/verified.svg'); ?>" alt="Verified" style="margin-bottom:12px; margin-left:5px;">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-panel-body mt-4">
                                <?php if ($type_of_agent && is_array($type_of_agent)) :?>
                                    <p class="mb-0" style="font-weight:600;">
                                                <?php echo esc_html( implode(', ', $type_of_agent)); ?>                    
                                </p>
                                <?php endif; ?>
                                <?php 
                                if ($agent_address){?>
                                <p class="mb-0"><?php echo esc_html($agent_address); ?> </p>
                                <?php }?>
                            </div>

                            <div class="card-panel-footer agent-contact mt-4">
								
                                <div class="call-btn-cta" style="min-height:45px;">
									<?php 
                                if ($agent_premium && $call_number){ ?>
                                    <a href="tel:<?php echo esc_html($call_number); ?>" class="btn secondary-btn col-12">Call now</a>
									<?php } ?>
                                </div>
                                <div class="quote-btn-cta" style="margin-top: 10px">
                                    <?php 
                                    if ($request_quote){ ?>
                                    <a href="<?php echo esc_url($request_quote); ?>"
                                        class="btn primary-btn col-12" target="_blank">Request a quote</a>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php endif; ?>
