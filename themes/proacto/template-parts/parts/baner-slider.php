<?php $baner = get_sub_field('baner_slider'); ?>
<section class="baner_slider">
	<div class="baner_slider_wrap">
		<?php if($baner['slide']){ ?>
			<?php foreach ($baner['slide'] as $slide) { ?>
				<div class="baner_slide">
					<?php if($slide['subtitle']){ ?>
						<h3 class="text">
							<?php echo $slide['subtitle'] ?>
						</h3>
					<?php } ?>
					<h2 class="page-title">
						<?php echo $slide['title'] ?>
					</h2>
					<a href="<?php echo $slide['button']['url'] ?>" class="orange-button">
						<?php echo $slide['button']['title'] ?>
					</a>
					<img src="<?php echo esc_url($slide['image']['url']) ?>" alt="<?php echo esc_attr($slide['image']['alt']) ?>">
				</div>		
			<?php } ?>
		<?php } ?>
	</div>		
</section>