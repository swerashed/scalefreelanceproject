<?php
$data = getData();
?>
<!-- Section Banner -->
<section class="pricing-banner">
    <div class="container">
        <div class="section-header text-center">
            <div>
                <h2>
                    <?php echo $data['title']; ?>
                </h2>
            </div>
            <div>
                <p>
                    <?php echo $data['description']; ?>
                </p>
            </div>

            <?php if (!empty($data['btn_title'])): ?>
                <div class="banner-btn-wrapper">
                    <a href="<?php echo !empty($data['btn_link']) ? $data['btn_link'] : '#'; ?>" class="banner-link">
                        <?php echo $data['btn_title']; ?>
                        <span class="icon-circle">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="17" height="17" rx="8.5" stroke="#989FB3"
                                    stroke-opacity="0.4" />
                                <path
                                    d="M5.25921 8.9L5.79921 8.37L8.73921 11.29V5.5H9.55921V11.27L12.4892 8.36L13.0292 8.9L9.36921 12.5H8.91921L5.25921 8.9Z"
                                    fill="#989FB3" />
                            </svg>
                        </span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Section Banner -->