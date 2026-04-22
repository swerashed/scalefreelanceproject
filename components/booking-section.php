<?php
$data = getData();
$label = !empty($data['label']) ? $data['label'] : '';
$title = !empty($data['title']) ? $data['title'] : '';
$description = !empty($data['description']) ? $data['description'] : '';
$book_now_link = carbon_get_theme_option('scaletopia_book_now_link');
?>

<!-- Booking Section -->
<section class="booking-section">
    <div class="container">
        <div class="section-header text-center">
            <?php if ($label): ?>
                <div class="booking-label">
                    <?php echo $label; ?>
                </div>
            <?php endif; ?>

            <?php if ($title): ?>
                <h2 class="booking-title">
                    <?php echo $title; ?>
                </h2>
            <?php endif; ?>

            <?php if ($description): ?>
                <div class="booking-description">
                    <?php echo $description; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="booking-embed-container">
            <?php if ($book_now_link): ?>
                <div class="embed-wrapper">
                    <iframe class="calendly-iframe" width="100%" height="700" frameborder="0" scrolling="no"
                        src="<?php echo $book_now_link; ?>"
                        allow="camera; microphone; clipboard-write">
                    </iframe>
                </div>
            <?php else: ?>
                <div class="embed-placeholder">
                    <div class="placeholder-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 2V6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 2V6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3 10H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p>PLEASE SET 'BOOK NOW LINK' IN THEME OPTIONS</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Booking Section -->
