<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scaletopia
 */

?>
<!-- Modal -->
<div id="modal" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<h3>Output</h3>
			<button id="close-modal" class="close-btn">

				<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="32" height="32" rx="16" fill="white" fill-opacity="0.1" />
					<path d="M10 21L21.3137 9.68629" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M10 10L21.3137 21.3137" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
				</svg>

			</button>
		</div>
		<div class="modal-body">
			<table>
				<thead>
					<tr>
						<th>Value</th>
						<th>Upper side</th>
						<th>Lower side</th>
					</tr>
				</thead>
				<tbody id="output-data">
					<!-- Data will be dynamically populated -->
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- Footer -->
<footer>
	<div class="container">
		<div class="footer-wrapper">
			<div class="top-wrapper">
				<div class="left-part">
					<a href="index.html" class="logo">
						<img src="<?php echo get_template_directory_uri() ?>/src/img/logo.svg" alt="Logo" />
					</a>
				</div>
				<div class="right-part">
					<div class="footer-menu">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'menu_id'        => 'footer-menu',
								'menu_class'     => 'footer-menu',
							)
						);
						?>
					</div>
				</div>
			</div>
			<div class="bottom-wrapper">
				<div class="left-part">
					<p>
						<?php
						$footer_description = carbon_get_theme_option('scaletopia_footer_description');
						echo $footer_description;
						?>
					</p>
				</div>
				<div class="right-part">
					<h4>Contact</h4>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri() ?>/src/img/contact.svg" alt="contact" />
							<a href="tel:<?php echo carbon_get_theme_option('scaletopia_phone'); ?>">
								Phone:
								<?php echo carbon_get_theme_option('scaletopia_phone'); ?>
							</a>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri() ?>/src/img/maill.svg" alt="contact" />
							<a href="mailto:<?php echo carbon_get_theme_option('scaletopia_email'); ?>">
								Email: <?php echo carbon_get_theme_option('scaletopia_email'); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="copyright text-center">
				<p>
					©<?php echo date('Y') . ' ' . carbon_get_theme_option('scaletopia_footer'); ?>
				</p>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>

</body>

</html>