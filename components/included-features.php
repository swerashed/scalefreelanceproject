<?php
$data = getData(); // Get data set by render callback
$columns = isset($data['columns']) ? $data['columns'] : [];
$brand_title = isset($data['brand_title']) ? $data['brand_title'] : '';
$brand_suffix = isset($data['brand_suffix']) ? $data['brand_suffix'] : '';
$box_subtitle = isset($data['box_subtitle']) ? $data['box_subtitle'] : '';
?>

<section class="included-features">
    <div class="containerWide">
        <div class="section-header text-center">
            <?php if (!empty($data['title'])) : ?>
                <h2 class="serif"><?php echo $data['title']; ?></h2>
            <?php endif; ?>
            <?php if (!empty($data['subtitle'])) : ?>
                <p class="subtitle"><?php echo $data['subtitle']; ?></p>
            <?php endif; ?>
        </div>

        <div class="features-box">
            <div class="features-box__header">
                <div class="features-box__branding">
                    <h3 class="brand">
                        <?php echo $brand_title; ?> <span class="serif-italic"><?php echo $brand_suffix; ?></span>
                    </h3>
                    <p class="box-subtitle"><?php echo $box_subtitle; ?></p>
                </div>
                <div class="features-box__cta">
                    <a href="<?php echo isset($data['btn_link']) ? $data['btn_link'] : '#'; ?>" class="animated-button">
                        <span><?php echo isset($data['btn_text']) ? $data['btn_text'] : ''; ?></span>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7H13M13 7L7 1M13 7L7 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="features-box__grid">
                <?php foreach ($columns as $column) : ?>
                    <div class="features-box__col">
                        <h4 class="col-title"><?php echo $column['col_title']; ?></h4>
                        <ul class="features-list">
                            <?php 
                            $features = isset($column['features']) ? $column['features'] : [];
                            foreach ($features as $feature) : 
                            ?>
                                <li class="features-list__item">
                                    <span class="features-list__icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.6666 5L7.49992 14.1667L3.33325 10" stroke="#552AED" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span class="features-list__text"><?php echo $feature['feature_text']; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="features-box__footer">
                <p>
                    <?php echo isset($data['footer_text']) ? $data['footer_text'] : ''; ?>
                    <a href="<?php echo isset($data['footer_link_url']) ? $data['footer_link_url'] : '#'; ?>"><?php echo isset($data['footer_link_text']) ? $data['footer_link_text'] : ''; ?></a>
                </p>
            </div>
        </div>
    </div>
</section>
