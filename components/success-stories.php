<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
?>

<section id="success-stories">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">
                <?php echo $data['title']; ?>
            </h2>
            <div class="description">
                <?php echo $data['description']; ?>
            </div>
        </div>

        <div class="success-stories-slider">
            <div class="success-stories-glow"></div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($items as $item_data):
                        $post_title = isset($item_data['headline']) ? $item_data['headline'] : '';
                        $post_link = isset($item_data['link']) ? $item_data['link'] : '';
                        $logo = isset($item_data['logo']) ? $item_data['logo'] : '';

                        $stat_1_val = isset($item_data['stat_1_val']) ? $item_data['stat_1_val'] : '';
                        $stat_1_lab = isset($item_data['stat_1_label']) ? $item_data['stat_1_label'] : '';
                        $stat_2_val = isset($item_data['stat_2_val']) ? $item_data['stat_2_val'] : '';
                        $stat_2_lab = isset($item_data['stat_2_label']) ? $item_data['stat_2_label'] : '';
                        ?>
                        <div class="swiper-slide">
                            <div class="success-card">
                                <div>
                                    <div class="card-header">
                                        <div class="company-logo">
                                            <?php if ($logo): ?>
                                                <?php echo wp_get_attachment_image($logo, 'full'); ?>
                                            <?php else: ?>
                                                <div class="placeholder-logo">
                                                    <?php echo $post_title; ?> Logo
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="headline">
                                            <?php echo $post_title; ?>
                                        </h3>
                                    </div>
                                    <div class="card-stats">
                                        <div class="stat-box">
                                            <span class="stat-value">
                                                <?php echo $stat_1_val; ?>
                                            </span>
                                            <span class="stat-label">
                                                <?php echo $stat_1_lab; ?>
                                            </span>
                                        </div>
                                        <div class="stat-box">
                                            <span class="stat-value">
                                                <?php echo $stat_2_val; ?>
                                            </span>
                                            <span class="stat-label">
                                                <?php echo $stat_2_lab; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <a href="<?php echo $post_link; ?>" class="animated-button">
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
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="slider-controls">
                <div class="nav-arrow prev">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.8334 10H4.16675M4.16675 10L9.16675 15M4.16675 10L9.16675 5" stroke="white"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="swiper-pagination"></div>
                <div class="nav-arrow next">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16663 10H15.8333M15.8333 10L10.8333 5M15.8333 10L10.8333 15" stroke="white"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>