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
              <h4 class="card-title">About Us</h4>
              

              <form class="form" method="post" action="<?php echo base_url(); ?>admin/about-us/update" enctype="multipart/form-data">

                <h4>Section 1</h4>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($aboutData[0]->SectionHeading)) echo $aboutData[0]->SectionHeading; ?>" name="SectionHeading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 1 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor1" class="ckeditor" name="Section1Content"><?php if(!empty($aboutData[0]->Section1Content)) echo $aboutData[0]->Section1Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>


                <hr>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Slider 1 Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($aboutData[0]->Slider1Heading)) echo $aboutData[0]->Slider1Heading; ?>" name="Slider1Heading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Slider 1 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor2" class="ckeditor" name="Slider1Content"><?php if(!empty($aboutData[0]->Slider1Content)) echo $aboutData[0]->Slider1Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Slider 2 Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($aboutData[0]->Slider2Heading)) echo $aboutData[0]->Slider2Heading; ?>" name="Slider2Heading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Slider 2 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor3" class="ckeditor" name="Slider2Content"><?php if(!empty($aboutData[0]->Slider2Content)) echo $aboutData[0]->Slider2Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-success btn-sm pull-right">Submit</button>

              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->


