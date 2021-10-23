<section id="tw-team" class="tw-team">
	<div class="container">
			<h1 class="banner-title text-black">Customer Testimonials</h1>
		<div class="row">
		<?php foreach($testimonials as $test) { ?>	
		<div class="col-sm-6">
            <div id="tb-testimonial" class="testimonial testimonial-default">
                <div class="testimonial-section">
                    <?php if(!empty($test->Message)) echo $test->Message; ?>
            	</div>
                <div class="testimonial-desc">
                    <img src="<?php echo base_url(); ?>uploads/testimonial/<?php if(!empty($test->Image)) echo $test->Image; ?>" alt="" />
                    <div class="testimonial-writer">
                    	<div class="testimonial-writer-name"> <?php if(!empty($test->Name)) echo $test->Name; ?></div>
                    	<!-- <div class="testimonial-writer-designation">Front End Developer</div>
                    	<a href="#" class="testimonial-writer-company">Touch Base Inc</a> -->
                    </div>
                </div>
            </div>   
		</div>
		<?php } ?>

		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>
Mission End