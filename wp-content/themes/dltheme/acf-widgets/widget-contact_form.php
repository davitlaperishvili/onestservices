
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $form_shortcode = get_sub_field('form_shortcode'); 
        $move_down = get_sub_field('move_down'); 
        
        $rowIndex = get_row_index();
    ?>
    
    <section class="contact_form <?php echo $move_down ? "down" : "" ?>"  id="content<?php echo $rowIndex ?>">
      <div class="container">
        <div class="contact_form_wrap">
          <h2 class="section_title center"><?php echo $section_title ?></h2>
          <?php 
            if($section_subtitle){
              ?>
                <div class="section_subtitle center"><?php echo $section_subtitle ?></div>
              <?php
            }
          ?>
          <!-- <?php echo do_shortcode("") ?> -->
          <div class="contact_form_fields">
            <?php echo do_shortcode($form_shortcode) ?>
          </div>
        </div>
      </div>
    </section>