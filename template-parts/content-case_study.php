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
                <h2>
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
</section>
<!-- Section Banner -->

<!-- Case Study Details -->
<section class="case-studies-details">
    <div class="container">
        <div class="case-studies-details-wrapper">
            <div class="left-content">
                <div class="case-studies-item-img">
                    <?php if ($video): ?>
                        <iframe src="<?php echo $video; ?>" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <!-- <a href="<?php echo $video; ?>" class="video-thumb youtube-popup">
                            <?php the_post_thumbnail('full'); ?>
                            <?php if ($video): ?>
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
                        </a> -->
                    <?php else: ?>
                        <?php the_post_thumbnail('full'); ?>
                    <?php endif; ?>
                </div>
                <?php if ($info_cards_items): ?>
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