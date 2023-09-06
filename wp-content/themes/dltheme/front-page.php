<?php 
    //Template Name: Page Builder
?>
<?php get_header(); ?>

<main class="home_page">
    <?php 
        if( have_rows('homepage') ):

            // Loop through rows.
            while ( have_rows('homepage') ) : the_row();
        
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

                endif;
            endwhile;
        
        else :
        endif;
    ?>
</main>

<?php get_footer(); ?>