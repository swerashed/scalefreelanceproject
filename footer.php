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
					<path d="M10 21L21.3137 9.68629" stroke="white" stroke-width="1.5" stroke-linecap="round"
						stroke-linejoin="round" />
					<path d="M10 10L21.3137 21.3137" stroke="white" stroke-width="1.5" stroke-linecap="round"
						stroke-linejoin="round" />
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
					<p>Scaletopia is the outbound infrastructure built exclusively for marketing agencies. We don't just
						run lead gen — we build and operate the full system: signal-based targeting in Clay,
						AI-personalised email and SMS sequences, and isolated sending infrastructure that protects your
						domain. The result is qualified meetings on your calendar every week. Apply for a 30-day
						performance-backed pilot to see what we can do for your agency.</p>
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
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_1271_3994)">
										<path
											d="M13.6313 13.6347H11.262V9.922C11.262 9.03667 11.244 7.89733 10.0273 7.89733C8.792 7.89733 8.60333 8.86067 8.60333 9.85667V13.6347H6.234V6H8.51V7.04067H8.54067C8.85867 6.44067 9.632 5.80733 10.7873 5.80733C13.188 5.80733 13.632 7.38733 13.632 9.444V13.6347H13.6313ZM3.558 4.95533C3.19295 4.95551 2.84283 4.81048 2.58483 4.55223C2.32682 4.29398 2.18214 3.94371 2.18267 3.57867C2.18304 2.81872 2.79939 2.20297 3.55933 2.20333C4.31928 2.2037 4.93503 2.82006 4.93467 3.58C4.9343 4.33994 4.31794 4.9557 3.558 4.95533ZM4.746 13.6347H2.37V6H4.746V13.6347ZM14.8167 0H1.18067C0.528 0 0 0.516 0 1.15267V14.8473C0 15.4847 0.528 16 1.18067 16H14.8147C15.4667 16 16 15.4847 16 14.8473V1.15267C16 0.516 15.4667 0 14.8147 0H14.8167Z"
											fill="#989FB3" />
									</g>
									<defs>
										<clipPath id="clip0_1271_3994">
											<rect width="16" height="16" fill="white" />
										</clipPath>
									</defs>
								</svg>

								LinkedIn
							</a>
						</li>
						<li>
							<a href="https://youtube.com/@scaletopia" target="_blank" rel="noopener noreferrer">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M15.6653 4.12395C15.4814 3.43102 14.9424 2.88846 14.2507 2.69995C13.0033 2.36328 8 2.36328 8 2.36328C8 2.36328 2.99667 2.36328 1.74867 2.69995C1.05729 2.88879 0.518628 3.43126 0.334667 4.12395C0 5.37995 0 7.99995 0 7.99995C0 7.99995 0 10.6199 0.334667 11.8759C0.518624 12.5689 1.05763 13.1114 1.74933 13.2999C2.99667 13.6366 8 13.6366 8 13.6366C8 13.6366 13.0033 13.6366 14.2513 13.2999C14.9431 13.1116 15.4822 12.5689 15.666 11.8759C16 10.6199 16 7.99995 16 7.99995C16 7.99995 16 5.37995 15.6653 4.12395ZM6.36333 10.3786V5.62128L10.5453 7.99995L6.36333 10.3786Z"
										fill="#989FB3" />
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