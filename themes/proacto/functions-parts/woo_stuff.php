<?php 
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce',  array(

        'product_grid'          => array(
            'default_columns' => 3,
            'min_columns'     => 2,
            'max_columns'     => 3,
        ),
	)  );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price' );

add_action('woocommerce_after_shop_loop_item_title', 'prt_product_item_description');

function prt_product_item_description(){
		$product = wc_get_product(get_the_ID());
	?>
		<div class="product_meta">
			<p class="text">
				<?php echo $product->short_description ?>
			</p>
	<?php
			$variations = $product->get_available_variations();
			$last= count($variations)-1;
			foreach($variations as $number => $variation){
				if ($number == 0 || $number == $last) {
					$variation_for_name = new WC_Product_Variation($variation['variation_id']);
				$variationName = implode(" / ", $variation_for_name->get_variation_attributes());
				
	?>
					<span class="product__var">
						<span class="text var_name"><?php echo $variationName ?></span>
						<span class="text var_price"><?php echo $variation['price_html'] ?></span>
					</span>
	<?php	
				}
			}
	?>
		</div>
	<?php
}

add_action('woocommerce_before_shop_loop', 'prt_category_name', 20);

function prt_category_name(){
	echo "<h2 class='massive-title'>";
	single_cat_title( '', true );
	echo "</h2>";
	echo "<div class='mobile filter_trigger'>";
	echo "<h3>". get_field('filtr', 'options') ."</h3>";
	echo "<span class='text'>" . wc_get_loop_prop( 'total' ) . " " . get_field('tovariv', 'options') . "<span>";
	echo "</div>";
}


add_action('woocommerce_before_shop_loop', 'prt_filter', 40);

function prt_filter(){
	echo '<div class="filter_wrap">';

	echo "<h3>". get_field('filtr', 'options') ."</h3>";

	echo "<h4>". get_field('znyzhka', 'options') ."</h4>";
	echo do_shortcode('[facetwp facet="sale"]' );

	echo "<h4>". get_field('pryznachennya', 'options') ."</h4>";
	echo do_shortcode('[facetwp facet="purpose"]' );

	echo "<h4>". get_field('stupin_glyanczyu', 'options') ."</h4>";
	echo do_shortcode('[facetwp facet="gloss_level"]' );

	echo "<h4>". get_field('klas_stijkosti', 'options') ."</h4>";
	echo do_shortcode('[facetwp facet="satability_class"]' );

	echo "<h4>". get_field('typ_prymishhennya', 'options') ."</h4>";
	echo do_shortcode('[facetwp facet="room_type"]' );

	echo "<h4>". get_field('typ_poverhni', 'options') ."</h4>";
	echo do_shortcode('[facetwp facet="surface_type"]' );

	echo "<h4>". get_field('obyekt_farbuvannya', 'options') ."</h4>";
	echo do_shortcode('[facetwp facet="painting_object"]' );

	echo '</div>';
}

add_filter('woocommerce_sale_flash', 'lw_hide_sale_flash');
function lw_hide_sale_flash()
{
	return false;
}


?>
