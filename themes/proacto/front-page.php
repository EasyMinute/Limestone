<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proacto
 */

get_header();


if( have_rows('content') ):
    while ( have_rows('content') ) : the_row();


        if( get_row_layout() == 'baner' ):
            get_template_part('/template-parts/parts/baner-slider');

        elseif( get_row_layout() == 'pros' ): 
            get_template_part('/template-parts/parts/icons_text_block');

        elseif( get_row_layout() == 'top_textures' ): 
            get_template_part('/template-parts/parts/tiles');

        elseif( get_row_layout() == 'services' ): 
            get_template_part('/template-parts/parts/slider_link');

        elseif( get_row_layout() == 'products' ): 
            get_template_part('/template-parts/parts/icons_text_block');
            get_template_part('/template-parts/parts/tiles');

        elseif( get_row_layout() == 'testimonials' ): 
            get_template_part('/template-parts/parts/testi_slider');

        elseif( get_row_layout() == 'where_to_buy' ): 
            get_template_part('/template-parts/parts/where_buy');

        elseif( get_row_layout() == 'about' ): 
            get_template_part('/template-parts/parts/round_image');
            get_template_part('/template-parts/home/numbers_block');

        elseif( get_row_layout() == 'cooperation' ): 
            get_template_part('/template-parts/parts/slider_link');

        endif;


    endwhile;
else :

endif;



get_footer();
