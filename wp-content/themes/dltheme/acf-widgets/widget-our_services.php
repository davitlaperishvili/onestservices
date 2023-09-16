
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_image = get_sub_field('section_image'); 
        $servicesType = get_sub_field('services_type'); 
        $is_bg = $section_image ? "" : "no_bg";
        $with_links = get_sub_field('with_links'); 
        $is_with_links = $with_links ? "service_links" : ""; 
        $service_items = get_sub_field('service_items'); 
        
        $rowIndex = get_row_index();
    ?>
    
    <section class="our_services <?php echo $is_bg ?>" id="content<?php echo $rowIndex ?>">
      <?php 
        if($section_image){
          ?>
            <figure>
              <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
            </figure>
          <?php
        }
      ?>
      <div class="container">
        <h2 class="section_title center"><?php echo $section_title ?></h2>
        <?php 
          if($section_subtitle){
            ?>
              <div class="section_subtitle center"><?php echo $section_subtitle ?></div>
            <?php
          }
        ?>
        <?php 
          if($servicesType === "manual"){
            ?>
              <div class="services_list <?php echo $is_with_links ?>">
                <?php 
                  foreach($service_items as $item ){
                    $imageID = get_post_meta($item, "service_icon", true);
                    ?>
                      <div class="service_item">
                        <?php 
                          if($is_with_links ){
                            ?>
                              <a href="<?php echo get_the_permalink($item) ?>"></a>
                            <?php
                          }
                        ?>
                        <figure>
                          <img src="<?php echo wp_get_attachment_image_src($imageID)[0] ?>" alt="<?php echo get_the_title($item) ?>">
                        </figure>
                        <div class="service_title"><?php echo get_the_title($item) ?></div>
                        <div class="service_desc"><?php echo get_post_meta($item, "short_description", true) ?></div>
                      </div>
                    <?php
                  }
                ?>
              </div>
            <?php
          }else{
            
            ?>
              <div class="services_list <?php echo $is_with_links ?>">
                <?php 
                  // параметры по умолчанию
                  $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'post_type'   => 'services',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                  ) );

                  global $post;

                  foreach( $my_posts as $post ){
                    setup_postdata( $post );

                    $imageID = get_post_meta($post->ID, "service_icon", true);
                    ?>
                      <div class="service_item">
                        <?php 
                          if($is_with_links ){
                            ?>
                              <a href="<?php echo get_the_permalink($post->ID) ?>"></a>
                            <?php
                          }
                        ?>
                        <figure>
                          <img src="<?php echo wp_get_attachment_image_src($imageID)[0] ?>" alt="<?php echo get_the_title($post->ID) ?>">
                        </figure>
                        <div class="service_title"><?php echo get_the_title($post->ID) ?></div>
                        <div class="service_desc"><?php echo get_post_meta($post->ID, "short_description", true) ?></div>
                      </div>
                    <?php
                  }

                  wp_reset_postdata(); // сброс
                ?>
              </div>
              
            <?php
          }
        ?>
      </div>
    </section>
