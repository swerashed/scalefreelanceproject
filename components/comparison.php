<?php
$data = getData();
$rows = isset($data['comparison_rows']) ? $data['comparison_rows'] : [];
?>

<section id="comparison">
    <div class="container">
        <div class="section-header">
            <h2 class="title">
                <?php echo $data['title']; ?>
            </h2>
            <div class="description">
                <p><?php echo $data['description']; ?></p>
            </div>
        </div>

        <div class="comparison-scroll-wrapper">
            <div class="comparison-table">
                <!-- Headers -->
                <div class="comparison-header-row">
                    <div class="category-col"></div>
                    <div class="scaletopia-col">
                        <div class="header-box header-box--scaletopia">
                            <?php echo wp_get_attachment_image($data['scaletopia_logo'], 'full'); ?>
                        </div>
                    </div>
                    <div class="others-col">
                        <div class="header-box header-box--others">
                            <p class="other-label"><?php echo $data['others_label']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Rows -->
                <?php foreach ($rows as $row): ?>
                    <div class="comparison-row">
                        <div class="category-col">
                            <span class="category-name"><?php echo $row['row_label']; ?></span>
                        </div>
                        <div class="scaletopia-col">
                            <div class="comparison-card scaletopia-card">
                                <strong><?php echo $row['scaletopia_title']; ?></strong>
                                <p><?php echo $row['scaletopia_desc']; ?></p>
                            </div>
                        </div>
                        <div class="others-col">
                            <div class="comparison-card others-card">
                                <strong><?php echo $row['others_title']; ?></strong>
                                <p><?php echo $row['others_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="comparison-cta">
            <div class="group-cta">
                <div class="cta-wrapper">
                    <a href="<?php echo $data['btn_link']; ?>" class="animated-button">
                        <?php echo $data['btn_title']; ?>
                    </a>
                </div>
            </div>
            <?php if (!empty($data['footer_text'])): ?>
                <p class="footer-subtext"><?php echo $data['footer_text']; ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>