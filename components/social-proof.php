<?php
$data = getData();
$cards = isset($data['cards']) ? $data['cards'] : [];
?>

<section id="social-proof" class="social-proof">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">
                <?php echo $data['title']; ?>
            </h2>
            <div class="description">
                <?php echo wp_kses_post($data['description']); ?>
            </div>
        </div>

        <?php if (!empty($cards)): ?>
            <div class="social-proof-grid">
                <?php foreach ($cards as $card): ?>
                    <?php
                    $image_url = !empty($card['image']) ? wp_get_attachment_image_url($card['image'], 'full') : '';
                    ?>
                    <div class="social-proof-card">
                        <?php if ($image_url): ?>
                            <div class="social-proof-card__media">
                                <img src="<?php echo esc_url($image_url); ?>" alt=""
                                    class="social-proof-card__img">
                            </div>
                        <?php endif; ?>

                        <div class="social-proof-card__footer">
                            <?php if (!empty($card['footer_title'])): ?>
                                <div class="social-proof-card__footer-title">
                                    <?php echo esc_html($card['footer_title']); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($card['footer_subtitle'])): ?>
                                <div class="social-proof-card__footer-subtitle">
                                    <?php echo esc_html($card['footer_subtitle']); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
