<?php $testi_slider = get_sub_field('testi_slider') ?>

<section class="testi_slider__section">
	<div class="container">
		<?php if($testi_slider['title']){ ?>
			<h2 class="massive-title">
				<?php echo $testi_slider['title'] ?>
			</h2>
		<?php } ?>
		<?php if($testi_slider['slide']){ ?>
			<div class="testi_slider__wrapper">
				<?php foreach($testi_slider['slide'] as $slide) { ?>
					<div class="testi_slide">
						<h3 class="section-title"><?php echo $slide['text'] ?></h3>
						<div class="testi_slide__meta">
							<img src="<?php echo esc_url( $slide['photo']['url'] ) ?>" alt="<?php echo esc_attr( $slide['photo']['alt'] ) ?>">
							<div class="testi_slide__author">
								<h4 class="accent-title"><?php echo $slide['author'] ?></h4>
								<span class="text"><?php echo $slide['role'] ?></span>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</section>