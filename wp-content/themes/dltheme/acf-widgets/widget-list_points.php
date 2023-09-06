
   <?php  
        $section_title = get_sub_field('section_title'); 
        $block_title = get_sub_field('block_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_image = get_sub_field('section_image'); 
        $step_items = get_sub_field('step_items'); 
        $section_note = get_sub_field('section_note'); 
        
        $rowIndex = get_row_index();
    ?>
    
    <section class="list_points <?php echo $section_image ? "" : "no_bg" ?>" id="content<?php echo $rowIndex ?>">
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
        <?php 
          if($block_title ){
            ?>
              <h3 class="block_title center"><?php echo $block_title ?></h3>
            <?php
          }
        ?>

        <h2 class="section_title center"><span><?php echo $section_title ?></span></h2>
        
        <?php 
          if($section_subtitle ){
            ?>
              <h3 class="block_title center"><?php echo $section_subtitle ?></h3>
            <?php
          }
        ?>
        <div class="points_list <?php echo $point['box_shadow_color'] ? "box_shadow" : "" ?>">
          <?php 
            foreach($points_list as $point ){
              ?>
                <div class="point_item" style="box-shadow: 0 16px 40px <?php echo $point['box_shadow_color'] ?>;">
                  <figure>
                    <img src="<?php echo $point['image']['url'] ?>" alt="<?php echo $point['image']['alt'] ?>">
                  </figure>
                  <div class="point_content">
                    <div class="service_title"><?php echo $point['title'] ?></div>
                    <div class="service_desc"><?php echo $point['desc'] ?></div>
                  </div>
                </div>
              <?php
            }
          ?>
        </div>
        <?php 
          if($section_note){
            ?>
              <div class="section_note"><?php echo $section_note ?></div>
            <?php 
          }
        ?>
      </div>
    </section>
