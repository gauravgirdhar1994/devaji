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
              <h4 class="card-title">Careers</h4>
              

              <form class="form" method="post" action="<?php echo base_url(); ?>admin/careers/update" enctype="multipart/form-data">

                <h4>Section 1</h4>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 1 Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($careerData[0]->Section1Heading)) echo $careerData[0]->Section1Heading; ?>" name="Section1Heading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 1 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor1" class="ckeditor" name="Section1Content"><?php if(!empty($careerData[0]->Section1Content)) echo $careerData[0]->Section1Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>


                <hr>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 2 Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($careerData[0]->Section2Heading)) echo $careerData[0]->Section2Heading; ?>" name="Section2Heading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 2 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor2" class="ckeditor" name="Section2Content"><?php if(!empty($careerData[0]->Section2Content)) echo $careerData[0]->Section2Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 3 Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($careerData[0]->Section3Heading)) echo $careerData[0]->Section3Heading; ?>" name="Section3Heading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 3 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor3" class="ckeditor" name="Section3Content"><?php if(!empty($careerData[0]->Section3Content)) echo $careerData[0]->Section3Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 4 Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($careerData[0]->Section4Heading)) echo $careerData[0]->Section4Heading; ?>" name="Section4Heading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 4 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor4" class="ckeditor" name="Section4Content"><?php if(!empty($careerData[0]->Section4Content)) echo $careerData[0]->Section4Content; ?></textarea>
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


