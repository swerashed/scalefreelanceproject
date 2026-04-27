<?php
$data = getData();
$items_top = isset($data['items']) ? $data['items'] : [];
$items_bottom = isset($data['items_bottom']) ? $data['items_bottom'] : [];
$title = isset($data['title']) ? $data['title'] : '';
?>
<!-- Partners -->
<section id="partners">
    <div class="container">
        <?php if ($title): ?>
            <h2 class="partners-title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php 
        $all_items = array_merge($items_top, $items_bottom);
        ?>

        <!-- Desktop View: Two separate marquees -->
        <div class="partners-desktop">
            <div id="partners-top-wrapper" class="partners-row top">
                <div class="marquee-container">
                    <div class="marquee-track">
                        <?php 
                        for ($x = 0; $x < 3; $x++) :
                            foreach ($items_top as $partner): 
                                $img_url = wp_get_attachment_image_url($partner['img'], 'full');
                                if ($img_url) : ?>
                                    <div class="partner-item <?php echo ($x > 0) ? 'marquee-extra' : ''; ?>">
                                        <img src="<?php echo esc_url($img_url); ?>" alt="Partner" />
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; 
                        endfor; ?>
                    </div>
                </div>
            </div>

            <div id="partners-bottom-wrapper" class="partners-row bottom">
                <div class="marquee-container">
                    <div class="marquee-track">
                        <?php 
                        for ($x = 0; $x < 3; $x++) :
                            foreach ($items_bottom as $partner): 
                                $img_url = wp_get_attachment_image_url($partner['img'], 'full');
                                if ($img_url) : ?>
                                    <div class="partner-item <?php echo ($x > 0) ? 'marquee-extra' : ''; ?>">
                                        <img src="<?php echo esc_url($img_url); ?>" alt="Partner" />
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; 
                        endfor; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View: Single unified grid -->
        <div class="partners-mobile">
            <div class="partners-mobile-grid">
                <?php foreach ($all_items as $partner): 
                    $img_url = wp_get_attachment_image_url($partner['img'], 'full');
                    if ($img_url) : ?>
                        <div class="partner-item">
                            <img src="<?php echo esc_url($img_url); ?>" alt="Partner" />
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Partners -->