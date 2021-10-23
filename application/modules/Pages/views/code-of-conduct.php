<div id="banner-area" class="banner-area text-center" style="background : <?php if(!empty($codeofconductData[0]->BannerBackground)) echo $codeofconductData[0]->BannerBackground;?>"><img src="<?php echo base_url(); ?>assets/frontend/images/banners/<?php if(!empty($codeofconductData[0]->BannerImage)) echo $codeofconductData[0]->BannerImage; ?>" height="325" class="img-responsive">
</div>
<div class="services-overlay"></div>
<div class="services-banner-heading">
	<h1 class="banner-title"><?php if(!empty($codeofconductData[0]->PageTitle)) echo $codeofconductData[0]->PageTitle;
	?></h1>
	<ol class="breadcrumb">
		<li><?php echo $lang['home']; ?></li>
		<li><a href="#"><?php if(!empty($codeofconductData[0]->PageTitle)) echo $codeofconductData[0]->PageTitle;?></a></li>
	</ol>
</div>
<!-- Banner area end -->
<section id="main-container" class="main-container">
	<div class="container">

			<?php if(!empty($codeofconductData[0]->PageDescription)) echo $codeofconductData[0]->PageDescription; ?>
		
	</div>

</section>
