<?php

/**
 * scaletopia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scaletopia
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function scaletopia_setup()
{
	/**
	 * Carbon Fields
	 * @link https://carbonfields.net/docs/
	 */

	require_once('vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();


	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on scaletopia, use a find and replace
	 * to change 'scaletopia' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('scaletopia', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__('Primary', 'scaletopia'),
			'footer-company' => esc_html__('Footer: Company', 'scaletopia'),
			'footer-case-studies' => esc_html__('Footer: Case Studies', 'scaletopia'),
			'footer-case-studies-2' => esc_html__('Footer: Case Studies (overflow)', 'scaletopia'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);



	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'scaletopia_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scaletopia_content_width()
{
	$GLOBALS['content_width'] = apply_filters('scaletopia_content_width', 640);
}
add_action('after_setup_theme', 'scaletopia_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function scaletopia_scripts()
{

	wp_enqueue_style('scaletopia-magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', array(), _S_VERSION);
	wp_enqueue_style('scaletopia-main', get_template_directory_uri() . '/dist/css/main.css', array(), _S_VERSION);
	wp_enqueue_style('scaletopia-style', get_stylesheet_uri(), array(), _S_VERSION);

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('scaletopia-magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array(), _S_VERSION, true);

	// Ajax localisation
	wp_enqueue_script('scaletopia-main', get_template_directory_uri() . '/dist/main.js', array(), _S_VERSION, true);

	wp_localize_script('scaletopia-main', 'scaletopia_ajax_object', array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('scaletopia_nonce'),
	));
}
add_action('wp_enqueue_scripts', 'scaletopia_scripts');

// Admin enqueue scripts
function scaletopia_admin_scripts()
{
	wp_enqueue_style('scaletopia-admin', get_template_directory_uri() . '/dist/css/admin.css', array(), _S_VERSION);
}

add_action('admin_enqueue_scripts', 'scaletopia_admin_scripts');


/**
 * Implement the Custom Header feature.
 */

require get_template_directory() . '/inc/blocks.php';

require get_template_directory() . '/inc/useful-function.php';

require get_template_directory() . '/inc/theme-options.php';

require get_template_directory() . '/inc/cpt.php';

require get_template_directory() . '/inc/post-meta.php';


function filter_case_studies()
{
	// Verify nonce (optional for extra security)
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'scaletopia_nonce')) {
		wp_send_json_error(['message' => 'Invalid nonce']);
	}

	$category_slug = sanitize_text_field($_POST['category']); // Get the selected category
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;

	// Query arguments
	$args = array(
		'post_type' => 'case_study',
		'posts_per_page' => 8,
		'paged' => $page,
		'post_status' => 'publish',
	);

	// If a category is selected, filter by it
	if ($category_slug !== '*') {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'case_study_category',
				'field' => 'slug',
				'terms' => $category_slug,
			),
		);
	}

	$query = new WP_Query($args);
	$max_pages = $query->max_num_pages;

	// Check if posts are found
	if ($query->have_posts()) {
		ob_start(); // Start output buffering

		while ($query->have_posts()):
			$query->the_post();
			$logoID = carbon_get_post_meta(get_the_ID(), 'logo');
			$logo = wp_get_attachment_image($logoID, 'full');
			$post_terms = get_the_terms(get_the_ID(), 'case_study_category');
			$top_cards = carbon_get_post_meta(get_the_ID(), 'top_cards_items');

			// Get categories for filtering classes (optional but good for consistency)
			$post_terms = get_the_terms(get_the_ID(), 'case_study_category');
			$term_classes = '';
			if (!empty($post_terms) && !is_wp_error($post_terms)) {
				foreach ($post_terms as $term) {
					$term_classes .= ' ' . esc_attr($term->slug);
				}
			}
			?>
			<div class="new-case-study-item <?php echo $term_classes; ?>">
				<div>
					<div class="card-header">
						<?php if ($logoID): ?>
							<div class="company-logo">
								<?php echo wp_get_attachment_image($logoID, 'full'); ?>
								<?php if (!empty($post_terms) && !is_wp_error($post_terms)): ?>
									<div class="case-study-tag-wrapper">
										<?php foreach ($post_terms as $term): ?>
											<span class="case-study-tag"><?php echo esc_html($term->name); ?></span>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>

						<h3 class="headline">
							<?php the_title(); ?>
						</h3>
					</div>

					<div class="card-stats">
						<?php if (!empty($top_cards)): ?>
							<?php foreach ($top_cards as $card): ?>
								<div class="stat-box">
									<span class="stat-value">
										<?php echo esc_html($card['title']); ?>
									</span>
									<span class="stat-label">
										<?php echo esc_html($card['description']); ?>
									</span>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>

				<div class="card-footer">
					<a href="<?php the_permalink(); ?>" class="animated-button stop-animation">
						<span>Read the case study</span>
						<svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 6H13M13 6L8.5 1.5M13 6L8.5 10.5" stroke="white" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
					</a>
				</div>
			</div>
			<?php
		endwhile;

		wp_reset_postdata();
		$html = ob_get_clean();
		wp_send_json_success([
			'html' => $html,
			'max_pages' => $max_pages,
			'current_page' => $page
		]);
	} else {
		wp_send_json_success([
			'html' => '
			<div class="case-studies-status">
				<div class="case-studies-empty">
					<h3>No Case Studies Yet</h3>
					<p>We couldn\'t find any case studies in this category. Check back soon for more updates!</p>
				</div>
			</div>
		',
			'max_pages' => 0,
			'current_page' => 1
		]);
	}
}

add_action('wp_ajax_filter_case_studies', 'filter_case_studies');
add_action('wp_ajax_nopriv_filter_case_studies', 'filter_case_studies');
