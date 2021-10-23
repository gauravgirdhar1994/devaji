<section class="section-req">
 <div class="overlay-internal"></div>
 <h1 class="text-center"> Apply For Job</h1>
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
      <?php if(!empty($this->session->flashdata('error'))) { ?>
        <div class="col-md-12">
          <div class="alert alert-danger text-center"><?php echo $this->session->flashdata('error'); ?></div>
        </div>
        <?php } ?>
        <form action="<?php echo base_url();?>submit-application" id="apply_now_form" method="post" novalidate class="form-capt" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
               <label for="sel1">Apply For Job</label>
               <select class="form-control" name="Profile">
                <option  value = "" disabled selected>Select a profile</option>
                <?php if(!empty($jobs)) { foreach($jobs as $job) { ?>
                  <option value="<?php if(!empty($job->Id)) echo $job->Id; ?>"><?php if(!empty($job->JobTitle)) echo $job->JobTitle; ?></option>
                  <?php } } ?>
                </select>
              <!-- <option>Choose Your Profile</option>
              <option>.Net Developer</option>
              <option>UI/UX Developer</option>
              <option>PHP Developer</option>
              <option>Add-ons</option>
            </select> -->
          </div>

        </div>
        <div class="col-sm-6">

          <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" name="Name" class="form-control" id="inputName" placeholder="Your Name" required="required">
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="inputPhone">Phone</label>
            <input type="text" class="form-control" name="Phone" id="inputPhone" placeholder="Your Phone Number">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="Email" id="inputEmail" placeholder="Your Email" required="required">
          </div>

        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="inputExp">Experience(In Years)</label>
            <input type="text" class="form-control" id="inputExp" name="Experience" placeholder="Your Total Experience" required="required">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="inputFile">Resume</label>
            <input type="file" class="form-control" name="Resume" id="inputFile" placeholder="Choose File" required="required">
          </div>

        </div>
      </div>

      <div class="form-group message">
        <label for="inputMessage">Message</label>
        <textarea class="form-control" rows="5" name="Message" placeholder="Your Message..."></textarea>
      </div>
      <div class="g-recaptcha" data-sitekey="6LdxsW0UAAAAAHjE0-8hQP5sOyAtahBslcIweS-k"></div>
      <button type="submit" class="btn btn-primary btn-baff pull-right"><i class="fa fa-paper-plane"></i> Send</button>
    </form>

  </div>
</div>
</section>


<!-- <section class="subcribe-foot">

  <div class="row">

   <div class="mx-auto text-center">
    <h2>Subscribe with us for updates</h2>
    <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod eiusmod</p>
    <div class="input-group">
     <input type="email" class="form-control subsemail" placeholder="Enter your email" required="">
     <span class="input-group-btn">
      <input type="submit" class="btn btn-primary btn-baff" value="Subscribe">
    </span>
  </div>
</div>


</div>

</section> -->
<!-- <script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 4000);
</script> -->