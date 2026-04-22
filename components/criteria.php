<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
?>

<section class="criteria">
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
                <div class="section-description">
                    <?php echo $data['description']; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if (!empty($items)): ?>
            <div class="criteria-grid">
                <?php foreach ($items as $item): ?>
                    <div class="criteria-card">
                        <div class="card-header">
                            <?php if (!empty($item['number'])): ?>
                                <span class="card-number serif"><?php echo $item['number']; ?></span>
                            <?php endif; ?>
                            <?php if (!empty($item['label'])): ?>
                                <span class="card-label"><?php echo $item['label']; ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="card-divider"></div>

                        <div class="card-content">
                            <?php if (!empty($item['title'])): ?>
                                <h3 class="card-title serif"><?php echo $item['title']; ?></h3>
                            <?php endif; ?>

                            <?php if (!empty($item['description'])): ?>
                                <div class="card-description">
                                    <?php echo $item['description']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
