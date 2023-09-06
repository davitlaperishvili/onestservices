
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_text = get_sub_field('section_text'); 
        $feedbacks_list = get_field('feedbacks_list', 'option');
        
        $rowIndex = get_row_index();
    ?>
    
    <section class="client_feedbacks" id="content<?php echo $rowIndex ?>">
      <div class="container">
        <h2 class="section_title center"><?php echo $section_title ?></h2>
        <?php 
          if($section_subtitle){
            ?>
              <div class="section_subtitle center"><?php echo $section_subtitle ?></div>
            <?php
          }
        ?>
        <div class="feedbacks_content">
          <div class="left_text">
            <div class="text_wrap"><?php echo $section_text ?></div>
          </div>
          <div class="feedbacks_slider swiper">
            <div class="swiper-wrapper">
              <?php 
                foreach($feedbacks_list as $feedback){
                  ?>
                    <div class="swiper-slide">
                      <div class="item_wrap">
                        <div class="feedback_text"><?php echo $feedback['text'] ?></div>
                        <div class="feedback_author">
                          <div class="author_name"><?php echo $feedback['name'] ?></div>
                          <div class="author_status"><?php echo $feedback['status'] ?></div>
                        </div>
                      </div>
                    </div>
                  <?php
                }
              ?>
            </div>
          </div>
          <div class="feedback-pagination"></div>
        </div>
      </div>
    </section>
