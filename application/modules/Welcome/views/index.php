<!-- Start hero slider/ Owl Carousel Slider -->
<div class="slider-area ">
      <div class="slider-active">

            <?php $i=1;if(!empty($homeSliders)) foreach ($homeSliders as $slider) { ?>
            <div class="single-slider slider-height d-flex align-items-center slide-bg">
                  <div class="container">
                        <div class="row justify-content-between align-items-center">
                              <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                    <div class="hero__caption">
                                          <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">
                                                <?php if(!empty($slider->SliderTitle)) echo $slider->SliderTitle; ?>
                                          </h1>
                                          <h3 data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">
                                                <?php if(!empty($slider->SliderTitleSpan)) echo $slider->SliderTitleSpan; ?>
                                          </h3>
                                    </div>
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                    <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                          <img src="<?php echo base_url(); ?>uploads/sliders/<?php if(!empty($slider->SliderImage)) echo $slider->SliderImage; ?>"
                                                alt="" class=" heartbeat">
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- Slider 1 end -->
            <?php $i++; } ?>
      </div>
      <!-- End Carousel -->

      <div class="about-details section-padding30">
            <div class="container">
                  <div class="row">
                        <div class="owl-slider">
                              <div id="cate-carousel" class="owl-carousel">
                                    <?php $i=1;if(!empty($productCategories)) foreach ($productCategories as $category) { ?>
                                    <a href="<?php echo base_url(); ?>products/<?php echo $category->categorySlug; ?>">
                                          <div class="item">
                                                <h3><?php echo $category->categoryName; ?></h3>
                                                <img src="<?php echo base_url(); ?>uploads/products/category/<?php if(!empty($category->categoryImage)) echo $category->categoryImage;  ?>"
                                                      class="img-fluid">
                                          </div>
                                    </a>

                                    <?php $i++; } ?>


                              </div>
                        </div>

                  </div>
            </div>
      </div>



      <div class="about-details section-padding30">
            <div class="container">
                  <div class="row">
                        <div class="col-lg-12">
                              <div class="about-details-cap mb-50">
                                    <h4><?php echo $aboutUsData[0]->SectionHeading; ?></h4>
                                    <p><?php echo $aboutUsData[0]->Section1Content; ?>
                                    </p>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-lg-6">
                              <div class="about-details-cap mb-50">
                                    <h4><?php  echo $aboutUsData[0]->Slider1Heading; ?></h4>
                                    <p><?php echo $aboutUsData[0]->Slider1Content; ?>
                                    </p>
                              </div>
                        </div>

                        <div class="col-lg-6">
                              <div class="about-details-cap mb-50">
                                    <h4><?php echo $aboutUsData[0]->Slider2Heading; ?></h4>
                                    <p><?php echo $aboutUsData[0]->Slider2Content; ?>
                                    </p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <section class="new-product-area section-padding30">
            <div class="container">
                  <!-- Section tittle -->
                  <div class="row">
                        <div class="col-xl-12">
                              <div class="section-tittle mb-70">
                                    <h2>New Arrivals</h2>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                        <?php if(!empty($latestProductsData)) foreach ($latestProductsData as $product) { ?>

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
      </section>
      <div class="shop-method-area">
            <div class="container-fluid p-0">
                  <div class="method-wrapper">
                        <div class="row d-flex justify-content-between">
                              <div class="col-xl-8 col-lg-8 col-md-8">
                                    <div class="single-method mb-40">
                                          <i class="ti-package"></i>
                                          <h3 class="text-white">Our Products Brochure</h3>
                                          <h4 class="text-white">Download the complete product brochure to know more
                                                about the products in
                                                detail</h4>
                                    </div>
                              </div>
                              <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single-method mb-40">
                                          <a class="btn btn-primary btn-xl mt-50" target="_blank"
                                                href="<?php echo base_url(); ?>devaji_products.pdf" download>Download
                                                Brochure</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <section class="new-product-area section-padding30">
            <div class="container">
                  <!-- Section tittle -->
                  <div class="row">
                        <div class="col-xl-12">
                              <div class="section-tittle mb-70">
                                    <h2>Popular Products</h2>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                        <?php if(!empty($featuredProductsData)) foreach ($featuredProductsData as $product) { ?>

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
      </section>
      <div class="shop-method-area">
            <div class="container-fluid p-0">
                  <div class="method-wrapper">
                        <div class="row d-flex justify-content-between">
                              <div class="col-xl-8 col-lg-8 col-md-8">
                                    <div class="single-method mb-40">
                                          <i class="ti-package"></i>
                                          <h5 class="text-white">For any queries or place order for our products, call
                                                us at:
                                                +91-123234-3434</h5>

                                    </div>
                              </div>
                              <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single-method mb-40">
                                          <a href="<?php echo base_url(); ?>contact"
                                                class="btn btn-primary btn-xl mt-50" download>Get in Touch</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>