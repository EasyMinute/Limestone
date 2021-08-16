<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proacto
 */

?>
    </main>
	<footer id="colophon" class="site-footer">
		<div class="container site-info">
            <div class="footer_head">
                <h2><?php echo get_field('name_company', 'options') ?></h2>
            </div>
            <div class="footer_main">
                <div class="footer_content">
                    <nav class="footer_menus">
                        <?php wp_nav_menu(
                            array(
                                'menu' => 'service_foot',
                                'container_class' => 'fam_menu',
                            )
                        ); ?>
                        <?php wp_nav_menu(
                            array(
                                'menu' => 'shop_foot',
                                'container_class' => 'fam_menu',
                            )
                        ); ?>
                        <?php wp_nav_menu(
                            array(
                                'menu' => 'foot_menu',
                                'container_class' => 'communist_menu',
                            )
                        ); ?>
                    </nav>
                    <div class="footer_contacts">
                        <a class="text footer-phone" href="tel:<?php echo get_field('company_phone', 'options') ?>">
                            <?php echo get_field('company_phone', 'options') ?>
                        </a>
                        <a class="text footer-address" target="_blank" href="<?php echo get_field('company_google_mas', 'options') ?>">
                            <?php echo get_field('company_address', 'options') ?>
                        </a>
                        <a class="text footer-mail" href="mailto:<?php echo get_field('company_email', 'options') ?>">
                            <?php echo get_field('company_email', 'options') ?>
                        </a>
                    </div>
                    <div class="footer_socials">
                        <a class="social-link" target="_blank" href="<?php echo get_field('company_fb', 'options') ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/fb.svg" alt="facebook-icon">
                        </a>
                        <a class="social-link" target="_blank" href="<?php echo get_field('company_inst', 'options') ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/inst.svg" alt="instagram-icon">
                        </a>
                        <a class="social-link" target="_blank" href="<?php echo get_field('company_ytb', 'options') ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/ytb.svg" alt="youtube-icon">
                        </a>
                    </div>
                </div>
                <?php if (get_field('company_contact', 'options')) { ?>
                    <div class="footer_form">
                        <p class="text">
                            <?php echo get_field('company_text', 'options') ?>
                        </p>
                        <?php echo do_shortcode('[contact-form-7 id="'. get_field('company_contact', 'options')[0] .'"]') ?>
                    </div>          
                <?php } ?>      
            </div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
