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

        <div id="partners-top-wrapper" class="partners-row top">
            <div class="marquee-container">
                <div class="marquee-track">
                    <?php 
                    // Repeat 3 times for extra safety on large screens
                    for ($x = 0; $x < 3; $x++) :
                        foreach ($items_top as $partner): ?>
                            <div class="partner-item <?php echo ($x > 0) ? 'marquee-extra' : ''; ?>">
                                <img src="<?php echo wp_get_attachment_image_url($partner['img'], 'full'); ?>" alt="Partner" />
                            </div>
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
                        foreach ($items_bottom as $partner): ?>
                            <div class="partner-item <?php echo ($x > 0) ? 'marquee-extra' : ''; ?>">
                                <img src="<?php echo wp_get_attachment_image_url($partner['img'], 'full'); ?>" alt="Partner" />
                            </div>
                        <?php endforeach; 
                    endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Partners -->