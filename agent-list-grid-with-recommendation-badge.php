<?php
if ( get_row_layout() == 'agent_list_grid_with_recommendation_badge' ) :
    $section_class = strtolower(str_replace('_', '-', get_row_layout()));
    $section_title = get_sub_field('section_title');
    $agent_list = get_sub_field('agent_list');
    $section_padding = get_sub_field('section_padding');
    $section_background = get_sub_field('section_background');
    if ($section_padding == 'Default') {
    $section_padding_class = '';
} elseif ($section_padding == 'Remove Top Padding') {
    $section_padding_class = ' pt-0';
} else {
    $section_padding_class = ' pb-0';
}
if ($section_background == 'Muted'){
    $bg_class = 'muted-background';
}else{
    $bg_class = 'default-background';
}
?>
<section class="section-padding <?php echo esc_attr($section_class); ?> <?=$section_padding_class;?> <?php echo esc_attr($bg_class); ?>">
    <div class="container">
        <?php if ( $section_title ) : ?>
            <h2 class="text-primary heading-600 text-center"><?php echo esc_html( $section_title ); ?></h2>
        <?php endif; ?>
        <?php if ( $agent_list ) : ?>
            <div class="row g-4 mt-5">
                <?php foreach ( $agent_list as $agent ) :
                    $agent_image = $agent['agent_avatar'];
                    $agent_name = $agent['agent_name'];
                    $agent_address = $agent['agent_address'];
                    $agent_premium = $agent['premium_agent'];
                    $type_of_agent = $agent['type_of_insurance_service'];
                    $call_number = $agent['call_number'];
                    $request_quote = $agent['quote_link'];
                ?>
                <div class="col-md-4">
                   
                </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>