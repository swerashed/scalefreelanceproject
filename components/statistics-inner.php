<?php
$data = getData();
$stats = isset($data['stats']) ? $data['stats'] : [];
?>

<!-- Lead Cards -->
<section class="lead-cards">
    <div class="container">
        <div class="lead-cards-wrapper">
            <?php foreach ($stats as $stat): ?>
                <div class="card">
                    <h3>
                        <?php echo $stat['number']; ?>
                    </h3>
                    <?php echo $stat['description']; ?>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- End Lead Cards -->