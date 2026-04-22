<?php
$data = getData();
$cards = isset($data['cards']) ? $data['cards'] : [];
?>

<section class="the-model">
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

        <div class="the-model-grid">
            <div class="the-model-content">
                <?php if (!empty($data['content_title'])): ?>
                    <h3 class="content-title"><?php echo $data['content_title']; ?></h3>
                <?php endif; ?>

                <?php if (!empty($data['content_description'])): ?>
                    <div class="content-description">
                        <?php echo $data['content_description']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="the-model-cards">
                <?php if (!empty($cards)): ?>
                    <?php foreach ($cards as $card): ?>
                        <div class="the-model-card">
                            <?php if (!empty($card['number'])): ?>
                                <span class="card-number serif"><?php echo $card['number']; ?></span>
                            <?php endif; ?>
                            <div class="card-body">
                                <?php if (!empty($card['title'])): ?>
                                    <h4 class="card-title"><?php echo $card['title']; ?></h4>
                                <?php endif; ?>
                                <?php if (!empty($card['description'])): ?>
                                    <p class="card-description"><?php echo $card['description']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>