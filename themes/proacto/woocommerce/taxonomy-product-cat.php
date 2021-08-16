<?php get_header() ?>

<?php
$queried_object = get_queried_object();
$post_id = $queried_object->taxonomy.'_'.$queried_object->term_id;
if( have_rows('content', $post_id) ):
    while ( have_rows('content', $post_id) ) : the_row();


        if( get_row_layout() == 'baner' ):
            get_template_part('/template-parts/parts/baner-slider');

        elseif( get_row_layout() == 'products' ): 
            get_template_part('/template-parts/shop/products');
            // wc_get_template( 'archive-product.php' );

        elseif( get_row_layout() == 'where_to_buy' ): 
            get_template_part('/template-parts/parts/where_buy');


        endif;


    endwhile;
else :

endif;
?>
<?php get_footer() ?>