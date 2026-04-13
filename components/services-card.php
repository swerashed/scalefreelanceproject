<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
?>

<section id="services-card">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">
                <?php echo $data['title']; ?>
            </h2>

            <?php echo $data['description']; ?>
        </div>

        <div class="services-grid">
            <?php foreach ($items as $service): ?>
                <div class="card-item">
                    <h3 class="card-title"><?php echo esc_html($service['title']); ?></h3>
                    <?php if (!empty($service['description'])): ?>
                        <p class="card-description">
                            <?php echo nl2br(esc_html($service['description'])); ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>