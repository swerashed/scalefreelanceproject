<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
?>

<section class="who-its-for">
    <div class="container">
        <div class="section-header-variant">
            <?php if (!empty($data['label'])): ?>
                <div class="label-wrapper">
                    <?php if (!empty($data['section_number'])): ?>
                        <span class="number"><?php echo $data['section_number']; ?></span>
                        <span class="line"></span>
                    <?php endif; ?>
                    <span class="label"><?php echo $data['label']; ?></span>
                </div>
            <?php endif; ?>

            <?php if (!empty($data['title'])): ?>
                <h2><?php echo $data['title']; ?></h2>
            <?php endif; ?>

            <?php if (!empty($data['description'])): ?>
                <p>
                    <?php echo $data['description']; ?>
                </p>
            <?php endif; ?>
        </div>

        <?php if (!empty($items)): ?>
            <div class="who-its-for-grid">
                <?php foreach ($items as $item): ?>
                    <div class="who-its-for-card">
                        <div class="who-its-for-card-inner">
                            <?php if (!empty($item['icon'])): ?>
                                <div class="who-its-for-card-icon">
                                    <?php echo wp_get_attachment_image($item['icon'], 'full'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($item['title'])): ?>
                                <h3 class="who-its-for-card-title serif"><?php echo $item['title']; ?></h3>
                            <?php endif; ?>

                            <?php if (!empty($item['description'])): ?>
                                <div class="who-its-for-card-description">
                                    <p><?php echo $item['description']; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>