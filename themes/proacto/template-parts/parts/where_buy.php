<?php $where_buy = get_field('where_buy', 'option') ?>

<section class="where_buy__section">
	<div class="container">
		<div class="where_buy__content">
			<div class="where_buy__text">
				<h2><?php echo $where_buy['title'] ?></h2>
				<p class="text"><?php echo $where_buy['text'] ?></p>
				<img class="mobile" src="<?php echo esc_url($where_buy['image']['url']) ?>" alt="<?php echo esc_attr($where_buy['image']['alt']) ?>">
				<?php echo do_shortcode('[contact-form-7 id="'. $where_buy['contact'][0] .'"]') ?>
			</div>
			<img class="desktop" src="<?php echo esc_url($where_buy['image']['url']) ?>" alt="<?php echo esc_attr($where_buy['image']['alt']) ?>">
		</div>
		<div class="where_buy__contacts">
			<div class="where_buy__head">
				<h3><?php the_field('adresa_golovnogo_ofisu_u_lvovi', 'options') ?></h3>
				<a href="tel:<?php echo $where_buy['head_phone'] ?>" class="accent-title head_phone"><?php echo $where_buy['head_phone'] ?></a>
				<a href="mailto:<?php echo $where_buy['head_email'] ?><" class="accent-title head_email"><?php echo $where_buy['head_email'] ?></a>
				<a href="<?php echo $where_buy['head_google_maps'] ?>" target="_blank" class="accent-title head_address"><?php echo $where_buy['head_address'] ?></a>
			</div>
			<div class="where_buy_children">
				<h3><?php the_field('predstavnycztva_limestone_ukraine_v_inshyh_mistah', 'options') ?></h3>
				<?php $counter = 0 ?>
				<?php foreach($where_buy['head_children'] as $child){ ?>
					<?php $class = $counter==0 ? 'active' : '' ?>
					<button data-trigger="<?php echo $counter ?>" class="open_city_popoup grey-button"><?php echo $child['city'] ?></button>
					<?php $counter++ ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="where_buy__popup__wrapper popup">
		<div class="where_buy__popup">
			<h3 class="block-title"><?php the_field('predstavnycztva_limestone_ukraine_v_inshyh_mistah', 'options') ?></h3>
			<button class="popup_close">
				<span class="line"></span>
				<span class="line"></span>
			</button>
			<div class="where_buy__tabs_control_wrap">
				<div class="where_buy__tabs_control">
					<?php $counter = 0 ?>
					<?php foreach($where_buy['head_children'] as $child){ ?>
						<?php $class = $counter==0 ? 'active' : '' ?>
						<button data-trigger="<?php echo $counter ?>" class="<?php echo $class ?> open_city_popoup grey-button"><?php echo $child['city'] ?></button>
						<?php $counter++ ?>
					<?php } ?>
				</div>
			</div>
			<div class="where_buy__tabs">
				<?php $counter = 0 ?>
				<?php foreach($where_buy['head_children'] as $child){ ?>
					<div data-tab="<?php echo $counter ?>" class="where_buy__tab">
						<h3 class="accent-title"><?php echo count($child['contacts_child']) . ' ' . get_field('predsavnycztva_v_misti', 'option') . ' ' . $child['city'] ?></h3>
						<div class="where_buy__child_contacts">
							<?php foreach($child['contacts_child'] as $contact){ ?>
								<div class="where_buy__child_contact">
									<a href="tel:<?php echo $where_buy['head_phone'] ?>" class="accent-title head_phone"><?php echo $where_buy['head_phone'] ?></a>
									<a href="mailto:<?php echo $where_buy['head_email'] ?><" class="accent-title head_email"><?php echo $where_buy['head_email'] ?></a>
									<a href="<?php echo $where_buy['head_google_maps'] ?>" target="_blank" class="accent-title head_address"><?php echo $where_buy['head_address'] ?></a>
								</div>
							<?php } ?>
						</div>
					</div>
					<?php $counter++ ?>
				<?php } ?>
			</div>
		</div>
	</div>
</section>