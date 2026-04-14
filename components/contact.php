<?php
$data = getData();
?>
<!-- Contact Us -->
<section id="contact-us">
    <div class="container">
        <div class="section-header text-center">
            <h2>
                <?php echo $data['title']; ?>
            </h2>
        </div>
        <div class="calendy text-center">
            <iframe width="100%" height="700" frameborder="0" scrolling="no"
                src="<?php echo carbon_get_theme_option('scaletopia_book_now_link') ?>"
                allow="camera; microphone; clipboard-write">
            </iframe>
        </div>
    </div>
</section>
<!-- End Contact Us -->