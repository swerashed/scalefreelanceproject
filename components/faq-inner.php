<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
?>
<section class="pricing-faq">
    <div class="container">
        <div class="section-header text-center">
            <h2>
                <?php echo $data['title']; ?>
            </h2>
            <p>
                <?php echo $data['description']; ?>
            </p>
        </div>
        <div class="faq-section">
            <div class="accordion">
                <?php
                $count = 1;
                foreach ($items as  $faq): ?>
                    <div class="accordion-item <?php echo $count === 1 ? 'active' : '' ?>">
                        <div class="accordion-header">
                            <span class="number">
                                <?php echo $count; ?>
                            </span>
                            <span>
                                <?php echo $faq['title']; ?>
                                <img src="<?php echo get_template_directory_uri() ?>//src/img/arrow.svg" alt="arrow" />
                            </span>
                        </div>
                        <div class="accordion-body">
                            <?php echo $faq['description']; ?>
                        </div>
                    </div>
                <?php $count++;
                endforeach; ?>

            </div>
        </div>
    </div>
</section>