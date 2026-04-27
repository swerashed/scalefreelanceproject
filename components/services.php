<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
?>
<section id="services">
    <div class="container">
        <div class="services-wrapper">
            <div class="left-part">
                <div class="section-header">
                    <h2>
                        <?php echo $data['title']; ?>
                    </h2>
                    <?php echo $data['description']; ?>
                </div>
            </div>
            <div class="right-part">
                <div class="service-item-wrapper">
                    <?php foreach ($items as $service): ?>
                        <div class="service-item">
                            <div class="service-icon">
                                <?php echo wp_get_attachment_image($service['icon'], 'full'); ?>
                            </div>
                            <div class="service-content">
                                <h3>
                                    <?php echo $service['title']; ?>
                                </h3>
                                <div>
                                    <?php echo $service['description']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>