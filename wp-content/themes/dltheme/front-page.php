<?php 
    //Template Name: Page Builder
?>
<?php get_header(); ?>

<main class="home_page">
    <?php 
        if( have_rows('page_sections') ):

            // Loop through rows.
            while ( have_rows('page_sections') ) : the_row();
        
                // Case: Paragraph layout.
                if( get_row_layout() == 'hero' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-hero.php');
                
                elseif( get_row_layout() == 'hero_inside' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-hero_inside.php');
                
                elseif( get_row_layout() == 'text_block' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-text_block.php');
                
                elseif( get_row_layout() == 'why_us' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-why_us.php');
                
                elseif( get_row_layout() == 'steps' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-steps.php');
                
                elseif( get_row_layout() == 'prices' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-prices.php');

                elseif( get_row_layout() == 'our_services' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-our_services.php');

                elseif( get_row_layout() == 'feedbacks' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-feedbacks.php');

                elseif( get_row_layout() == 'areas' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-areas.php');

                elseif( get_row_layout() == 'list_points' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-list_points.php');

                elseif( get_row_layout() == 'banner' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-banner.php');

                elseif( get_row_layout() == 'service_prices' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-service_prices.php');

                elseif( get_row_layout() == 'contact_info' ):
                  include(TEMPLATEPATH.'/acf-widgets/widget-contact_info.php');
                  

                elseif( get_row_layout() == 'contact_form' ):
                  include(TEMPLATEPATH.'/acf-widgets/widget-contact_form.php');
                  

                elseif( get_row_layout() == 'clients' ):
                  include(TEMPLATEPATH.'/acf-widgets/widget-clients.php');

                endif;
            endwhile;
        
        else :
        endif;
    ?>
</main>

<?php get_footer(); ?>