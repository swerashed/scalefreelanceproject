<?php
$data = getData();
?>
<!-- Section Banner -->
<section class="section-banner">
    <div class="container">
        <div class="section-header text-center">
            <h2>
                <?php echo $data['title']; ?>
            </h2>
            <?php echo $data['description']; ?>
        </div>
    </div>
</section>
<!-- Section Banner -->