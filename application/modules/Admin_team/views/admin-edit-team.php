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
              <h4 class="card-title">Team Members</h4>
              

              <form class="form" method="post" action="<?php echo base_url(); ?>admin/submit-edit-team" enctype="multipart/form-data">
                <input type="hidden" required="required" name="id" id="service_id" value="<?php if(!empty($team_details[0]->Id)) { echo $team_details[0]->Id; } ?>" >
                <h4>Section 1</h4>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Name of Member</label>
                      <div class="col-sm-9">
                        <input type="text" id="ServiceTitle" name="MemberName" class="form-control" placeholder="Enter name of member" required="required" value="<?php if(!empty($team_details[0]->MemberName)) { echo $team_details[0]->MemberName; } ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Designation</label>
                      <div class="col-sm-9">
                        <input type="text" name="MemberDesignation" class="form-control" placeholder="Enter Designation" value="<?php if(!empty($team_details[0]->MemberDesignation)) { echo $team_details[0]->MemberDesignation; } ?>">
                      </div>
                    </div>
                  </div>
                </div>


                <hr>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Member Image</label>
                      <div class="col-sm-9">
                        <input type="file" name="MemberImage" class="form-control" value="<?php if(!empty($team_details[0]->MemberImage)) { echo $team_details[0]->MemberImage; } ?>">
                        <input type="hidden" name="prevMemberImage" value="<?php if(!empty($team_details[0]->MemberImage)){
                          echo $team_details[0]->MemberImage;}?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                        <label class="col-sm-3 col-form-label">LinkedIn Url</label>
                        <div class="col-sm-9">
                          <input type="text"  name="LinkedInUrl" class="form-control" placeholder="Enter LinkedIn Url" value="<?php if(!empty($team_details[0]->LinkedInUrl)) { echo $team_details[0]->LinkedInUrl; } ?>">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">


                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-sm-3 col-form-label">Member Description</label>
                        <div class="col-sm-9">
                          <textarea id="editor1" class="ckeditor" name="MemberDescription"><?php if(!empty($team_details[0]->MemberDescription)) echo $team_details[0]->MemberDescription; ?></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-7">
                      <div class="form-group">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                         <label class="mt-radio">
                          <input type="radio" name="Status" id="status_enabled"  value="1" <?php if(isset($team_details[0]->Status) && $team_details[0]->Status == '1') { echo 'checked'; } ?>> Enabled
                          <span></span>
                        </label>
                        <label class="mt-radio">
                          <input type="radio" name="Status" id="status_disabled" value="0"<?php if(isset($team_details[0]->Status) && $team_details[0]->Status == '0') { echo 'checked'; } ?>> Disabled
                          <span></span>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Show on Home</label>
                      <div class="col-sm-9">
                       <label class="mt-radio">
                        <input type="radio" name="ShowOnHome"  value="1" <?php if(isset($team_details[0]->ShowOnHome) && $team_details[0]->ShowOnHome == '1') { echo 'checked'; } ?>> Enabled
                        <span></span>
                      </label>
                      <label class="mt-radio">
                        <input type="radio" name="ShowOnHome" value="0"<?php if(isset($team_details[0]->ShowOnHome) && $team_details[0]->ShowOnHome == '0') { echo 'checked'; } ?>> Disabled
                        <span></span>
                      </label>
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


