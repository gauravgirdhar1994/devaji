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
              <h4 class="card-title">Testimonial</h4>
              

              <form class="form" method="post" action="<?php echo base_url(); ?>admin/submit-edit-testimonial" enctype="multipart/form-data">
                <input type="hidden" required="required" name="id" id="service_id" value="<?php if(!empty($testimonial_details[0]->Id)) { echo $testimonial_details[0]->Id; } ?>" >
                <h4>Section 1</h4>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" id="ServiceTitle" name="Name" class="form-control" placeholder="Enter name of member" required="required" value="<?php if(!empty($testimonial_details[0]->Name)) { echo $testimonial_details[0]->Name; } ?>">
                      </div>
                    </div>
                  </div>
                   <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Image</label>
                      <div class="col-sm-9">
                        <input type="file" name="Image" class="form-control" value="<?php if(!empty($testimonial_details[0]->Image)) { echo $testimonial_details[0]->Image; } ?>">
                        <input type="hidden" name="prevImage" value="<?php if(!empty($testimonial_details[0]->Image)){
                          echo $testimonial_details[0]->Image;}?>">
                        </div>
                      </div>
                    </div>
                   
                  </div>
                   <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-sm-3 col-form-label">Message</label>
                        <div class="col-sm-9">
                          <textarea id="editor1" class="ckeditor" name="Message"><?php if(!empty($testimonial_details[0]->Message)) echo $testimonial_details[0]->Message; ?></textarea>
                        </div>
                      </div>
                    </div>
                     <div class="col-md-5">
                     <div class="form-group">
                      <label class="col-sm-3 col-form-label">Location</label>
                      <div class="col-sm-9">
                        <input type="text" id="ServiceTitle" name="Location" class="form-control" placeholder="Enter location" required="required" value="<?php if(!empty($testimonial_details[0]->Location)){
                          echo $testimonial_details[0]->Location;}?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                     <div class="form-group">
                      <label class="col-sm-3 col-form-label">Client Since</label>
                      <div class="col-sm-9">
                        <input type="text" id="ServiceTitle" name="ClientSince" class="form-control" placeholder="Enter client since" required="required" value="<?php if(!empty($testimonial_details[0]->ClientSince)){
                          echo $testimonial_details[0]->ClientSince;}?>">
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


