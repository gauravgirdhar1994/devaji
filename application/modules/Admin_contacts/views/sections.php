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
              <h4 class="card-title">Contacts</h4>
              

              <form class="form" method="post" action="<?php echo base_url(); ?>admin/contacts/settings/update" enctype="multipart/form-data">

                <h4>Section 1</h4>

                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 1 Heading </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section1Heading)) echo $contactData[0]->Section1Heading; ?>" name="Section1Heading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 1 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor1" class="ckeditor" name="Section1Content"><?php if(!empty($contactData[0]->Section1Content)) echo $contactData[0]->Section1Content; ?></textarea>
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
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section2Heading)) echo $contactData[0]->Section2Heading; ?>" name="Section2Heading" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 2 Content</label>
                      <div class="col-sm-9">
                        <textarea id="editor2" class="ckeditor" name="Section2Content"><?php if(!empty($contactData[0]->Section2Content)) echo $contactData[0]->Section2Content; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 3 Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Heading)) echo $contactData[0]->Section3Heading; ?>" name="Section3Heading" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 3 Heading 1</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Heading1)) echo $contactData[0]->Section3Heading1; ?>" name="Section3Heading1" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="col-sm-4 col-form-label">Section 3 Address 1</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Address1)) echo $contactData[0]->Section3Address1; ?>" name="Section3Address1" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="col-sm-4 col-form-label">Section 3 Phone 1</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Phone1)) echo $contactData[0]->Section3Phone1; ?>" name="Section3Phone1" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="col-sm-4 col-form-label">Section 3 Phone 2</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Phone2)) echo $contactData[0]->Section3Phone2; ?>" name="Section3Phone2" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="col-sm-4 col-form-label">Section 3 Email 1</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Email1)) echo $contactData[0]->Section3Email1; ?>" name="Section3Email1" />
                      </div>
                    </div>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-3 col-form-label">Section 3 Heading 2</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Heading2)) echo $contactData[0]->Section3Heading2; ?>" name="Section3Heading2" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="col-sm-4 col-form-label">Section 3 Address 2</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Address2)) echo $contactData[0]->Section3Address2; ?>" name="Section3Address2" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="col-sm-4 col-form-label">Section 3 Phone 3</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Phone3)) echo $contactData[0]->Section3Phone3; ?>" name="Section3Phone3" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="col-sm-4 col-form-label">Section 3 Phone 4</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Phone4)) echo $contactData[0]->Section3Phone4; ?>" name="Section3Phone4" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="col-sm-4 col-form-label">Section 3 Email 2</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php if(!empty($contactData[0]->Section3Email2)) echo $contactData[0]->Section3Email2; ?>" name="Section3Email2" />
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


