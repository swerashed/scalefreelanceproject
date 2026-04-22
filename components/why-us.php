<?php
$data = getData();
$stats = isset($data['stats']) ? $data['stats'] : [];
?>

<section class="why-us-section">
    <div class="container">
        <div class="why-us-wrapper">
            <div class="why-us-content">
                <div class="section-header">
                    <?php if (!empty($data['label'])): ?>
                        <span class="section-label"><?php echo esc_html($data['label']); ?></span>
                    <?php endif; ?>
                    
                    <?php if (!empty($data['title'])): ?>
                        <h2><?php echo $data['title']; ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($data['sub_title'])): ?>
                        <p class="sub-title"><?php echo esc_html($data['sub_title']); ?></p>
                    <?php endif; ?>

                    <?php if (!empty($data['description'])): ?>
                        <div class="description">
                            <?php echo $data['description']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (!empty($stats)): ?>
                <div class="why-us-stats">
                    <?php foreach ($stats as $stat): ?>
                        <div class="stat-card">
                            <div class="stat-inner">
                                <span class="stat-number"><?php echo esc_html($stat['number']); ?></span>
                                <p class="stat-label"><?php echo nl2br(esc_html($stat['label'])); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
