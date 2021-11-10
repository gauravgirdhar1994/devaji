<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from technext.github.io/timezone/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 20:48:26 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Devaji Industries - Since 1995</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="manifest" href="site.html">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/frontend/img/favicon.ico">

      <!-- CSS here -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/flaticon.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/slicknav.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/animate.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/themify-icons.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/slick.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/nice-select.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css">
</head>

<body>
      <!--? Preloader Start -->
      <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                  <div class="preloader-inner position-relative">
                        <div class="preloader-circle"></div>
                        <div class="preloader-img pere-text">
                              <img src="<?php echo base_url(); ?>assets/frontend/img/logo/logo.png" alt="">
                        </div>
                  </div>
            </div>
      </div>
      <!-- Preloader Start -->
      <header>
            <!-- Header Start -->
            <div class="header-area">
                  <div class="main-header header-sticky">
                        <div class="container-fluid">
                              <div class="menu-wrapper">
                                    <!-- Logo -->
                                    <div class="logo">
                                          <a href="index-2.html"><img
                                                      src="<?php echo base_url(); ?>assets/frontend/img/logo/logo.png"
                                                      width="250" height="130" alt=""></a>
                                    </div>
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                          <nav>
                                                <ul id="navigation">
                                                      <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                                      <li><a href="<?php echo base_url(); ?>about">About</a></li>
                                                      <li><a href="<?php echo base_url(); ?>products">Products </a>
                                                            <ul class="submenu">
                                                                  <?php $i=1;if(!empty($productCategories)) foreach ($productCategories as $category) { ?>
                                                                  <li><a href="<?php echo base_url(); ?>products/<?php echo $category->categorySlug; ?>"><?php echo $category->categoryName; ?></a>
                                                                  </li>
                                                                  <?php $i++; }?>
                                                            </ul>

                                                      </li>
                                                      <li class="hot"><a
                                                                  href="<?php echo base_url(); ?>products/latest">Latest</a>
                                                      </li>
                                                      <li><a href="<?php echo base_url(); ?>products/featured">Popular</a>
                                                      </li>
                                                      <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                                                </ul>
                                          </nav>
                                    </div>

                              </div>
                              <!-- Mobile Menu -->
                              <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- Header End -->
      </header>
      <main>