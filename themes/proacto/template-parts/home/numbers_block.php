<?php $numbers_block = get_sub_field('numbers_block') ?>

<section class="numbers_block__section">
	<div class="container">
		<div class="numbers_block__wrapper">
			<?php if ($numbers_block['title']) { ?>
				<h2><?php echo $numbers_block['title'] ?></h2>
			<?php } ?>
			<?php foreach($numbers_block['items'] as $item) { ?>
				<div class="numbers_block__item">
					<span class="numbers"><?php echo $item['number'] ?></span>
					<span class="accent-title"><?php echo $item['text'] ?></span>
				</div>		
			<?php } ?>
		</div>
	</div>		
</section>