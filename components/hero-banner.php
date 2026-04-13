<?php
$data = getData();
$img_id = isset($data['img']) ? $data['img'] : null;
$video_url = isset($data['video']) ? $data['video'] : null;
?>
<!-- Hero Section -->
<section id="hero-section">
    <div class="container">
        <div class="hero-content">
            <div class="left-content">
                <h1 class="title">
                    <?php echo $data['title']; ?>
                </h1>
                <div class="desc">
                    <?php echo $data['description']; ?>
                </div>
                <div class="group-cta">
                    <div class="cta-wrapper">
                        <a href="<?php echo esc_url($data['btn_link']); ?>" class="animated-button">
                            <span><?php echo esc_html($data['btn_title']); ?></span>
                        </a>
                        <?php if (!empty($data['button_description'])) : ?>
                            <p class="button-description"><?php echo esc_html($data['button_description']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="right-content" id="hero-media-container">
                <?php if ($video_url) : ?>
                    <div class="video-thumb" id="video-trigger" data-video-url="<?php echo esc_url($video_url); ?>">
                        <div class="play-icon">
                            <svg width="70" height="70" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="96" height="96" rx="48" fill="#1C1D20" fill-opacity="0.2" />
                                <rect x="0.5" y="0.5" width="95" height="95" rx="47.5" stroke="white" stroke-opacity="0.6" />
                                <path d="M49.6172 43.2809C50.978 44.054 52.0473 44.6615 52.8092 45.218C53.5762 45.7783 54.1435 46.3639 54.3467 47.1361C54.4957 47.7022 54.4957 48.2979 54.3467 48.8641C54.1435 49.6362 53.5762 50.2218 52.8092 50.7821C52.0473 51.3386 50.978 51.9461 49.6172 52.7192C48.3027 53.466 47.1942 54.0957 46.3527 54.4537C45.5045 54.8145 44.7312 54.9974 43.9795 54.7844C43.4272 54.6278 42.9246 54.3307 42.5197 53.9222C41.9702 53.3679 41.7497 52.6016 41.6453 51.6796C41.5417 50.7641 41.5417 49.5659 41.5417 48.0418V47.9583C41.5417 46.4342 41.5417 45.236 41.6453 44.3206C41.7497 43.3985 41.9702 42.6322 42.5197 42.0778C42.9246 41.6694 43.4272 41.3723 43.9795 41.2157C44.7312 41.0028 45.5045 41.1856 46.3527 41.5464C47.1942 41.9044 48.3027 42.5341 49.6172 43.2809Z" fill="white" />
                            </svg>
                        </div>
                        <div class="image-container">
                            <?php if ($img_id) : ?>
                                <?php echo wp_get_attachment_image($img_id, 'full'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php elseif ($img_id) : ?>
                    <div class="media-wrapper">
                        <div class="image-container">
                            <?php echo wp_get_attachment_image($img_id, 'full'); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const trigger = document.getElementById('video-trigger');
        if (trigger) {
            trigger.addEventListener('click', function() {
                const container = document.getElementById('hero-media-container');
                const videoUrl = this.getAttribute('data-video-url');

                let embedUrl = videoUrl;
                if (videoUrl.includes('watch?v=')) {
                    embedUrl = videoUrl.replace('watch?v=', 'embed/').split('&')[0] + '?autoplay=1&mute=0&rel=0';
                } else if (!videoUrl.includes('embed')) {
                    // Check for short URL format youtu.be/ID
                    const shortMatch = videoUrl.match(/youtu\.be\/([^?&]+)/);
                    if (shortMatch) {
                        embedUrl = `https://www.youtube.com/embed/${shortMatch[1]}?autoplay=1&mute=0&rel=0`;
                    } else {
                        embedUrl = videoUrl + (videoUrl.includes('?') ? '&' : '?') + 'autoplay=1&mute=0&rel=0';
                    }
                } else {
                    embedUrl = videoUrl + (videoUrl.includes('?') ? '&' : '?') + 'autoplay=1&mute=0&rel=0';
                }

                container.innerHTML = `
                    <div class="video-container">
                        <iframe src="${embedUrl}" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                `;
            });
        }
    });
</script>
<!-- End Hero Section -->