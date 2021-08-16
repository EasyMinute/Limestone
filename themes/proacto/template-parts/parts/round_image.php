<?php $round_image = get_sub_field('round_image_block') ?>

<section class="round_image__section">
	<div class="container">
		<div class="round_image__wrap">
			<?php if ($round_image['subtitle']) { ?>
				<span class="massive-title">
					<?php echo $round_image['subtitle'] ?>
				</span>
			<?php } ?>
			<div class="round_image__text">
				<h2><?php echo $round_image['title'] ?></h2>
				<p class="text"><?php echo $round_image['text'] ?></p>
				<?php if ($round_image['link_or_file'] && $round_image['button']) { ?>
					<a class="orange-button" href="<?php echo $round_image['button']['url'] ?>">
						<?php echo $round_image['button']['title'] ?>
					</a>
				<?php } elseif ($round_image['file'] && !$round_image['link_or_file']) { ?>
					<a class="download-button" href="<?php echo $round_image['button']['url'] ?>" download>
						<?php echo $round_image['file_button'] ?>
					</a>
				<?php }?>
			</div>
			<img class="round_image_img" src="<?php echo esc_url( $round_image['image']['url'] ) ?>" alt="<?php echo esc_attr( $round_image['image']['alt'] ) ?>">
		</div>
	</div>			
</section>