<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
?>
<section id="phases">
    <div class="container">
        <!-- Header -->
        <div class="section-header text-center">
            <h2><?php echo $data['title']; ?></h2>
            <?php echo $data['description']; ?>
        </div>

        <div class="phases-wrapper">
            <?php foreach ($items as $phase): ?>
                <?php
                $image_url = wp_get_attachment_image_url($phase['img'], 'full');
                ?>
                <div class="phase-item">
                    <div class="item-content">
                        <span class="item-badge"><?php echo esc_html($phase['badge']); ?></span>
                        <h3 class="item-title"><?php echo esc_html($phase['title']); ?></h3>
                        <p class="item-description"><?php echo wp_kses_post($phase['description']); ?></p>
                    </div>
                    <div class="item-graphic">
                        <?php if ($image_url): ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($phase['title']); ?>"
                                class="phase-image">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>