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
$quote = carbon_get_post_meta(get_the_ID(), 'quote');
$author_image = carbon_get_post_meta(get_the_ID(), 'author_image');
$author_name = carbon_get_post_meta(get_the_ID(), 'author_name');
$author_position = carbon_get_post_meta(get_the_ID(), 'author_position');
$contact_title = carbon_get_post_meta(get_the_ID(), 'contact_title') ?: 'Ready to grow?
                <span>Let’s book a free growth call</span>';
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
            <div class="left-content">
                <?php
                $client_message_screenshot = carbon_get_post_meta(get_the_ID(), 'client_message_screenshot');
                ?>
                <div class="case-studies-item-img">
                    <?php if ($video): ?>
                        <iframe src="<?php echo $video; ?>" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <?php elseif ($client_message_screenshot): ?>
                        <?php echo wp_get_attachment_image($client_message_screenshot, 'full'); ?>
                    <?php else: ?>
                        <?php the_post_thumbnail('full'); ?>
                    <?php endif; ?>
                </div>
                <?php if ($video || $client_message_screenshot): ?>
                    <span class="verified-message">VERIFIED CLIENT MESSAGE</span>
                <?php endif; ?>
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

                    <?php if ($result_cards_items): ?>
                        <div class="results">
                            <h3>Results</h3>
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
            <div class="sidebar">
                <div class="author-profile">
                    <div class="author-bio">
                        <span>
                            <?php echo $quote; ?>
                        </span>
                    </div>
                    <div class="author-info">
                        <div class="author-img">
                            <?php echo wp_get_attachment_image($author_image, 'full'); ?>
                        </div>
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
    </div>
</section>
<!-- End Case Study Details -->

<!-- More Case Studeis -->
<section class="more-case-studies">
    <div class="container">
        <div class="swiper">
            <div class="swiper-wrapper">

                <?php
                $args = array(
                    'post_type' => 'case_study',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'post__not_in' => array(get_the_ID()),
                );

                $query = new WP_Query($args);

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $logoID = carbon_get_post_meta(get_the_ID(), 'logo');
                        $logo = wp_get_attachment_image($logoID, 'full');
                        ?>

                        <div class="swiper-slide">
                            <div class="case-studies-item">
                                <div class="case-studies-item-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo $logo; ?>
                                    </a>
                                </div>
                                <div class="case-studies-item-content">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>

                                    <div class="cta">
                                        <a href="<?php the_permalink(); ?>" class="btn">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="pagination">
                <div class="navigation prev">
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.00007 2C2.00007 2 10 7.89187 10 10C10 12.1083 2 18 2 18" stroke="white"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="navigation next">
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.00007 2C2.00007 2 10 7.89187 10 10C10 12.1083 2 18 2 18" stroke="white"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us -->
<section id="contact-us">
    <div class="container">
        <div class="section-header text-center">
            <h2>
                <?php echo $contact_title; ?>
            </h2>
        </div>
        <div class="calendy text-center">
            <iframe width="100%" height="700" frameborder="0" scrolling="no"
                src="<?php echo carbon_get_theme_option('scaletopia_book_now_link') ?>"
                allow="camera; microphone; clipboard-write">
            </iframe>
        </div>
    </div>
</section>
<!-- End Contact Us -->