<?php
$data = getData();
?>
<!-- Section Banner -->
<section class="generic-section-banner pricing-banner">
    <div class="container">
        <div class="section-header text-center">
            <h2>
                <?php echo $data['title']; ?>
            </h2>
            <p>
                <?php echo $data['description']; ?>
            </p>

            <?php if (!empty($data['btn_title'])): ?>
                <div class="banner-btn-wrapper">
                    <a href="<?php echo !empty($data['btn_link']) ? $data['btn_link'] : '#'; ?>" class="banner-link">
                        <?php echo $data['btn_title']; ?>
                        <span class="icon-circle">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 9.0001C18 9.0001 13.5811 15 12 15C10.4188 15 6 9.00005 6 9.00005" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Section Banner -->