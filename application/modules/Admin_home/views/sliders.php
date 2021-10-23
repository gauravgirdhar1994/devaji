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


                                                <form class="form" method="post"
                                                      action="<?php echo base_url(); ?>admin/home/sliders/update"
                                                      enctype="multipart/form-data">
                                                      <?php if(!empty($sliderData)) { ?>
                                                      <?php if(count($sliderData == 3)) { ?>
                                                      <?php $i=1; if(!empty($sliderData))  foreach($sliderData as $slider) { ?>
                                                      <!-- <h4>Slider <?php echo $i; ?></h4> -->

                                                      <div class="row">
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Slider
                                                                              Title</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="text" class="form-control"
                                                                                    value="<?php if(!empty($slider->SliderTitle)) echo $slider->SliderTitle; ?>"
                                                                                    name="SliderTitle[]" />
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Slider
                                                                              Title Span</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="text" class="form-control"
                                                                                    value="<?php if(!empty($slider->SliderTitleSpan)) echo $slider->SliderTitleSpan; ?>"
                                                                                    name="SliderTitleSpan[]" />
                                                                        </div>
                                                                  </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">File
                                                                              Upload</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="file"
                                                                                    style="visibility:visible"
                                                                                    name="SliderImage<?php echo $i; ?>"
                                                                                    class="file-upload-default">
                                                                              <input type="hidden"
                                                                                    name="prevImage<?php echo $i; ?>"
                                                                                    value="<?php if(!empty($slider->SliderImage)) echo $slider->SliderImage; ?>">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <!-- <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-sm-3 col-form-label">Slider Content</label>
                            <div class="col-sm-9">
                             <textarea class="form-control ckeditor" name="SliderDescription[]" id="editor<?php echo $i;?>" rows="5"><?php if(!empty($slider->SliderDescription)) echo $slider->SliderDescription; ?></textarea>
                           </div>
                         </div>
                       </div> -->
                                                      </div>
                                                      <hr>
                                                      <?php $i++; } }  ?>
                                                      <?php if(count($sliderData) < 3) { ?>
                                                      <?php for($i=(3-count($sliderData));$i<4;$i++) { ?>
                                                      <h4>Slider <?php echo $i; ?></h4>

                                                      <div class="row">
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Slider
                                                                              Title</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="text" class="form-control"
                                                                                    name="SliderTitle[]" />
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Slider
                                                                              Title Span</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="text" class="form-control"
                                                                                    name="SliderTitleSpan[]" />
                                                                        </div>
                                                                  </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">File
                                                                              Upload</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="file"
                                                                                    style="visibility:visible"
                                                                                    name="SliderImage<?php echo $i; ?>"
                                                                                    class="file-upload-default">

                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <!-- <div class="col-md-6">
                            <div class="form-group">
                              <label class="col-sm-3 col-form-label">Slider Content</label>
                              <div class="col-sm-9">
                               <textarea class="form-control ckeditor" name="SliderDescription[]" id="editor<?php echo $i;?>" rows="5"><?php if(!empty($slider->SliderDescription)) echo $slider->SliderDescription; ?></textarea>
                             </div>
                           </div>
                         </div> -->
                                                      </div>
                                                      <hr>
                                                      <?php } } } else { ?>
                                                      <?php for($i=1;$i<4;$i++) { ?>
                                                      <h4>Slider <?php echo $i; ?></h4>

                                                      <div class="row">
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Slider
                                                                              Title</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="text" class="form-control"
                                                                                    name="SliderTitle[]" />
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">Slider
                                                                              Title Span</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="text" class="form-control"
                                                                                    name="SliderTitleSpan[]" />
                                                                        </div>
                                                                  </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                  <div class="form-group">
                                                                        <label class="col-sm-3 col-form-label">File
                                                                              Upload</label>
                                                                        <div class="col-sm-9">
                                                                              <input type="file"
                                                                                    style="visibility:visible"
                                                                                    name="SliderImage<?php echo $i; ?>"
                                                                                    class="file-upload-default">

                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <!-- <div class="col-md-6">
                            <div class="form-group">
                              <label class="col-sm-3 col-form-label">Slider Content</label>
                              <div class="col-sm-9">
                                <textarea class="form-control ckeditor" name="SliderDescription[]" id="editor<?php echo $i;?>" rows="5"><?php if(!empty($slider->SliderDescription)) echo $slider->SliderDescription; ?></textarea>
                              </div>
                            </div>
                          </div> -->
                                                      </div>
                                                      <hr>
                                                      <?php } }?>
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