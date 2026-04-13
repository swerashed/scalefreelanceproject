<?php
$data = getData();
$items = isset($data['items']) ? $data['items'] : [];
?>
<!-- Testimonials -->
<section id="testimonials">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">
                <?php echo $data['title']; ?>
            </h2>

            <?php echo $data['description']; ?>

        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($items as $testimonial): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <a href="<?php echo $testimonial['btn_link'] ?>">
                                        <?php echo wp_get_attachment_image($testimonial['img'], 'full'); ?>

                                        <svg class="play-icon" width="56" height="56" viewBox="0 0 56 56" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="56" height="56" rx="28" fill="#1C1D20" fill-opacity="0.2" />
                                            <rect x="0.5" y="0.5" width="55" height="55" rx="27.5" stroke="white"
                                                stroke-opacity="0.6" />
                                            <path
                                                d="M29.617 23.2809C30.9779 24.054 32.0472 24.6615 32.809 25.218C33.576 25.7783 34.1434 26.3639 34.3465 27.1361C34.4955 27.7022 34.4955 28.2979 34.3465 28.8641C34.1434 29.6362 33.576 30.2218 32.809 30.7821C32.0472 31.3386 30.9779 31.9461 29.6171 32.7192C28.3026 33.466 27.1941 34.0957 26.3526 34.4537C25.5044 34.8145 24.731 34.9974 23.9794 34.7844C23.4271 34.6278 22.9245 34.3307 22.5196 33.9222C21.9701 33.3679 21.7496 32.6016 21.6452 31.6796C21.5416 30.7641 21.5416 29.5659 21.5416 28.0418V27.9583C21.5416 26.4342 21.5416 25.236 21.6452 24.3206C21.7496 23.3985 21.9701 22.6322 22.5196 22.0778C22.9245 21.6694 23.4271 21.3723 23.9794 21.2157C24.731 21.0028 25.5044 21.1856 26.3526 21.5464C27.1941 21.9044 28.3026 22.5341 29.617 23.2809Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="author-info">
                                    <h4>
                                        <?php echo $testimonial['title']; ?>
                                    </h4>
                                    <span>
                                        <?php echo $testimonial['sub_title']; ?>
                                    </span>
                                </div>
                                <?php echo $testimonial['description']; ?>

                                <a href="<?php echo $testimonial['btn_link'] ?>" class="animated-button">
                                    <?php echo $testimonial['btn_title']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="pagination">
                <div class="navigation prev">
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.00007 2C2.00007 2 10 7.89187 10 10C10 12.1083 2 18 2 18" stroke="white"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="navigation next">
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.00007 2C2.00007 2 10 7.89187 10 10C10 12.1083 2 18 2 18" stroke="white"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- End Testimonials -->