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
              <h4 class="card-title">Testimonials</h4>
              

              <form class="form" method="post" action="<?php echo base_url(); ?>admin/submit-testimonial" enctype="multipart/form-data">

                <h4>Section 1</h4>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" id="ServiceTitle" name="Name" class="form-control" placeholder="Enter name" required="required" value="<?php if(!empty($this->session->flashdata('MemberName'))){
                          echo $this->session->flashdata('Name');
                        } ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Message</label>
                      <div class="col-sm-9">
                        <textarea id="editor1" class="ckeditor" name="Message"><?php if(!empty($contactData[0]->Message)) echo $contactData[0]->Message; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                     <div class="form-group">
                      <label class="col-sm-3 col-form-label">Location</label>
                      <div class="col-sm-9">
                        <input type="text" id="ServiceTitle" name="Location" class="form-control" placeholder="Enter location" required="required" value="<?php if(!empty($this->session->flashdata('MemberName'))){
                          echo $this->session->flashdata('Location');} ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                     <div class="form-group">
                      <label class="col-sm-3 col-form-label">Client Since</label>
                      <div class="col-sm-9">
                        <input type="text" id="ServiceTitle" name="ClientSince" class="form-control" placeholder="Enter client since" required="required" value="<?php if(!empty($this->session->flashdata('MemberName'))){
                          echo $this->session->flashdata('ClientSince');
                        } ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Image</label>
                      <div class="col-sm-9">
                        <input type="file" required="required" name="Image" class="form-control" value="<?php if(!empty($this->session->flashdata('Image'))){
                          echo $this->session->flashdata('Image');
                        } ?>">
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


