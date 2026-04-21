<?php

/**
 * scaletopia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scaletopia
 */

if (! defined('_S_VERSION')) {
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
			'primary'               => esc_html__('Primary', 'scaletopia'),
			'footer-company'        => esc_html__('Footer: Company', 'scaletopia'),
			'footer-case-studies'   => esc_html__('Footer: Case Studies', 'scaletopia'),
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
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

	// Query arguments
	$args = array(
		'post_type' => 'case_study',
		'posts_per_page' => -1,
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

	// Check if posts are found
	if ($query->have_posts()) {
		ob_start(); // Start output buffering

		while ($query->have_posts()) : $query->the_post();
			$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
			$logoID = carbon_get_post_meta(get_the_ID(), 'logo');
			$logo = wp_get_attachment_image($logoID, 'full');
			$video = carbon_get_post_meta(get_the_ID(), 'video');
?>
			<div class="case-studies-item">
				<div class="case-studies-item-img">
					<a href="<?php the_permalink(); ?>" <?php echo $video ? 'class="video-thumb"' : '' ?>>
						<img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>" />
						<?php if ($video) : ?>
						     <svg
                                    class="play-icon"
                                    width="96"
                                    height="96"
                                    viewBox="0 0 96 96"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect
                                        width="96"
                                        height="96"
                                        rx="48"
                                        fill="#1C1D20"
                                        fill-opacity="0.2" />
                                    <rect
                                        x="0.5"
                                        y="0.5"
                                        width="95"
                                        height="95"
                                        rx="47.5"
                                        stroke="white"
                                        stroke-opacity="0.6" />
                                    <path
                                        d="M49.6172 43.2809C50.978 44.054 52.0473 44.6615 52.8092 45.218C53.5762 45.7783 54.1435 46.3639 54.3467 47.1361C54.4957 47.7022 54.4957 48.2979 54.3467 48.8641C54.1435 49.6362 53.5762 50.2218 52.8092 50.7821C52.0473 51.3386 50.978 51.9461 49.6172 52.7192C48.3027 53.466 47.1942 54.0957 46.3527 54.4537C45.5045 54.8145 44.7312 54.9974 43.9795 54.7844C43.4272 54.6278 42.9246 54.3307 42.5197 53.9222C41.9702 53.3679 41.7497 52.6016 41.6453 51.6796C41.5417 50.7641 41.5417 49.5659 41.5417 48.0418V47.9583C41.5417 46.4342 41.5417 45.236 41.6453 44.3206C41.7497 43.3985 41.9702 42.6322 42.5197 42.0778C42.9246 41.6694 43.4272 41.3723 43.9795 41.2157C44.7312 41.0028 45.5045 41.1856 46.3527 41.5464C47.1942 41.9044 48.3027 42.5341 49.6172 43.2809Z"
                                        fill="white" />
                                </svg>
						<?php endif; ?>
					</a>
				</div>
				<div class="case-studies-item-content">
					<?php echo $logo; ?>
					<h3><?php the_title(); ?></h3>
					<a href="<?php the_permalink(); ?>" class="btn">Read the story</a>
				</div>
			</div>
<?php
		endwhile;

		wp_reset_postdata();
		$html = ob_get_clean();
		wp_send_json_success(['html' => $html]);
	} else {
		wp_send_json_success(['html' => '<p>No case studies found.</p>']);
	}
}

add_action('wp_ajax_filter_case_studies', 'filter_case_studies');
add_action('wp_ajax_nopriv_filter_case_studies', 'filter_case_studies');
