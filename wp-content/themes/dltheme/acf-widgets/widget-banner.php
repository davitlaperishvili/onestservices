
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_button = get_sub_field('section_button'); 
        $open_popup = get_sub_field('open_popup') ? "data-micromodal-trigger='modal-register2'" : ""; 
        $button_url = get_sub_field('open_popup') ? "javascript:void(0)" : $section_button['url'];
        $section_image = get_sub_field('section_image'); 
        
        $rowIndex = get_row_index();
    ?>

    <section class="banner" id="content<?php echo $rowIndex ?>">
      <div class="container">
        <div class="banner_wrap">
          <div class="banner_content">
            <div class="banner_title"><?php echo $section_title ?></div>
            <div class="theme_button">
              <a href="<?php echo $button_url ?>" <?php echo $open_popup ?>><?php echo $section_button['title'] ?></a>
            </div>
          </div>
          <figure>
            <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
          </figure>
        </div>
      </div>
    </section>
