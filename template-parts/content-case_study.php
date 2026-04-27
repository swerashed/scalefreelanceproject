<?php
$logoID = carbon_get_post_meta(get_the_ID(), 'logo');
$logo = wp_get_attachment_image($logoID, 'full');
$tag = carbon_get_post_meta(get_the_ID(), 'tag');
$video = carbon_get_post_meta(get_the_ID(), 'video');
$services = carbon_get_post_meta(get_the_ID(), 'services');
$target_audience = carbon_get_post_meta(get_the_ID(), 'target_audience');
$top_cards_items = carbon_get_post_meta(get_the_ID(), 'top_cards_items');
$info_cards_items = carbon_get_post_meta(get_the_ID(), 'info_cards_items');
$result_cards_items = carbon_get_post_meta(get_the_ID(), 'result_cards_items');
$approach_items = carbon_get_post_meta(get_the_ID(), 'approach_items');
$quote = carbon_get_post_meta(get_the_ID(), 'quote');
$author_image = carbon_get_post_meta(get_the_ID(), 'author_image');
$author_name = carbon_get_post_meta(get_the_ID(), 'author_name');
$author_position = carbon_get_post_meta(get_the_ID(), 'author_position');
?>
<!-- Section Banner -->
<section class="case-studies-generic">
    <div class="case-studies-generic-wrapper">
        <div class="container">
            <div class="top-wrapper">
                <?php if ($tag): ?>
                    <span class="case-study-tag"><?php echo esc_html($tag); ?></span>
                <?php endif; ?>
                <h2 class="case-study-title">
                    <?php the_title(); ?>
                </h2>
            </div>
            <?php if ($services || $target_audience): ?>
                <div class="middle-wrapepr">
                    <div class="meta-wrapepr">
                        <?php if ($services): ?>
                            <div class="meta">
                                <span>Service</span>
                                <p>
                                    <?php echo $services; ?>
                                </p>
                            </div>
                        <?php endif; ?>

                        <?php if ($target_audience): ?>
                            <div class="meta">
                                <span>Target Audience</span>
                                <p>
                                    <?php echo $target_audience; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($top_cards_items): ?>
                <div class="bottom-wrapper">
                    <div class="card-wrapper">
                        <?php foreach ($top_cards_items as $item): ?>
                            <div class="card">
                                <div class="card-inner">
                                    <h4 class="stat-title">
                                        <?php echo $item['title']; ?>
                                    </h4>
                                    <span class="stat-description">
                                        <?php echo $item['description']; ?>
                                    </span>
                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- Section Banner -->

<!-- Case Study Details -->
<section class="case-studies-details">
    <div class="container">
        <div class="case-studies-details-wrapper">
            <div class="top-details-row">
                <div class="left-col">
                    <?php
                    $client_message_screenshot = carbon_get_post_meta(get_the_ID(), 'client_message_screenshot');
                    $companyLogo = carbon_get_post_meta(get_the_ID(), 'logo');

                    $img_wrapper_class = 'case-studies-item-img';
                    if (!$video && !$client_message_screenshot && $companyLogo) {
                        $img_wrapper_class .= ' is-logo';
                    }
                    ?>
                    <div class="<?php echo esc_attr($img_wrapper_class); ?>">
                        <?php if ($video): ?>
                            <iframe src="<?php echo $video; ?>" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <?php elseif ($client_message_screenshot): ?>
                            <?php echo wp_get_attachment_image($client_message_screenshot, 'full'); ?>
                        <?php elseif ($companyLogo): ?>
                            <?php echo wp_get_attachment_image($companyLogo, 'full', false, array('class' => 'logo-img')); ?>
                        <?php else: ?>
                            <?php the_post_thumbnail('full'); ?>
                        <?php endif; ?>
                    </div>
                    <?php if ($client_message_screenshot): ?>
                        <span class="verified-message">VERIFIED CLIENT MESSAGE</span>
                    <?php endif; ?>
                </div>

                <div class="sidebar">
                    <div class="author-profile">
                        <div class="author-bio">
                            <span>
                                <?php echo $quote; ?>
                            </span>
                        </div>
                        <div class="author-info">
                            <?php if ($author_image): ?>
                                <div class="author-img">
                                    <?php echo wp_get_attachment_image($author_image, 'full'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="author-details">
                                <h4>
                                    <?php echo $author_name; ?>
                                </h4>
                                <span>
                                    <?php echo $author_position; ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-cta">
                        <a href="<?php echo carbon_get_theme_option('scaletopia_book_now_link') ?>" class="btn"
                            target="__blank">Book a free growth call</a>
                    </div>
                </div>
            </div>

            <div class="case-studies-content-flow">
                <?php if (!empty($info_cards_items)): ?>
                    <div class="company-info-wrapper">
                        <?php foreach ($info_cards_items as $item): ?>
                            <div class="company-info">
                                <h3>
                                    <?php echo $item['title']; ?>
                                </h3>
                                <p>
                                    <?php echo $item['description']; ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="case-studies-content">
                    <?php the_content(); ?>

                    <?php if ($approach_items): ?>
                        <div class="approach">
                            <h3>Our <span>Approach</span></h3>
                            <div class="approach-wrapper">
                                <?php foreach ($approach_items as $item): ?>
                                    <div class="approach-item">
                                        <div class="approach-label">
                                            <span><?php echo $item['label']; ?></span>
                                        </div>
                                        <div class="approach-content">
                                            <h4><?php echo $item['title']; ?></h4>
                                            <p><?php echo $item['description']; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($result_cards_items): ?>
                        <div class="results">
                            <h3>The <span>Results</span></h3>
                            <div class="results-wrapper">
                                <?php foreach ($result_cards_items as $item): ?>
                                    <div class="results-item">
                                        <h4>
                                            <?php echo $item['title']; ?>
                                        </h4>
                                        <span>
                                            <?php echo $item['description']; ?>
                                        </span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Case Study Details -->

<?php
$terms = wp_get_post_terms(get_the_ID(), 'case_study_category', array('fields' => 'ids'));
$args = array(
    'post_type' => 'case_study',
    'posts_per_page' => 8,
    'post_status' => 'publish',
    'post__not_in' => array(get_the_ID()),
);

if (!empty($terms)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'case_study_category',
            'field' => 'term_id',
            'terms' => $terms,
        ),
    );
}

