<?php
$data = getData();
?>
<!-- Section Banner -->
<section class="generic-section-banner pricing-banner">
    <div class="container">
        <div class="pricing-wrapper">
            <div class="left-part">
                <div class="section-header text-left">
                    <h2>
                        <?php echo $data['title']; ?>
                    </h2>
                    <p>
                        <?php echo $data['description']; ?>
                    </p>
                </div>
            </div>
            <div class="right-part">
                <div class="roi-calculator">
                    <h3 class="text-center">Get your free prospecting quote</h3>

                    <div class="roi-calculator-form">
                        <form id="roi-form">
                            <!-- Monthly Package -->
                            <div class="form-group">
                                <label>Monthly package (USD)</label>
                                <div class="options">
                                    <button type="button" class="selected">$3200</button>
                                    <button type="button">$4000</button>
                                    <button type="button">$5000</button>
                                    <button type="button">$6000</button>
                                </div>
                            </div>

                            <!-- Customer LTV -->
                            <div class="form-group">
                                <label for="customer-ltv">Customer LTV</label>
                                <input type="number" id="customer-ltv" placeholder="$" required>
                            </div>

                            <!-- Retainer Fee -->
                            <div class="form-group">
                                <label for="retainer-fee">Retainer fee that you charge</label>
                                <input type="number" id="retainer-fee" placeholder="$" required>
                            </div>

                            <!-- Closing Rate -->
                            <div class="form-group">
                                <label for="closing-rate">Closing rate</label>
                                <select id="closing-rate">
                                    <option value="15">15%</option>
                                    <option value="20">20%</option>
                                    <option value="25">25%</option>
                                    <option value="30">30%</option>
                                    <option value="35">35%</option>
                                    <option value="40">40%</option>
                                    <option value="45">45%</option>
                                    <option value="50">50%</option>
                                </select>
                            </div>

                            <!-- Month -->
                            <div class="form-group">
                                <label for="month">Month</label>
                                <select id="month">
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="btn ">Calculate your ROI</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Section Banner -->