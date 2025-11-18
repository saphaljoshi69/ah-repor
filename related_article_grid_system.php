<?php
$section_heading = get_field('section_heading'); 
$slider_category_id = get_field('slider_category');
$layout         = get_field( 'is_slider' );
if($slider_category_id): ?>
  <section class="cluster-news-slider">
    <div class="container">
      <h2><?php echo $section_heading; ?></h2>
    </div><!-- container --><?php
      $post_list = new WP_Query(['post_type'=>'post', 'post_status' => array('publish'), 'posts_per_page'=>6, 'orderby'=>'date', 'order'=>'DESC', 'tax_query'=>[
          array(
            'taxonomy'         => 'category', 
            'field'            => 'term_id',
            'include_children' => true,
            'operator'         => 'IN',
            'terms'            => array($slider_category_id),
          ),
        ],
      ]);  
    if($post_list->have_posts()):
    if ( $layout ): ?>
    <!-- slider layout -->
      <div class="custom-container">
        <div class="slider-wrapper"><?php
          while($post_list->have_posts()): $post_list->the_post(); 
            $featured_image = AttachmentImage(get_the_ID()); ?>
            <div class="slider-item relative-div">
              <div class="image-wrap"><?php
                if($featured_image){ ?>
                  <img src="<?php echo $featured_image['src']; ?>" alt="<?php echo $featured_image['alt']; ?>"><?php
                }else{ ?>
                  <img src="<?php echo site_url().'/wp-content/uploads/placeholder-image-new-logo.jpg';?>" alt="default-image"><?php
                } ?>
              </div><!-- image-wrap -->
              <div class="details">
                 <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <div class="common-button light-red">
				          <a href="<?php the_permalink(); ?>" aria-label="read-more">Read more</a>
				        </div>
              </div>
              <a class="stretched-link" aria-label="<?php echo get_the_title(get_the_ID());?>" href="<?php the_permalink(); ?>" ></a>
            </div><!-- slider-item --><?php
          endwhile; ?>
        </div><!-- slider-wrapper -->
      </div>
      <?php else: ?>
        <!-- grid layout -->
         <div class="container">
         <div class="row related-article-grid">
            <?php while($post_list->have_posts()): $post_list->the_post();
            $featured_image = AttachmentImage(get_the_ID()); ?>
            <div class="col-md-6" >
                <a href="<?php the_permalink(); ?>" class="d-flex" style="gap:32px;">
                <div class="image-wrap"><?php
                if($featured_image){ ?>
                  <img src="<?php echo $featured_image['src']; ?>" alt="<?php echo !empty($featured_image['alt']) ? $featured_image['alt'] : (!empty($featured_image['title']) ? $featured_image['title'] : ''); ?>
" style="width:240px; height:160px; object-fit:cover;"><?php
                }else{ ?>
                  <img src="<?php echo site_url().'/wp-content/uploads/placeholder-image-new-logo.jpg';?>" alt="default-image" style="width:240px; height:160px; object-fit:cover;"><?php
                } ?>
              </div><!-- image-wrap -->
              <div class="details">
                <p class="text-meta"><?php echo get_the_date(); ?></p>
                 <h3><?php the_title(); ?></h3>
                <p class="text-muted"><?php echo esc_attr(get_the_author()); ?></p>
              </div>
            </a>
            </div>
            <?php endwhile; wp_reset_postdata();  ?>
         </div>
      
            </div>
      <!-- custom-container --><?php 
      endif;
    endif; ?>
  </section><!-- cluster-news-slider --><?php
endif; ?>    