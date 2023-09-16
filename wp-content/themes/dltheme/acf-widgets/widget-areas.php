
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_style = get_sub_field('section_style'); 
        $is_links = get_sub_field('is_links'); 
        $no_extra_space = get_sub_field('no_extra_space') ? "no_space" : ""; 
        $areas_list = get_field('areas_list', 'option');
        
        $rowIndex = get_row_index();
    ?>
    
    <section class="areas <?php echo $no_extra_space ?>"  id="content<?php echo $rowIndex ?>">
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
            if($section_style === "slider"){
              ?>
              <div class="area_slider_wrap">
                <div class="areas_slider swiper">
                  <div class="swiper-wrapper">
                    <?php 
                      foreach($areas_list as $area ){
                        ?>
                          <div class="swiper-slide">
                            <div class="area">
                              <?php 
                                if($area['url'] && $is_links){
                                  ?>
                                    <a href="<?php echo $area['url'] ?>"></a>
                                  <?php
                                }
                              ?>
                              <figure>
                                <img src="<?php echo $area['image']['url'] ?>" alt="<?php echo $area['image']['alt'] ?>">
                              </figure>
                              <div class="area_title"><?php echo $area['title'] ?></div>
                            </div>
                          </div>
                        <?php
                      }
                    ?>
                  </div>
                </div>
                <div class="area-navigation">
                  <div class="swiper-button-prev area-arrow prev">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23 11L28 16M28 16L23 21M28 16H4" stroke="#1C1C1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                  <div class="swiper-button-next area-arrow next">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23 11L28 16M28 16L23 21M28 16H4" stroke="#1C1C1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>
              </div>
              <?php
            } elseif($section_style === "list"){
              ?>
                <div class="areas_list">
                  <?php 
                    foreach($areas_list as $areaItem){
                      ?>
                        <div class="area">
                          <?php 
                            if($areaItem['url'] && $is_links){
                              ?>
                                <a href="<?php echo $areaItem['url'] ?>"></a>
                              <?php
                            }
                          ?>
                          <figure>
                            <img src="<?php echo $areaItem['image']['url'] ?>" alt="<?php echo $areaItem['image']['alt'] ?>">
                          </figure>
                          <div class="area_content">
                            <div class="area_title"><?php echo $areaItem['title'] ?></div>
                            <?php 
                              if($section_style === "list" && $areaItem['desc']){
                                ?>
                                <div class="area_desc"><?php echo $areaItem['desc'] ?></div>
                                <?php
                              }
                            ?>
                          </div>
                        </div>
                      <?php
                    }
                  ?>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
    </section>
