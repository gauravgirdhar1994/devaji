<?php $this->load->view('admin-top-nav');?>
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
                                                <h4 class="card-title">Categories</h4>


                                                <form class="form" method="post"
                                                      action="<?php echo base_url(); ?>admin/submit-new-categories"
                                                      enctype="multipart/form-data">

                                                      <!-- <h4>Section 1</h4> -->

                                                      <div class="row">
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Category
                                                                              Name</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="text" id="categoryName"
                                                                                    name="categoryName"
                                                                                    class="form-control"
                                                                                    placeholder="Enter Category Name"
                                                                                    value="<?php if (!empty($this->session->flashdata('categoryName'))) {
    echo $this->session->flashdata('categoryName');
}?>">
                                                                        </div>
                                                                  </div>
                                                            </div>


                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Category
                                                                              Image</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="file" required="required"
                                                                                    name="categoryImage"
                                                                                    class="form-control" value="<?php if (!empty($this->session->flashdata('categoryImage'))) {
    echo $this->session->flashdata('categoryImage');
}?>">
                                                                        </div>
                                                                  </div>
                                                            </div>

                                                            <div class="col-md-4">
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