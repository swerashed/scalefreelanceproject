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
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $logoID = carbon_get_post_meta(get_the_ID(), 'logo');
                    $logo = wp_get_attachment_image($logoID, 'full');
                    $video = carbon_get_post_meta(get_the_ID(), 'video');

                    ?>
                    <!-- <div class="case-studies-item">
                        <div class="case-studies-item-img">
                            <a href="<?php the_permalink(); ?>" <?php echo $video ? 'class="video-thumb"' : '' ?>>
                                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>" />
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
                            </a>
                        </div>
                        <div class="case-studies-item-content">
                            <?php echo $logo; ?>

                            <h3>
                                <?php the_title(); ?>
                            </h3>

                            <a href="<?php the_permalink(); ?>" class="btn">
                                Read the story
                            </a>
                        </div>
                    </div> -->

                    <div class="new-case-study-item">
                        <div>
                            <div class="card-header">
                                <div class="company-logo">
                                    <!-- Static Logo -->
                                    <img src="https://via.placeholder.com/80x40?text=Logo" alt="Company Logo" />
                                    <svg width="157" height="48" viewBox="0 0 157 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="156.52" height="48" fill="url(#pattern0_1323_1041)" />
                                        <defs>
                                            <pattern id="pattern0_1323_1041" patternContentUnits="objectBoundingBox" width="1"
                                                height="1">
                                                <use xlink:href="#image0_1323_1041" transform="scale(0.00333333 0.0108694)" />
                                            </pattern>
                                            <image id="image0_1323_1041" width="300" height="92" preserveAspectRatio="none"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAABcCAMAAADj9ngyAAACrFBMVEVHcEz/si7/si7/si3/si3/si7/si7//wD/sy7/si7/sS3/si//si7/sjP/tiz/sS7/sy//si7/tiT/sy//sy3/si7/sC7/si7/si7/riz/sjP/sS7/si//si//sC7/si7/sTD/sC3/rTH/si7/sy7/si7/si7/qk3/sy7/tjH/si7/sy//si7/si7/si7/si3/si7/si7/si7/gAD/si7/si3/si7/sy3/sy//v0D/sy//tSv/si7/siz/si7/si7/si7/si7/sS//oi7/tC7/siz/si7/si//sS7/rzD/rTn/si7/si3/sS//zDP/sS7/ti7/si7/sy7/si7/si7/sy3/ryz/si7/si7/sy7/pyD/siz/si7/tCz/si7/sy7/tSr/sC//sS7/si3/si7/si3/si7/sTD/sy//si7/sy7/sy3/sy7/si7/si7/si3/si7/si//si7/si7/sS7/sy7/si3/sy3/szD/si7/sSz/sy7/si7/AAD/si3/si7/si3/sy//rzD/si7/si7/sy3/siz/si7/sy3/si7/si7/sy7/si7/si3/tC3/si7/si7/sjD/si7/sSz/si7/si7/si7/sS3/si7/si7/sS3/syz/si3/sy7/si7/si7/si//sS7/si7/sy7/si//sC3/sS7/si3/si7/si3/si3/si7/sy7//wD/si7/sy//si//si//sy//sy3/sy7/si3/v0D/sS//si3/sS7/si7/si7/sy7/si7/si7/sy7/sS7/si7/si7/si3/si7/si//si7/sS7/sS//sS7/si//sy7/sCz/tC7/si//si//sS3/sy7/si7/si7/tDD/sy7/oi7/sSj/sy//sCz/sy7/sS7/sS7/sy//si//sy7/sy7/sS7/sS7/si4TtipjAAAA43RSTlMAvpavkuqFAbzr5qn7FCNI0GQHYWXRZPLBKQpfTEZNxktKH96AsnsDhhX+lPzY/XGV6eQCvb/oa1cEaBH4NPbwY/kqBU0LiI79EAnOjSUFlA3IkSwyISP0i+AIRO0pG10YUTyB7iiPGTp6/p24UsnQ4Da6xNL3mDkfhC7M5QGj1/FBDsuxZh7zVsPTdPq0PZviNdsXbsBCM6A4Wy9gJmp2foqm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" />
                                        </defs>
                                    </svg>

                                </div>

                                <!-- Static Title -->
                                <h3 class="headline">
                                    From inbound-dependent to diversified pipeline in 6
                                    months.
                                </h3>
                            </div>

                            <div class="card-stats">
                                <div class="stat-box">
                                    <span class="stat-value">
                                        $72K
                                    </span>
                                    <span class="stat-label">
                                        new MRR added
                                    </span>
                                </div>

                                <div class="stat-box">
                                    <span class="stat-value">
                                        110
                                    </span>
                                    <span class="stat-label">
                                        qualified calls, 6 months
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a href="/case-study/acme-corporation" class="animated-button">
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
                <p>No case studies found.</p>
            <?php endif; ?>
        </div>

    </div>
</section>