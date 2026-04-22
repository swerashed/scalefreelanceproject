<?php
$data = getData();
$cards = isset($data['cards']) ? $data['cards'] : [];
?>

<section class="post-trial-options">
    <div class="container">
        <div class="section-header text-center">
            <?php if (!empty($data['label'])): ?>
                <span class="post-trial-options-badge"><?php echo $data['label']; ?></span>
            <?php endif; ?>

            <?php if (!empty($data['title'])): ?>
                <h2><?php echo $data['title']; ?></h2>
            <?php endif; ?>

            <?php if (!empty($data['description'])): ?>
                <div>
                    <p>
                        <?php echo wpautop($data['description']); ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>

        <div class="post-trial-options-grid">
            <?php foreach ($cards as $card): ?>
                <div class="post-trial-options-card">
                    <div class="post-trial-options-card-content">
                        <?php if (!empty($card['card_label'])): ?>
                            <span class="post-trial-options-card-tag"><?php echo $card['card_label']; ?></span>
                        <?php endif; ?>

                        <?php if (!empty($card['price'])): ?>
                            <h3 class="post-trial-options-card-price"><?php echo $card['price']; ?></h3>
                        <?php endif; ?>

                        <?php if (!empty($card['price_subtext'])): ?>
                            <p class="post-trial-options-card-price-sub"><?php echo $card['price_subtext']; ?></p>
                        <?php endif; ?>

                        <?php if (!empty($card['commitment'])): ?>
                            <p class="post-trial-options-card-commitment"><?php echo $card['commitment']; ?></p>
                        <?php endif; ?>

                        <?php if (!empty($card['card_subtitle'])): ?>
                            <h4 class="post-trial-options-card-subtitle"><?php echo $card['card_subtitle']; ?></h4>
                        <?php endif; ?>

                        <?php if (!empty($card['card_description'])): ?>
                            <div class="post-trial-options-card-desc">
                                <?php echo wpautop($card['card_description']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($card['footer_line'])): ?>
                            <div class="post-trial-options-card-footer-line">
                                <?php echo $card['footer_line']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (!empty($data['footer_note'])): ?>
            <div class="post-trial-options-footer-note">
                <p><?php echo nl2br($data['footer_note']); ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>