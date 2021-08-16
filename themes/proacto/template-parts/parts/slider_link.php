<?php $title = get_sub_field('title') ?>
<?php $slider_link = get_sub_field('slider_link') ?>

<section class="slider_link__section">
	<div class="container">
		<h2 class="massive-title">
			<?php echo $title ?>
		</h2>
		<?php if ($slider_link['slide']) { ?>
			<div class="slider_link__wrapper">
				<?php foreach ($slider_link['slide'] as $item) {?>
					<div class="slider_link__item">
						<h3 class="section-title">
							<?php echo $item['title'] ?>
						</h3>
						<p class="text">
							<?php echo $item['text'] ?>
						</p>
						<a class="orange-button" target="<?php echo $item['button']['target']?>" href="<?php echo $item['button']['url'] ?>">
							<?php echo $item['button']['title'] ?>
						</a>
						<img src="<?php echo esc_url($item['image']['url']) ?>" alt="<?php echo esc_attr( $item['image']['alt'] ) ?>">
					</div>	
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</section>