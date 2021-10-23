<section class="section-req">
 <div class="overlay-internal"></div>
 <h1 class="text-center"> Refer A Friend</h1>
 <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod eiusmod</p>
</section>




<section class="req-demo">

  <div class="container">
    <div class="row">
      <?php if(!empty($this->session->flashdata('success'))) { ?>
        <div class="col-md-12">
          <div class="alert alert-success text-center"><?php echo $this->session->flashdata('success'); ?></div>
        </div>
        <?php } ?>
        <!-- <?php if(!empty($this->session->flashdata('error'))) { ?>
          <div class="col-md-12">
            <div class="alert alert-danger text-center"><?php echo $this->session->flashdata('error'); ?></div>
          </div>
          <?php } ?> -->
          <form action="<?php echo base_url();?>submit-friend-reference" method="post" novalidate id="refer_friend_form" class="form-capt" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6">

                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" name="Name" class="form-control" id="inputName" placeholder="Your Name" required="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputPhone">Phone</label>
                  <input type="text" name="Phone" class="form-control" id="inputPhone" placeholder="Your Phone Number" required="">
                </div>
              </div>
            </div>
            <div class="row">

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="email" name="Email" class="form-control" id="inputEmail" placeholder="Your Email" required="">
                </div>

              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputFile">Resume</label>
                  <input type="file" name="Resume" class="form-control" id="inputFile" placeholder="Choose File" required="">
                </div>

              </div>
            </div>

            <div class="row">

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputMessage">Source</label>
                  <select class="form-control" id = "sourceSelect" name="Source">

                    <option  value = "" disabled selected>Select a source</option>
                    <?php if(!empty($sources)) { foreach($sources as $source) { ?>
                      <option value="<?php if(!empty($source->Id)) echo $source->Id; ?>"><?php if(!empty($source->SourceName)) echo $source->SourceName; ?></option>
                      <?php } } ?>
                    </select>


                    <!-- </select> -->
                  </div>

                </div>
                <!-- </div> -->

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="inputMessage">Message</label>
                    <textarea class="form-control" name="Message" rows="5" placeholder="Your Message..."></textarea>
                  </div>

                </div>
              </div>
              <div class="row hide" id="referal-block" >
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="inputEmail">Employee Name</label>
                    <input type="text" name="EmployeeName" class="form-control" id="inputEmail" placeholder="Employee Name" required="">
                  </div>

                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="inputFile">Employee Id</label>
                    <input type="text" name="EmployeeId" class="form-control" id="inputFile" placeholder="Employee Id" required="">
                  </div>

                </div>


              </div>
              <div class="row">
               <div class="col-md-12 hide" id="OtherSources">
                <div class="form-group message">
                  <label for="inputMessage">Other Sources</label>
                  <textarea class="form-control" name="OtherSource" rows="3" placeholder="Please enter other sources referred"></textarea>
                </div>
              </div>
            </div>
            <div class="g-recaptcha" data-sitekey="6LdxsW0UAAAAAHjE0-8hQP5sOyAtahBslcIweS-k"></div>
            <button type="submit" class="btn btn-primary btn-baff pull-right"><i class="fa fa-paper-plane"></i> Send</button>
          </form>

        </div>
      </div>
    </section>
    <!-- <script>
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove(); 
        });
      }, 4000);
    </script> -->