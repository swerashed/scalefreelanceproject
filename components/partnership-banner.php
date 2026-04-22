<?php
$data = getData();
?>
<!-- Partnership Banner Section -->
<section id="partnership-banner">
    <div class="container">
        <div class="banner-content">
            <div class="left-content">
                <h1 class="title">
                    <?php echo $data['title']; ?>
                </h1>
                <div class="desc">
                    <?php echo $data['description']; ?>
                </div>
                <div class="partnership-group-cta">
                    <div class="cta-wrapper">
                        <a href="<?php echo esc_url($data['btn_link']); ?>" class="animated-button">
                            <span><?php echo esc_html($data['btn_title']); ?></span>
                        </a>
                        <?php if (!empty($data['button_description'])): ?>
                            <p class="button-description"><?php echo esc_html($data['button_description']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Partnership Banner Section -->