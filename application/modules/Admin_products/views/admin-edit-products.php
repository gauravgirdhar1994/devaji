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
                                                      action="<?php echo base_url(); ?>admin/submit-edit-product"
                                                      enctype="multipart/form-data">
                                                      <input type="hidden" required="required" name="id" id="product_id"
                                                            value="<?php if(!empty($product_details[0]->Id)) { echo $product_details[0]->Id; } ?>">
                                                      <!-- <h4>Section 1</h4> -->

                                                      <div class="row">
                                                            <div class="col-md-3">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">product
                                                                              Title</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="text" id="productTitle"
                                                                                    name="ProductTitle"
                                                                                    class="form-control"
                                                                                    placeholder="Enter product Title"
                                                                                    value="<?php if(!empty($product_details[0]->productTitle)) { echo $product_details[0]->productTitle; } ?>">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Product
                                                                              Code</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="text" id="productCode"
                                                                                    name="ProductCode"
                                                                                    class="form-control"
                                                                                    placeholder="Enter product Code"
                                                                                    value="<?php if(!empty($product_details[0]->ProductCode)) { echo $product_details[0]->ProductCode; } ?>">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">product
                                                                              Description</label>
                                                                        <div class="col-sm-9">
                                                                              <textarea name="ProductDescription"
                                                                                    class="form-control ckeditor"
                                                                                    id="editor1"
                                                                                    placeholder="product Summary"><?php if(!empty($product_details[0]->ProductDescription)){echo $product_details[0]->ProductDescription;
                        } ?></textarea>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Product
                                                                              Image</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="file" name="productImage"
                                                                                    class="form-control" value="<?php if (!empty($this->session->flashdata('productImage'))) {
    echo $this->session->flashdata('productImage');
}?>">
                                                                              <input type="hidden"
                                                                                    name="prevProductImage"
                                                                                    class="hidden"
                                                                                    value="<?php if (!empty($product_details[0]->productImage)) {echo $product_details[0]->productImage;}?>">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>

                                                      <div class="row">
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label
                                                                              class="col-sm-3 col-form-label">Status</label>
                                                                        <div class="col-sm-9">
                                                                              <label class="mt-radio">
                                                                                    <input type="radio" name="Status"
                                                                                          id="status_enabled" value="1"
                                                                                          <?php if(isset($product_details[0]->Status) && $product_details[0]->Status == '1') { echo 'checked'; } ?>>
                                                                                    Enabled
                                                                                    <span></span>
                                                                              </label>
                                                                              <label class="mt-radio">
                                                                                    <input type="radio" name="Status"
                                                                                          id="status_disabled" value="0"
                                                                                          <?php if(isset($product_details[0]->Status) && $product_details[0]->Status == '0') { echo 'checked'; } ?>>
                                                                                    Disabled
                                                                                    <span></span>
                                                                              </label>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Is
                                                                              Featured</label>
                                                                        <div class="col-sm-9">
                                                                              <label class="mt-radio">
                                                                                    <input type="radio"
                                                                                          name="isFeatured"
                                                                                          id="status_enabled" value="1"
                                                                                          <?php if(isset($product_details[0]->isFeatured) && $product_details[0]->isFeatured == '1') { echo 'checked'; } ?>>
                                                                                    Enabled
                                                                                    <span></span>
                                                                              </label>
                                                                              <label class="mt-radio">
                                                                                    <input type="radio"
                                                                                          name="isFeatured"
                                                                                          id="status_disabled" value="0"
                                                                                          <?php if(isset($product_details[0]->isFeatured) && $product_details[0]->isFeatured == '0') { echo 'checked'; } ?>>
                                                                                    Disabled
                                                                                    <span></span>
                                                                              </label>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Is
                                                                              Latest</label>
                                                                        <div class="col-sm-9">
                                                                              <label class="mt-radio">
                                                                                    <input type="radio" name="isLatest"
                                                                                          id="status_enabled" value="1"
                                                                                          <?php if(isset($product_details[0]->isLatest) && $product_details[0]->isLatest == '1') { echo 'checked'; } ?>>
                                                                                    Enabled
                                                                                    <span></span>
                                                                              </label>
                                                                              <label class="mt-radio">
                                                                                    <input type="radio" name="isLatest"
                                                                                          id="status_disabled" value="0"
                                                                                          <?php if(isset($product_details[0]->isLatest) && $product_details[0]->isLatest == '0') { echo 'checked'; } ?>>
                                                                                    Disabled
                                                                                    <span></span>
                                                                              </label>
                                                                        </div>
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

      <!-- content-wrapper ends -->