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
              <h4 class="card-title">Slider</h4>
              
              <form class="form">
                <div data-repeater-list="group-a">
                  <div data-repeater-item>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Slider Title</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="SliderTitle" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Slider Title Span</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="SliderTitleSpan" />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea class="form-control" name="SliderContent" id="exampleTextarea1" rows="4"></textarea>
                          </div>
                        </div>
                      </div>

                      <!-- <button type="submit" class="btn btn-success btn-sm">Submit</button> -->
                      <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2" >
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </div>
                  <button data-repeater-create type="button" class="btn btn-info btn-sm icon-btn ml-2 mb-2">
                    <i class="fa fa-plus"></i>
                  </button>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->


