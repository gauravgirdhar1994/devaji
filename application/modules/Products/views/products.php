<!-- Hero Area Start-->
<div class="slider-area ">
      <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                  <div class="row">
                        <div class="col-xl-12">
                              <div class="hero-cap text-center">
                                    <h2><?php echo $pageHeading;?></h2>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<!-- Hero Area End-->

<section class="popular-items latest-padding">
      <div class="container">
            <div class="row">
                  <div class="col-md-3">
                        <div class="filterBlock">
                              <h3>Filter by Product Code</h3>
                              <?php if(!empty($productCodes)) foreach ($productCodes as $code) { ?>
                              <div class="form-check">
                                    <label class="form-check-label">
                                          <input type="checkbox" name="ProductCode[]" class="form-check-input"
                                                value=<?php echo $code->ProductCode; ?>>
                                          <?php if($code->ProductCode != '') {echo $code->ProductCode;} ?>
                                    </label>
                              </div>
                              <?php } ?>
                        </div>
                  </div>
                  <div class="col-md-9">
                        <div class="row product-btn justify-content-between mb-40">

                              <?php if(!empty($productData)) foreach ($productData as $product) { ?>

                              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="card">
                                          <div class="image">
                                                <img src="<?php echo base_url(); ?>uploads/products/<?php if(!empty($product->ProductImage)) echo $product->ProductImage;  ?>"
                                                      width="100%" alt="">
                                          </div>

                                          <div class="text">
                                                <h3><?php if(!empty($product->ProductTitle)) echo $product->ProductTitle;  ?>
                                                </h3>
                                                <p><?php if(!empty($product->ProductDescription)) echo $product->ProductDescription;  ?>
                                                </p>
                                          </div>

                                    </div>
                              </div>
                              <?php } ?>
                        </div>
                  </div>
            </div>

      </div>
</section>