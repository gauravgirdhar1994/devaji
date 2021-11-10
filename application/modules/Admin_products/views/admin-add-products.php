<?php $this->load->view('admin-top-nav'); ?>
<!-- partial -->
<!-- partial:partials/_sidebar.html -->

<div class="main-panel">
      <div class="content-wrapper">
            <div class="row">
                  <div class="col-12">
                        <div class="card">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <div class="card-body">
                                                <h4 class="card-title">Products</h4>


                                                <form class="form" method="post"
                                                      action="<?php echo base_url(); ?>admin/submit-new-products"
                                                      enctype="multipart/form-data">

                                                      <!-- <h4>Section 1</h4> -->

                                                      <div class="row">
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Product
                                                                              Title</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="text" id="ProductTitle"
                                                                                    name="ProductTitle"
                                                                                    class="form-control"
                                                                                    placeholder="Enter product Title"
                                                                                    value="<?php if(!empty($this->session->flashdata('productTitle'))){
                          echo $this->session->flashdata('productTitle');
                        } ?>">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Product
                                                                              Category</label>
                                                                        <div class="col-sm-9">
                                                                              <select class="form-control"
                                                                                    name="categoryId">
                                                                                    <?php $i=1;if(!empty($productCategories)) foreach ($productCategories as $category) { ?>
                                                                                    <option
                                                                                          value="<?php echo $category->id ?>">
                                                                                          <?php echo $category->categoryName; ?>
                                                                                    </option>
                                                                                    <?php $i++;} ?>
                                                                              </select>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Product
                                                                              Description</label>
                                                                        <div class="col-sm-9">
                                                                              <textarea name="ProductDescription"
                                                                                    class="form-control ckeditor"
                                                                                    placeholder="product Summary"
                                                                                    id="editor1" value="<?php if(!empty($this->session->flashdata('productDescription'))){
                          echo $this->session->flashdata('productDescription');
                        } ?>"></textarea>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>




                                                      <div class="row">
                                                            <div class="col-md-3">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Product
                                                                              Image</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="file" required="required"
                                                                                    name="ProductImage"
                                                                                    class="form-control" value="<?php if(!empty($this->session->flashdata('ProductImage'))){
                          echo $this->session->flashdata('ProductImage');
                        } ?>">
                                                                        </div>
                                                                  </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                  <div class="form-group">
                                                                        <label
                                                                              class="col-sm-3 col-form-label">Status</label>
                                                                        <div class="col-sm-9">
                                                                              <label class="mt-radio">
                                                                                    <input type="radio" name="Status"
                                                                                          id="status_enabled" value="1">
                                                                                    Enabled
                                                                                    <span></span>
                                                                              </label>
                                                                              <label class="mt-radio">
                                                                                    <input type="radio" name="Status"
                                                                                          id="status_disabled" value="0"
                                                                                          checked> Disabled
                                                                                    <span></span>
                                                                              </label>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Featured
                                                                              Product</label>
                                                                        <div class="col-sm-9">
                                                                              <label class="mt-radio">
                                                                                    <input type="radio"
                                                                                          name="isFeatured"
                                                                                          id="status_enabled" value="1">
                                                                                    Yes
                                                                                    <span></span>
                                                                              </label>
                                                                              <label class="mt-radio">
                                                                                    <input type="radio"
                                                                                          name="isFeatured"
                                                                                          id="status_disabled" value="0"
                                                                                          checked> No
                                                                                    <span></span>
                                                                              </label>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Latest
                                                                              Product</label>
                                                                        <div class="col-sm-9">
                                                                              <label class="mt-radio">
                                                                                    <input type="radio" name="isLatest"
                                                                                          id="status_enabled" value="1">
                                                                                    Yes
                                                                                    <span></span>
                                                                              </label>
                                                                              <label class="mt-radio">
                                                                                    <input type="radio" name="isLatest"
                                                                                          id="status_disabled" value="0"
                                                                                          checked> No
                                                                                    <span></span>
                                                                              </label>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>



                                                      <button type="submit"
                                                            class="btn btn-success btn-sm pull-right">Submit</button>

                                                </form>
                                          </div>
                                    </div>

                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- content-wrapper ends -->