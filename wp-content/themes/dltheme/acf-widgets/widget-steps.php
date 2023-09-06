
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $step_items = get_sub_field('step_items'); 
        
        $rowIndex = get_row_index();
    ?>
    
    <section class="steps trans-all-4" id="content<?php echo $rowIndex ?>">
      <div class="container">
        <h2 class="section_title center"><?php echo $section_title ?></span></h2>
        <?php 
          if($section_subtitle){
            ?>
              <div class="section_subtitle center"><?php echo $section_subtitle ?></div>
            <?php
          }
        ?>
        <div class="steps_list">
          <?php
            foreach($step_items as $key => $step){
              ?>
                <div class="step_item">
                  <div class="step_top">
                    <figure>
                      <img src="<?php echo $step['img']['url'] ?>" alt="<?php echo $step['img']['alt'] ?>">
                    </figure>
                    <div class="step_number"><?php echo $key + 1 ?></div>
                  </div>
                  <div class="step_bottom">
                    <div class="step_title"><?php echo $step['title'] ?></div>
                    <div class="step_content more"><?php echo $step['desc'] ?></div>
                  </div>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
    </section>
