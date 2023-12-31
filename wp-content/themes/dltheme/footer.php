<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$socials = get_field('socials', 'option');
	$column_menu = get_field('column_menu', 'option');
	$footer_menu = get_field('footer_menu', 'option');
	$copyright = get_field('copyright', 'option');
	$office_address = get_field('office_address', 'option');
	$register_modal_text = get_field('register_modal_text', 'option');
?>
<footer class="trans-all-4">
  <div class="footer_wrap">
    <div class="container">
      <div class="footer_columns">
        <div class="column">
          <div class="column_title">Contact us</div>
          <div class="footer_contact_info">
            <div class="info_item">
              <div class="svg_wrap">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.9">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.26135 17.3176L10.3744 14.2041C10.8085 13.7699 11.3522 13.5664 11.9646 13.6085C12.577 13.6507 13.0877 13.9271 13.4581 14.4166L18.0679 20.5097C18.6893 21.331 18.611 22.4676 17.8827 23.1959L15.7252 25.3537C19.0452 28.1764 21.8211 30.9536 24.6433 34.2735L26.8013 32.1152C27.5296 31.3868 28.666 31.3086 29.4872 31.9301L35.5794 36.5405C36.0689 36.9109 36.3452 37.4216 36.3874 38.0341C36.4296 38.6466 36.226 39.1904 35.7919 39.6245L32.6783 42.7385C25.5089 49.909 0.0917082 24.4882 7.26135 17.3176ZM33.8537 6C39.4572 6 43.9997 10.2467 43.9997 15.4854C43.9997 20.724 39.4572 24.9707 33.8537 24.9707C31.9295 24.9707 30.1305 24.4699 28.5975 23.6002C27.3492 24.1528 26.0098 24.3125 24.728 24.123C25.208 23.2144 25.5656 22.2462 25.7915 21.2437C24.4847 19.647 23.7077 17.6511 23.7077 15.4854C23.7077 10.2467 28.2502 6 33.8537 6Z" stroke="white" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M33.8308 20.0547V14.4339H32.5506M32.4907 20.1118H35.171M33.8308 10.73V10.759" stroke="white" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                </svg>
              </div>
              <div class="info_content">
                <div class="info_title">Hotline:</div>
                <div class="info_value">
                  <a href="tel:<?php echo $phone ?>"><?php echo $phoneVisible ?></a>
                </div>
              </div>
            </div>
            <div class="info_item">
              <div class="svg_wrap">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.9">
                  <mask id="mask0_260_2400" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="6" y="6" width="39" height="38">
                  <path d="M43.5001 43.5V6.49987H6.5V43.5H43.5001Z" fill="white" stroke="white"/>
                  </mask>
                  <g mask="url(#mask0_260_2400)">
                  <path d="M27.1877 21.4998C27.1877 23.358 26.0474 24.7495 24.682 24.7495C23.3168 24.7495 22.1094 23.3773 22.1094 21.5191C22.1094 19.6609 23.3839 18.4228 24.7492 18.4228C26.1145 18.4228 27.1877 19.6416 27.1877 21.4998Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M24.8679 27.8945C22.1523 27.8194 19.6762 25.9815 18.941 23.1859C18.0924 19.9591 19.9484 16.5889 23.1277 15.5769C26.4902 14.5065 30.0663 16.3982 31.0823 19.7644C31.4418 21.1114 31.232 22.2832 30.7556 23.481C30.5667 23.956 29.9438 25.0679 28.558 25.0679C27.8015 25.0679 27.1707 24.3429 27.1749 23.5078L27.2023 17.9739" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M31.0828 19.7644C31.4423 21.1113 31.2325 22.2831 30.7561 23.481" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M30.3659 11.5664L24.9998 7.11327L19.6338 11.5664" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12.3828 17.5839L7.11328 21.957V42.8867H42.8868V21.957L37.6173 17.5839" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M25 33.0898L37.6173 25.2368V11.5663H12.3828V25.2368L25 33.0898Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M42.8868 21.957L25.0001 33.0898L7.11328 21.957V42.8867H42.8868V21.957Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  </g>
                </svg>
              </div>
              <div class="info_content">
                <div class="info_title">Email:</div>
                <div class="info_value">
                  <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
          if($office_address ){
            ?>
            <div class="column middle_column">
              <div class="column_title">Office Address</div>
              <div class="footer_contact_info">
                <?php 
                  foreach($office_address as $addressItem){
                    ?>
                      <div class="info_item">
                        <div class="info_content">
                          <div class="info_title"><?php echo $addressItem['item_header'] ?>:</div>
                          <div class="info_value"><?php echo $addressItem['item_value'] ?></div>
                        </div>
                      </div>
                    <?php
                  }
                ?>
              </div>
            </div>
            <?php
          }
        ?>
        <?php 
          if($column_menu ){
            ?>
              <div class="column">
                <div class="column_title">Our Company</div>
                <div class="footer_url_list">
                  <ul>
                    <?php 
                      foreach($column_menu as $item){
                        ?>
                          <li>
                            <a href="<?php echo $item['menu_item']['url'] ?>"><?php echo $item['menu_item']['title'] ?></a>
                          </li>
                        <?php
                      }
                    ?>
                  </ul>
                </div>
              </div>
            <?php
          }
        ?>

        <div class="column">
          <div class="footer_socuals_list">
            <div class="socials">
              <ul>
                <?php 
                  if($socials['facebook']){
                    ?>
                      <li>
                        <a href="<?php echo $socials['facebook'] ?>">
                          <i class="ri-facebook-fill"></i>
                        </a>
                      </li>
                    <?php
                  }
                ?>
                <?php 
                  if($socials['twitter']){
                    ?>
                      <li>
                        <a href="<?php echo $socials['twitter'] ?>">
                          <i class="ri-twitter-fill"></i>
                        </a>
                      </li>
                    <?php
                  }
                ?>
                
                <?php 
                  if($socials['linkedin']){
                    ?>
                      <li>
                        <a href="<?php echo $socials['linkedin'] ?>">
                          <i class="ri-linkedin-fill"></i>
                        </a>
                      </li>
                    <?php
                  }
                ?>
                <?php 
                  if($socials['instagram']){
                    ?>
                      <li>
                        <a href="<?php echo $socials['instagram'] ?>">
                          <i class="ri-instagram-fill"></i>
                        </a>
                      </li>
                    <?php
                  }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php 
        if($footer_menu){
          ?>
          <div class="footer_menu">
            <ul>
              <?php 
                foreach($footer_menu as $menuItem ){
                  ?>
                    <li>
                      <a href="<?php echo $menuItem['menu_item']['url'] ?>"><?php echo $menuItem['menu_item']['title'] ?></a>
                    </li>
                  <?php
                }
              ?>
            </ul>
          </div>
          <?php
        }
      ?>
      <div class="copyright"><?php echo $copyright ?></div>
    </div>
  </div>
