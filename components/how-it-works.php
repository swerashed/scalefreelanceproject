<?php
$data = getData();
$columns = isset($data['columns']) ? $data['columns'] : [];
?>

<section class="how-it-works">
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

        <?php if (!empty($columns)): ?>
            <div class="how-it-works-box">
                <div class="how-it-works-grid">
                    <?php foreach ($columns as $index => $column): ?>
                        <div class="how-it-works-col">
                            <?php if (!empty($column['label'])): ?>
                                <span class="col-label"><?php echo $column['label']; ?></span>
                            <?php endif; ?>

                            <?php if (!empty($column['heading'])): ?>
                                <h3 class="col-heading serif"><?php echo $column['heading']; ?></h3>
                            <?php endif; ?>

                            <?php if (!empty($column['list_items'])): ?>
                                <ul class="how-it-works-list">
                                    <?php foreach ($column['list_items'] as $item): ?>
                                        <?php if (!empty($item['text'])): ?>
                                            <li><?php echo $item['text']; ?></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>