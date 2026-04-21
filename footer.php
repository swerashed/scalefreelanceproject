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

			<!-- Footer top / CTA header -->
			<div class="footer-top">
				<div class="footer-top-left">
					<a href="/" class="footer-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" alt="Scaletopia" />
					</a>
					<h2 class="footer-top-title">Predictable Pipeline.<br><span>For Marketing Agencies.</span></h2>
					<a href="#" class="animated-button"><span>Apply for 30-day pilot</span></a>
				</div>
				<div class="footer-top-right">
					<p>Scaletopia is the outbound infrastructure built exclusively for marketing agencies. We don't just run lead gen — we build and operate the full system: signal-based targeting in Clay, AI-personalised email and SMS sequences, and isolated sending infrastructure that protects your domain. The result is qualified meetings on your calendar every week. Apply for a 30-day performance-backed pilot to see what we can do for your agency.</p>
				</div>
			</div><!-- .footer-top -->

			<div class="footer-columns">

				<!-- Company -->
				<div class="footer-col">
					<h5 class="footer-col-heading">Company</h5>
					<ul class="footer-nav">
						<li><a href="#">Book a demo</a></li>
						<li><a href="#">Pricing</a></li>
						<li><a href="#">Partnerships</a></li>
					</ul>
				</div>

				<!-- Case Studies (col 1) -->
				<div class="footer-col">
					<h5 class="footer-col-heading">Case Studies</h5>
					<ul class="footer-nav">
						<li><a href="#">All case studies</a></li>
						<li><a href="#">Chamber Media</a></li>
						<li><a href="#">VELOX Media</a></li>
						<li><a href="#">Firecracker PR</a></li>
						<li><a href="#">Pkwna</a></li>
						<li><a href="#">LoadGenix</a></li>
					</ul>
				</div>

				<!-- Case Studies (col 2 — no heading) -->
				<div class="footer-col footer-col--no-heading">
					<ul class="footer-nav">
						<li><a href="#">GrowthLab SEO</a></li>
						<li><a href="#">Digital Resource</a></li>
						<li><a href="#">Bad Marketing</a></li>
						<li><a href="#">Wise Digital</a></li>
						<li><a href="#">Accelor8</a></li>
					</ul>
				</div>

				<!-- Socials -->
				<div class="footer-col">
					<h5 class="footer-col-heading">Socials</h5>
					<ul class="footer-nav footer-socials">
						<li>
							<a href="https://linkedin.com/company/scaletopia" target="_blank" rel="noopener noreferrer">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="20" height="20" rx="4" fill="#0A66C2"/>
									<path d="M5.5 8H7.5V14.5H5.5V8ZM6.5 7C5.95 7 5.5 6.55 5.5 6C5.5 5.45 5.95 5 6.5 5C7.05 5 7.5 5.45 7.5 6C7.5 6.55 7.05 7 6.5 7ZM9 8H10.9V8.9H10.93C11.18 8.44 11.78 7.95 12.67 7.95C14.7 7.95 15.07 9.26 15.07 10.99V14.5H13.07V11.39C13.07 10.66 13.06 9.73 12.06 9.73C11.05 9.73 10.9 10.52 10.9 11.34V14.5H9V8Z" fill="white"/>
								</svg>
								LinkedIn
							</a>
						</li>
						<li>
							<a href="https://youtube.com/@scaletopia" target="_blank" rel="noopener noreferrer">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="20" height="20" rx="4" fill="#FF0000"/>
									<path d="M15.8 7.2C15.6 6.5 15.1 5.9 14.4 5.7C13.1 5.4 10 5.4 10 5.4C10 5.4 6.9 5.4 5.6 5.7C4.9 5.9 4.4 6.5 4.2 7.2C4 8.5 4 10 4 10C4 10 4 11.5 4.2 12.8C4.4 13.5 4.9 14.1 5.6 14.3C6.9 14.6 10 14.6 10 14.6C10 14.6 13.1 14.6 14.4 14.3C15.1 14.1 15.6 13.5 15.8 12.8C16 11.5 16 10 16 10C16 10 16 8.5 15.8 7.2ZM8.5 12.1V7.9L11.9 10L8.5 12.1Z" fill="white"/>
								</svg>
								YouTube
							</a>
						</li>
					</ul>
				</div>

				<!-- Contact -->
				<div class="footer-col">
					<h5 class="footer-col-heading">Contact</h5>
					<div class="footer-contact">
						<a href="mailto:team@scaletopia-agency.com" class="footer-email">team@scaletopia-agency.com</a>
						<div class="footer-address">
							<strong>USA</strong>
							<p>30 N Gould St, STE R<br>Sheridan, WY 82801</p>
						</div>
						<div class="footer-address">
							<strong>Dubai</strong>
							<p>Building A1, Dubai Digital Park<br>Dubai Silicon Oasis, UAE</p>
						</div>
					</div>
				</div>

			</div><!-- .footer-columns -->

			<!-- Bottom bar -->
			<div class="footer-bottom">
				<p class="footer-copyright">&copy;<?php echo date('Y'); ?> Scaletopia. All rights reserved.</p>
				<ul class="footer-legal">
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms of Service</a></li>
				</ul>
			</div>

		</div><!-- .footer-wrapper -->
	</div>
</footer>
</div>
<?php wp_footer(); ?>

</body>

</html>