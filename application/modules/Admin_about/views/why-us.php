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
              <h4 class="card-title">Why Us</h4>
              

              <form class="form" method="post" action="<?php echo base_url(); ?>admin/why-us/update" enctype="multipart/form-data">

                <h4>Section 1</h4>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($whyUsData[0]->Heading)) echo $whyUsData[0]->Heading; ?>" name="Heading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor1" class="ckeditor" name="Content"><?php if(!empty($whyUsData[0]->Content)) echo $whyUsData[0]->Content; ?></textarea>
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


