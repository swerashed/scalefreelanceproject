<section class="case-studies">
    <div class="container">
        <div class="filter-wrapper text-center">
            <div class="filter">
                <button class="active" data-filter="*">All</button>
                <?php
                // Fetch all terms of the 'case_study_category' taxonomy
                $terms = get_terms(array(
                    'taxonomy' => 'case_study_category',
                    'hide_empty' => false, // Set to true to exclude empty categories
                ));

                // Check if terms are available
                if (!empty($terms) && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        // Generate a button for each term
                        echo '<button data-filter=".' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</button>';
                    }
                }
                ?>
            </div>
        </div>


        <div class="case-studies-wrapper">
            <?php
            // Query all 'case_study' posts
            $args = array(
                'post_type' => 'case_study', // Custom post type slug
                'posts_per_page' => -1, // Retrieve all posts
                'post_status' => 'publish', // Only published posts
            );

            $query = new WP_Query($args);

            // Loop through the posts
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    // Get the post thumbnail URL
                    $logoID = carbon_get_post_meta(get_the_ID(), 'logo');
                    $logo = wp_get_attachment_image($logoID, 'full');
                    $tag = carbon_get_post_meta(get_the_ID(), 'tag');

                    // Get categories for filtering
                    $post_terms = get_the_terms(get_the_ID(), 'case_study_category');
                    $term_classes = '';
                    if (!empty($post_terms) && !is_wp_error($post_terms)) {
                        foreach ($post_terms as $term) {
                            $term_classes .= ' ' . esc_attr($term->slug);
                        }
                    }

                    $top_cards = carbon_get_post_meta(get_the_ID(), 'top_cards_items');
                    ?>

                    <div class="new-case-study-item <?php echo $term_classes; ?>">
                        <div>
                            <div class="card-header">
                                <?php if ($logo): ?>
                                    <div class="company-logo">
                                        <?php echo $logo; ?>
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
                            <a href="<?php the_permalink(); ?>" class="animated-button">
                                <span>Read the case study</span>
                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H13M13 6L8.5 1.5M13 6L8.5 10.5" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                ?>
                <div class="case-studies-status">
                    <div class="case-studies-empty">
                        <h3>No Case Studies Yet</h3>
                        <p>We couldn't find any case studies in this category. Check back soon for more updates!</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>