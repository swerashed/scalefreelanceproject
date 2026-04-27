<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
$title = isset($data['title']) ? $data['title'] : '';
?>
<!-- Partners -->
<section id="partners">
    <div class="container">
        <?php if ($title): ?>
            <h2 class="partners-title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <div class="partners-wrapper">
            <div class="partner-grid">
                <?php 
                foreach ($items as $partner): 
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