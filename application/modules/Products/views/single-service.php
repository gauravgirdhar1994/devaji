<?php if(!empty($services[0]->ServiceBanner)) { ?>
	<!-- <div id="banner-area" class="banner-area" style="background-image:url('<?php echo base_url(); ?>assets/frontend/images/banners/<?php echo str_replace(' ', '_', $services[0]->ServiceBanner); ?>')"> -->
		<div id="banner-area" class="banner-area text-center" style="<?php if(!empty($services[0]->bannerBackground)) echo 'background : '.$services[0]->bannerBackground.';' ?>"><img src="<?php echo base_url(); ?>assets/frontend/images/banners/<?php echo str_replace(' ', '_', $services[0]->ServiceBanner); ?>" height="325" class="img-responsive"></div>
	<?php } else { ?>
		<!-- <div id="banner-area" class="banner-area" style="background-image:url('<?php echo base_url(); ?>assets/frontend/images/banners/Services_II.jpg')"> -->
			<div id="banner-area" class="banner-area text-center" style="background : #45bebe"><img src="<?php echo base_url(); ?>assets/frontend/images/banners/Services_II.jpg" height="325" class="img-responsive"></div>
		<?php } ?>

		<div class="services-overlay"></div>
		<div class="services-banner-heading">
		<?php if($this->session->userdata('language') == 'en') { ?>
			<h1 class="banner-title"><?php if(!empty($services[0]->ServiceTitle)) echo $services[0]->ServiceTitle; ?></h1>
			<ol class="breadcrumb">
				<li><?php echo $lang['home']; ?></li>
				<li><a href="#"><?php if(!empty($services[0]->ServiceTitle)) echo $services[0]->ServiceTitle; ?></a></li>
			</ol>
		<?php } else { ?>
			<h1 class="banner-title"><?php if(!empty($services[0]->ServiceTitleArabic)) echo $services[0]->ServiceTitleArabic; ?></h1>
			<ol class="breadcrumb">
				<li><?php echo $lang['home']; ?></li>
				<li><a href="#"><?php if(!empty($services[0]->ServiceTitleArabic)) echo $services[0]->ServiceTitleArabic; ?></a></li>
			</ol>
		<?php } ?>
		</div>
		<!-- Banner area end -->



		<section id="main-container" class="main-container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="section-heading mb-0">
					<!-- <h2>
						All <span>Services</span>
					</h2> -->
					<?php if($this->session->userdata('language') == 'en') { ?>
					<h3> <?php if(!empty($services[0]->ServiceTitle)) echo $services[0]->ServiceTitle; ?> </h3>
						<span class="animate-border tw-mt-30 tw-mb-20"></span>
					<?php } else { ?>
						<h3> <?php if(!empty($services[0]->ServiceTitleArabic)) echo $services[0]->ServiceTitleArabic; ?> </h3>
						<span class="animate-border tw-mt-30 tw-mb-20"></span>
					<?php } ?>
				</div>
			</div>
			<!-- Heading Col End -->
			<div class="col-lg-12 col-md-12">
				<div class="service-list">
					<div>
					<?php if($this->session->userdata('language') == 'en') { ?>
						<p><?php if(!empty($services[0]->ServiceDescription)) echo $services[0]->ServiceDescription; ?></p>
					<?php } else { ?>
						<p><?php if(!empty($services[0]->ServiceDescriptionArabic)) echo $services[0]->ServiceDescriptionArabic; ?></p>
					<?php } ?>

					</div>
					<!-- List Box End -->
				</div>
				<!-- Carousel End -->
			</div>
			<!-- Content Col end -->
			<?php if(!empty($services[0]->InfographicFile)) {?>
				<div class="infographic-file text-center">
				<?php if($this->session->userdata('language') == 'en') { ?>
					<img src="<?php echo base_url(); ?>uploads/services/infographics/<?php echo $services[0]->InfographicFile;  ?>" class="img-fluid">
				<?php } else { $services[0]->InfographicFile = str_replace('png','JPG',$services[0]->InfographicFile); ?>

					<img src="<?php echo base_url(); ?>uploads/services/infographics/ar/<?php echo $services[0]->InfographicFile;  ?>" class="img-fluid">
				<?php } ?>
					<p class="pull-right">Icons by <a href="https://adioma.com/" target="_blank">Adioma</a></p>
				</div>
			<?php } ?>

			<?php if($services[0]->Id == 22) { ?>
				<div class="col-md-6 col-xs-12 mx-auto">
					<video width="600" autoplay controls>_
						<source src="<?php echo base_url(); ?>WorldWatch_Plus_video.mp4" type="video/mp4">
						</video>
					</div>

				<?php } ?>

				<div class="col-md-12">
				<?php if($this->session->userdata('language') == 'en') { ?>
					<h3>View Sample Reports - <span class="text-danger"><?php if(!empty($services[0]->ServiceTitle)) echo $services[0]->ServiceTitle; ?></span>  : </h3>
				<?php } else {?>
					<h3><?php echo $lang['view-sample']; ?> - <span class="text-danger"><?php if(!empty($services[0]->ServiceTitleArabic)) echo $services[0]->ServiceTitleArabic; ?></span>  : </h3>
				<?php } ?>
									<div class="row">
						<?php $i=1; ?>
						<?php foreach ($services[0]->Samples as $sample) { ?>

							<div class="col-md-4 col-xs-12 sample-report-block <?php if($i%3==0) {echo 'no-border-right';} ?> text-center">
								<h3><?php if(!empty($sample->SampleTitle)) $SampleTitle = strstr($sample->SampleTitle,'-'); $SampleTitle = str_replace('-','',$SampleTitle); echo $SampleTitle; ?></h3>
								<?php if($sample->SampleColor == 'RED') { ?>
								<img width="50" src="<?php echo base_url(); ?>assets/frontend/images/pdf-flat-red.png" href="<?php echo base_url(); ?>uploads/services/samples/<?php if(!empty($sample->SampleFile)) echo $sample->SampleFile; ?>" class="service-file">
							<?php } else { ?>
									<img width="50" src="<?php echo base_url(); ?>assets/frontend/images/pdf-flat-green.png" href="<?php echo base_url(); ?>uploads/services/samples/<?php if(!empty($sample->SampleFile)) echo $sample->SampleFile; ?>" class="service-file">
							<?php } ?>

							</div>

							<?php $i++;} ?>
						</div>
					</div>
					<!-- Row End -->
				</div>
				<!-- Container End -->
			</section>
			<!-- Service List End -->
