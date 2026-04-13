<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
?>
<!-- Pricing -->
<section class="pricing">
    <div class="section-header text-center">
        <h2>
            <?php echo $data['title']; ?>
        </h2>
        <p><?php echo $data['details']; ?></p>
    </div>
    <div class="container">
        <div class="pricing-wrapper">
            <div class="pricing-card">
                <h3>
                    <?php echo $data['card_title']; ?>
                </h3>

                <ul>
                    <?php foreach ($items as $item) : ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/check.svg" alt="Check" />
                            <span><?php echo $item['title']; ?></span>
                        </li>
                    <?php endforeach; ?>

                </ul>

                <div class="pricing-bottom">
                    <span>
                        <?php echo $data['bottom_description']; ?>
                    </span>
                    <a href="<?php echo carbon_get_theme_option('scaletopia_book_now_link') ?>" class="btn" target="__blank">Book a free call</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing -->