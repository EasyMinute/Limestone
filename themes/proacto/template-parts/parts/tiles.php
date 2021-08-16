<?php $tiles = get_sub_field('tiles') ?>
<section class="tiles__section">
	<div class="container">
		<div class="tiles__wrapper">
			<h2><?php echo $tiles['title']?></h2>
			<?php if ($tiles['posts']) { ?>
				<div class="tiles__posts">
					<?php foreach($tiles['posts'] as $post) { ?>
						<?php setup_postdata( $post ) ?>

						<a href="<?php echo get_the_permalink( $post ) ?>" class="tiles__post">
							<img src="<?php echo get_the_post_thumbnail_url( $post ) ?>" alt="<?php echo get_the_post_thumbnail_caption( $post ) ?>">
							<h3 class="accent-title"><?php echo get_the_title( $post ) ?></h3>

							<?php 
								$product = wc_get_product(get_the_ID());
				
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

						</a>

					<?php } ?>
					<?php wp_reset_postdata() ?>
				</div>
			<?php } ?>
			<?php if ($tiles['button']){ ?>
				<a href="<?php echo $tiles['button']['url'] ?>" class="orange-button">
					<?php echo $tiles['button']['title'] ?>
				</a>
			<?php } ?>
				
		</div>	
	</div>
</section>