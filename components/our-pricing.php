<?php
$data = getData();
$definition_items = isset($data['definition_items']) ? $data['definition_items'] : [];
?>
<!-- Pricing -->
<section class="pricing">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php echo $data['title']; ?></h2>
            <div class="subtitle"><?php echo $data['subtitle']; ?></div>
        </div>

        <div class="pricing-card-wrapper">
            <div class="pricing-card">
                <div class="pricing-grid">
                    <!-- Left Column -->
                    <div class="pricing-col pilot-section">
                        <span class="tag"><?php echo $data['pilot_tag']; ?></span>
                        <h3 class="price serif"><?php echo $data['pilot_price']; ?></h3>
                        <p class="price-note"><?php echo $data['price_note']; ?></p>

                        <div class="pilot-desc">
                            <?php echo wpautop($data['pilot_description']); ?>
                        </div>

                        <div class="divider"></div>

                        <div class="guarantee">
                            <h4><?php echo $data['guarantee_title']; ?></h4>
                            <div class="guarantee-text">
                                <?php echo wpautop($data['guarantee_description']); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="pricing-col definition-section">
                        <span class="tag"><?php echo $data['definition_tag']; ?></span>
                        <h3 class="definition-title serif"><?php echo $data['definition_title']; ?></h3>

                        <div class="definition-list">
                            <?php foreach ($definition_items as $index => $item) : ?>
                                <div class="definition-item">
                                    <div class="item-number"><?php echo sprintf('%02d', $index + 1); ?></div>
                                    <div class="item-content">
                                        <h5><?php echo $item['title']; ?></h5>
                                        <p><?php echo $item['description']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pricing-cta">
            <a href="<?php echo $data['cta_link']; ?>" class="animated-button">
                <span><?php echo $data['cta_text']; ?></span>
            </a>
        </div>
    </div>
</section>
<!-- End Pricing -->