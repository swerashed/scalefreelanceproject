<?php
$data = getData();
?>

<section class="mission-detail-section">
    <div class="container">
        <div class="mission-detail-wrapper">
            <div class="section-header">
                <?php if (!empty($data['label'])): ?>
                    <span class="section-label"><?php echo esc_html($data['label']); ?></span>
                <?php endif; ?>
                
                <?php if (!empty($data['title'])): ?>
                    <h2><?php echo $data['title']; ?></h2>
                <?php endif; ?>

                <?php if (!empty($data['description'])): ?>
                    <div class="description-content">
                        <?php echo $data['description']; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
