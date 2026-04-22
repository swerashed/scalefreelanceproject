<?php
$data = getData();
$title = !empty($data['title']) ? $data['title'] : '';
$stats = !empty($data['stats']) ? $data['stats'] : [];
?>

<!-- Trust Statistics -->
<section class="trust-stats">
    <div class="container">
        <?php if ($title): ?>
            <div class="trust-stats-header text-center">
                <p class="trust-title"><?php echo esc_html($title); ?></p>
            </div>
        <?php endif; ?>

        <?php if (!empty($stats)): ?>
            <div class="trust-stats-grid">
                <?php foreach ($stats as $stat): ?>
                    <div class="stat-item">
                        <span class="stat-number"><?php echo esc_html($stat['number']); ?></span>
                        <p class="stat-label"><?php echo esc_html($stat['label']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- Trust Statistics -->
