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
              <h4 class="card-title">Logo Philosophy</h4>
              

              <form class="form" method="post" action="<?php echo base_url(); ?>admin/logo-philosophy/update" enctype="multipart/form-data">


                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($logoData[0]->Heading)) echo $logoData[0]->Heading; ?>" name="Heading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Slide 1 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor1" class="ckeditor" name="Slide1Content"><?php if(!empty($logoData[0]->Slide1Content)) echo $logoData[0]->Slide1Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Slide 2 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor2" class="ckeditor" name="Slide2Content"><?php if(!empty($logoData[0]->Slide2Content)) echo $logoData[0]->Slide2Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Slide 3 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor3" class="ckeditor" name="Slide3Content"><?php if(!empty($logoData[0]->Slide3Content)) echo $logoData[0]->Slide3Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Slide 4 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor4" class="ckeditor" name="Slide4Content"><?php if(!empty($logoData[0]->Slide4Content)) echo $logoData[0]->Slide4Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Slide 5 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor5" class="ckeditor" name="Slide5Content"><?php if(!empty($logoData[0]->Slide5Content)) echo $logoData[0]->Slide5Content; ?></textarea>
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


