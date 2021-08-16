<?php $icons_text = get_sub_field('icons_text_block') ?>
<section class="icons_text__section">
	<div class="container">
		<?php if ($icons_text['title']) { ?>
			<h2 class="massive-title">
				<?php echo $icons_text['title'] ?>
			</h2>
		<?php } ?>
		<div class="icons_text__wrapper">
			<?php if ($icons_text) { ?>
				<?php foreach ($icons_text['block'] as $block) { ?>
					<?php if($block['link']){ ?>
						<a href="<?php echo $block['link'] ?>" class="icons_text__block">
							<img src="<?php echo esc_url($block['icon']['url']) ?>" alt="<?php echo esc_attr($block['icon']['alt']) ?>">
							<div class="icons_text__content">
								<?php if($block['text']){ ?>
									<h3 class="accent-title"><?php echo $block['text'] ?></h3>
								<?php } ?>
								<?php if($block['description']){ ?>
									<p class="text"><?php echo $block['description']?></p>
								<?php } ?>
							</div>
						</a>
					<?php } else { ?>
						<div class="icons_text__block">
							<img src="<?php echo esc_url($block['icon']['url']) ?>" alt="<?php echo esc_attr($block['icon']['alt']) ?>">
							<div class="icons_text__content">
								<?php if($block['text']){ ?>
									<h3 class="accent-title"><?php echo $block['text'] ?></h3>
								<?php } ?>
								<?php if($block['description']){ ?>
									<p class="text"><?php echo $block['description']?></p>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		</div>		
	</div>
</section>