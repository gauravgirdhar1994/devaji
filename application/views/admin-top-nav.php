<div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                  <li class="nav-item nav-profile">
                        <div class="nav-link">
                              <div class="profile-image">
                                    <!-- <img src="images/faces/face5.jpg" alt="image"/> -->
                              </div>
                              <div class="profile-name">
                                    <p class="name">
                                          Welcome Admin
                                    </p>
                                    <!--  <p class="designation">
            Super Admin
          </p> -->
                              </div>
                        </div>
                  </li>
                  <!--  <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>dashboard">
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li> -->


                  <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-home" aria-expanded="false"
                              aria-controls="ui-basic">
                              <i class="far fa-compass menu-icon"></i>
                              <span class="menu-title">Home Page Settings</span>
                              <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-home">
                              <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link"
                                                href="<?php echo base_url(); ?>admin/home/sliders">Sliders</a></li>

                              </ul>
                        </div>
                  </li>

                  <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-about" aria-expanded="false"
                              aria-controls="ui-basic">
                              <i class="far fa-compass menu-icon"></i>
                              <span class="menu-title">About Page Settings</span>
                              <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-about">
                              <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link"
                                                href="<?php echo base_url(); ?>admin/about-us">Sections</a></li>

                              </ul>
                        </div>
                  </li>


                  <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-contact" aria-expanded="false"
                              aria-controls="ui-basic">
                              <i class="far fa-compass menu-icon"></i>
                              <span class="menu-title">Contact Page Settings</span>
                              <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-contact">
                              <ul class="nav flex-column sub-menu">

                                    <li class="nav-item"> <a class="nav-link"
                                                href="<?php echo base_url(); ?>admin/contacts/settings">Settings</a>
                                    </li>
                              </ul>
                        </div>
                  </li>



                  <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-categories" aria-expanded="false"
                              aria-controls="ui-basic">
                              <i class="far fa-compass menu-icon"></i>
                              <span class="menu-title">Categories</span>
                              <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-categories">
                              <ul class="nav flex-column sub-menu">

                                    <li class="nav-item"> <a class="nav-link"
                                                href="<?php echo base_url(); ?>admin/add-category">Add new category</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link"
                                                href="<?php echo base_url(); ?>admin/categories-list">View All</a></li>
                                    <!-- <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/services/service-upload">Upload Samples</a></li> -->
                              </ul>
                        </div>
                  </li>

                  <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-services" aria-expanded="false"
                              aria-controls="ui-basic">
                              <i class="far fa-compass menu-icon"></i>
                              <span class="menu-title">Products</span>
                              <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-services">
                              <ul class="nav flex-column sub-menu">

                                    <li class="nav-item"> <a class="nav-link"
                                                href="<?php echo base_url(); ?>admin/add-product">Add new product</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link"
                                                href="<?php echo base_url(); ?>admin/product-list">View All</a></li>
                                    <!-- <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/services/service-upload">Upload Samples</a></li> -->
                              </ul>
                        </div>
                  </li>
            </ul>
      </nav>