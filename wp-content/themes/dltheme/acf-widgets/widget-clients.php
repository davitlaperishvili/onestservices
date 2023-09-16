
   <?php  
        $section_title = get_sub_field('section_title'); 
        $clients_list = get_sub_field('clients_list'); 
        
        $rowIndex = get_row_index();
    ?>
    <section class="clients"  id="content<?php echo $rowIndex ?>">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/images/clients_bg.png" alt="">
      </figure>
      <div class="container">
        <div class="clients_wrap">
          <?php 
            if($section_title){
              ?>
                <div class="section_subtitle center"><?php echo $section_title ?></div>
              <?php
            }
          ?>
          <div class="clients_list">
            <?php 
              foreach($clients_list as $client ) {
                ?>
                  <div class="client_item">
                    <figure>
                      <img src="<?php echo $client['img']['url'] ?>" alt="<?php echo $client['img']['alt'] ?>">
                    </figure>
                  </div>
                <?php 
              }
            ?>
          </div>
        </div>
      </div>
    </section>