$query = new WP_Query($args);
?>

<?php if ($query->found_posts > 3): ?>
    <!-- More Case Studeis -->
    <section id="more-case-studies-slider" class="more-case-studies case-studies-slider-section">
        <div class="container">
            <div class="section-header">
                <h2 class="title">More <span>Case Studies</span></h2>
                <div class="slider-controls">
                    <div class="nav-arrow prev">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8334 10H4.16675M4.16675 10L9.16675 15M4.16675 10L9.16675 5" stroke="white"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="nav-arrow next">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.16663 10H15.8333M15.8333 10L10.8333 5M15.8333 10L10.8333 15" stroke="white"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="case-studies-slider-container">
                <div class="case-studies-slider-glow"></div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php
                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post();
                                $post_id = get_the_ID();
                                $logo_id = carbon_get_post_meta($post_id, 'logo');
                                $tag = carbon_get_post_meta($post_id, 'tag');

                                // Pull stats from Banner Cards Items (top_cards_items)
                                $banner_cards = carbon_get_post_meta($post_id, 'top_cards_items');
                                $stat_1_val = isset($banner_cards[0]['title']) ? $banner_cards[0]['title'] : '';
                                $stat_1_lab = isset($banner_cards[0]['description']) ? $banner_cards[0]['description'] : '';
                                $stat_2_val = isset($banner_cards[1]['title']) ? $banner_cards[1]['title'] : '';
                                $stat_2_lab = isset($banner_cards[1]['description']) ? $banner_cards[1]['description'] : '';
                                ?>
                                <div class="swiper-slide">
                                    <div class="case-study-card">
                                        <div>
                                            <div class="card-header">
                                                <?php if ($logo_id): ?>
                                                    <div class="company-logo">
                                                        <?php echo wp_get_attachment_image($logo_id, 'full'); ?>

                                                        <?php if ($tag): ?>
                                                            <span class="case-study-tag"><?php echo esc_html($tag); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <h3 class="headline">
                                                    <?php the_title(); ?>
                                                </h3>
                                            </div>
                                            <div class="card-stats">
                                                <?php if ($stat_1_val): ?>
                                                    <div class="stat-box">
                                                        <span class="stat-value">
                                                            <?php echo $stat_1_val; ?>
                                                        </span>
                                                        <span class="stat-label">
                                                            <?php echo $stat_1_lab; ?>
                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($stat_2_val): ?>
                                                    <div class="stat-box">
                                                        <span class="stat-value">
                                                            <?php echo $stat_2_val; ?>
                                                        </span>
                                                        <span class="stat-label">
                                                            <?php echo $stat_2_lab; ?>
                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <a href="<?php the_permalink(); ?>" class="animated-button stop-animation">
                                                <span>Read the case study</span>
                                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 6H13M13 6L8.5 1.5M13 6L8.5 10.5" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Launch CTA -->
<?php
set_query_var('component_data', array(
    'title' => carbon_get_post_meta(get_the_ID(), 'launch_cta_title') ?: 'Ready to grow? <span>Let’s book a free growth call</span>',
    'description' => carbon_get_post_meta(get_the_ID(), 'launch_cta_description'),
    'btn_title' => carbon_get_post_meta(get_the_ID(), 'launch_cta_btn_title') ?: 'Book a free growth call',
    'btn_link' => carbon_get_post_meta(get_the_ID(), 'launch_cta_btn_link') ?: carbon_get_theme_option('scaletopia_book_now_link'),
    'footer_text' => carbon_get_post_meta(get_the_ID(), 'launch_cta_footer_text'),
));
get_template_part('components/launch-cta');
?>
<!-- End Contact Us -->