</footer>
<div class="modal micromodal-slide" id="modal-register" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close>
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-call">
      <div class="modal-content-content">
      <button class="modal__close_icon close_register" aria-label="Close modal" data-micromodal-close></button>
        <div class="modal__content">
          <section class="register_form micro_modal">
            <div class="contact_container">
              <div class="section_title center"><span><?php echo $register_modal_text['title'] ?></span></div>
              <div class="section_subtitle center"><?php echo $register_modal_text['subtitle'] ?></div>
              <div class="form_wrap">
              <?php echo do_shortcode('[contact-form-7 id="9a72666" title="Register Form"]') ?>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal micromodal-slide" id="modal-register2" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close>
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-call">
      <div class="modal-content-content">
      <button class="modal__close_icon close_register2" aria-label="Close modal" data-micromodal-close></button>
        <div class="modal__content">
          <section class="register_form micro_modal">
            <div class="contact_container grid">
              <figure>
                <img src="<?php echo $register_modal_text['modal_image']['url'] ?>" alt="<?php echo $register_modal_text['modal_image']['alt'] ?>">
              </figure>
              <div class="modal_content_wrap">
                <div class="section_title center"><span><?php echo $register_modal_text['title'] ?></span></div>
                <div class="section_subtitle center"><?php echo $register_modal_text['subtitle'] ?></div>
                <div class="form_wrap">
                  <?php echo do_shortcode('[contact-form-7 id="9a72666" title="Register Form"]') ?>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>