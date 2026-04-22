<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
?>
<section class="faq-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>
                <?php echo $data['title']; ?>
            </h2>
            <?php if (!empty($data['description'])): ?>
                <p>
                    <?php echo $data['description']; ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="faq-accordion">
            <?php
            $count = 1;
            foreach ($items as $faq): ?>
                <div class="faq-accordion__item <?php echo $count === 1 ? 'active' : '' ?>">
                    <div class="faq-accordion__header">
                        <span class="faq-accordion__title">
                            <?php echo $faq['title']; ?>
                        </span>
                        <span class="faq-accordion__icon">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="faq-accordion__icon-vertical" d="M7 0V14" stroke="currentColor"
                                    stroke-width="1.5" />
                                <path d="M0 7H14" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </span>
                    </div>
                    <div class="faq-accordion__body">
                        <?php echo $faq['description']; ?>
                    </div>
                </div>
                <?php $count++;
            endforeach; ?>
        </div>
    </div>
</section>