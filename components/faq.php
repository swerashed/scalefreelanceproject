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
                <div class="faq-accordion-item <?php echo $count === 1 ? 'active' : '' ?>">
                    <div class="faq-accordion-header">
                        <span class="faq-accordion-title">
                            <?php echo $faq['title']; ?>
                        </span>
                        <span class="faq-accordion-icon">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <div class="faq-accordion-body">
                        <?php echo $faq['description']; ?>
                    </div>
                </div>
                <?php $count++;
            endforeach; ?>
        </div>
    </div>
</section>