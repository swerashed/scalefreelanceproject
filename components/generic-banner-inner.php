<?php
$data = getData();
?>
<!-- Section Banner -->
<section class="generic-section-banner">
    <div class="container">
        <div class="generic-section-wrapper">
            <div class="left-content">
                <div class="section-header">
                    <h2>
                        <?php echo $data['title']; ?>
                    </h2>
                    <?php echo $data['description']; ?>
                </div>
            </div>
            <div class="right-content">
                <?php echo wp_get_attachment_image($data['img'], 'full'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Section Banner -->