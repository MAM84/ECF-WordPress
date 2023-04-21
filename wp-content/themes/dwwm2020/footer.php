    <footer class="main-footer">
        <?php wp_footer(); ?>
		<div class="container">
			<address>
				<strong><?php echo get_field('title_formation', 'option');?></strong><br>
				<?php echo get_field('name_adress_company', 'option');?>
			</address>
			<?php  
				wp_nav_menu(
					array(
						'theme_location' 	=> 'menu-du-footer',
						'container' 		=> 'nav',
						'container_class'	=> 'footer-nav',
						'menu_class'		=> 'menu',
					)							
				);
            ?>
			<?php if ( have_rows('social_network', 'option') ) { ?>
				<nav class="social-nav">
					<ul class="menu">
						<?php while ( have_rows('social_network','option') ) {
							the_row();
							$logo = get_sub_field('logo_social_network'); 
							$link = get_sub_field('link_social_network');
							$link_url = $link['url'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
							<li class="menu-item">
								<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
								<span class="screen-reader-text"><?php the_sub_field('name_social_network'); ?></span>
								<?php echo wp_get_attachment_image( $logo, 'tiny' );?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</nav>
			<?php } ?>
		</div>
	</footer>
</body>
</html>