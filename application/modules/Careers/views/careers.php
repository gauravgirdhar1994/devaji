              <section class="section-career">
                <div class="overlay-internal"></div>
                <h1 class="text-center"><?php if(!empty($careerData[0]->CareerTitle)) echo $careerData[0]->CareerTitle; ?></h1>
                <p class="text-center"><?php if(!empty($careerData[0]->CareerSubHeading)) echo $careerData[0]->CareerSubHeading; ?></p>
                <a href="<?php echo base_url();?>refer-a-friend" class="btn btn-primary btn-baff btn-join-team">Join Our Team<a/>
                  <a href="<?php echo base_url();?>refer-a-friend" class="btn btn-primary btn-baff btn-join-team">Refer a Friend<a/>
                  </section>

                  <section class="consec">
                    <div class="container">
                     <div class="row">
                      <div class="col-lg-12 text-center">
                        <h2 class="section-heading"><?php if(!empty($careerData[0]->CareerSubHeading2)) echo $careerData[0]->CareerSubHeading2; ?></h2>
                        <p class="text-center"><?php if(!empty($careerData[0]->CareerSummary)) echo $careerData[0]->CareerSummary; ?></p>

                      </div>
                    </div>
                  </div>
                  <div class="container">
                   <div class="row">
                    <?php if(!empty($careerFeatures)) foreach($careerFeatures as $career) { ?>
                      <div class="col-lg-4 col-md-6 text-center">
                       <div class="service-box mt-5 mx-auto">
                        <img src="<?php echo base_url();?>uploads/<?php if(!empty($career->Image)) echo $career->Image; ?>" width="100" height="100" class="img-responsive"><br><br>
                        <h3 class="mb-3"><?php if(!empty($career->SectionSubHeading)) echo $career->SectionSubHeading; ?></h3>
                        <p class="text-muted mb-0"><?php if(!empty($career->Description)) echo $career->Description; ?></p>


                      </div>

                    </div>
                    <?php }?>
                    <!-- <div class="col-lg-4 col-md-6 text-center">
                      <div class="service-box mt-5 mx-auto">
                       <img src="<?php echo base_url();?>img/innovation.png" class="img-responsive"><br><br>
                       <h3 class="mb-3">Innovation</h3>
                       <p class="text-muted mb-0">Reach out to our Sales team directly for immediate assistance with all sales-related inquiries.</p>

                       
                       </div>
                     </div>
                     <div class="col-lg-4 col-md-6 text-center"><br>
                       <div class="service-box mt-5 mx-auto">
                        <img src="<?php echo base_url();?>img/think.png" class="img-responsive"><br>
                        <h3 class="mb-3">Thinking</h3>
                        <p class="text-muted mb-0">Get in touch with customer support for assistance with your Achieve3000 implementation</p>

                      
                        </div>
                      </div> -->
                    </div>
                  </div>
                </section>

                <section class="career_sec2 hiring-profile-sec">
                 <div class="container">
                  <div class="row">
                   <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php if(!empty($careerData[0]->SectionSubHeading)) echo $careerData[0]->SectionSubHeading; ?></h2>
                    <p class="text-center"><?php if(!empty($careerData[0]->SectionSummary)) echo $careerData[0]->SectionSummary; ?></p>

                  </div>
                </div>
              </div>

              <div class="container">

               <div class="hiring-profile-lists">
                <div class="hire-profile-colum">
                 <div class="row">
                  <div class="col-md-4">
                   <div class="mx-auto">                              
                    <h3>Profile</h3>
                  </div>
                </div>
                <div class="col-md-8">
                 <div class="mx-auto">                              
                  <h3>Requirements</h3>
                </div>
              </div>
            </div>
          </div>
          <?php if(!empty($jobData)) foreach ($jobData as $job) { ?>
            <div class="hire-profile-colum">
              <div class="row">
               <div class="col-md-3">
                <div class="mx-auto">
                  <span class="profile-title"> <a href="#" style="color: #333;font-size: 22px;font-weight: 600;"><?php if(!empty($job->JobTitle)) echo $job->JobTitle; ?></a> </span>

                  <span class="profile-position"><?php if(!empty($job->Position)) echo $job->Position; ?></span>
                  <span class="profile-experience"><?php if(!empty($job->Experience)) echo $job->Experience; ?></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mx-auto">
                  <p class="profile-desc"> <?php if(!empty($job->Requirement)) echo $job->Requirement; ?></p>

                </div>
              </div>
              <div class="col-md-3">
                <div class="mx-auto">
                  <a href="<?php echo base_url();?>apply-now" class="btn btn-primar btn-baff">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- <div class="hire-profile-colum">
            <div class="row">
              <div class="col-md-3">
                <div class="mx-auto">
                  <span class="profile-title"> <a href="/senior-software-developer">Senior Software Developer</a> </span>

                  <span class="profile-position">Position: 1</span>
                  <span class="profile-experience">Experience: 4-5 YEARS</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mx-auto">
                  <p class="profile-desc"> Maintain a good standard of coding and adhere to the same conventions as the rest of the team. </p>
                  <p class="profile-desc"> Willing to take ownership of projects and present your proposed solutions to the wider team of non-technical staff. </p>
                  <p class="profile-desc"> Work well both independently and as part of a team with a proactive attitude to problem-solving and an understanding of the role of development in a creative environment. </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="mx-auto">
                  <a href="<?php echo base_url();?>apply-now" class="btn btn-primar btn-baff">Apply Now</a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- iv class="hire-profile-colum">
            <div class="row">
              <div class="col-md-3">
                <div class="mx-auto">
                  <span class="profile-title"> <a href="/senior-software-developer">Senior Software Developer</a> </span>

                  <span class="profile-position">Position: 1</span>
                  <span class="profile-experience">Experience: 4-5 YEARS</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mx-auto">
                  <p class="profile-desc"> Maintain a good standard of coding and adhere to the same conventions as the rest of the team. </p>
                  <p class="profile-desc"> Willing to take ownership of projects and present your proposed solutions to the wider team of non-technical staff. </p>
                  <p class="profile-desc"> Work well both independently and as part of a team with a proactive attitude to problem-solving and an understanding of the role of development in a creative environment. </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="mx-auto">
                  <a href="<?php echo base_url();?>apply-now" class="btn btn-primar btn-baff">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
        -->        
      </div>

    </div>
  </div>
</div>

</section>

<section class="work-culture">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Our Work Culture</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod eiusmod</p>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="gal">

        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

        <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

        <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

        <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt=""><img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

        <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
        <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

      </div>
    </div>
  </div>

</section>
