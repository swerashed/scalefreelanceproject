<?php
$data = getData();
?>

<section id="launch-cta">
    <div class="container relative">
        <div class="launch-cta-glow"></div>

        <div class="section-header">
            <h2 class="title">
                <?php echo $data['title']; ?>
            </h2>
            <div class="description">
                <?php echo $data['description']; ?>
            </div>
        </div>

        <div class="comparison-cta">
            <div class="group-cta">
                <div class="cta-wrapper">
                    <a href="<?php echo $data['btn_link']; ?>" class="animated-button stop-animation">
                        <?php echo $data['btn_title']; ?>
                    </a>
                </div>
            </div>
            <?php if (!empty($data['footer_text'])): ?>
                <p class="footer-subtext"><?php echo $data['footer_text']; ?></p>
            <?php endif; ?>
            <div class="agency-badge">For qualified agencies only</div>
        </div>
    </div>
</section>